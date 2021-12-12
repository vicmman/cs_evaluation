from __future__ import division

import re
import sys
import aiml
import os
import pygame
from datetime import datetime
import time
import pyaudio
from six.moves import queue

import motorConversacional as mc

from google.cloud import speech
from google.cloud import texttospeech
from google.oauth2 import service_account

credentials = service_account.Credentials.from_service_account_file("gcp.json")


# Audio recording parameters
RATE = 16000
CHANNELS = 1
CHUNK = int(RATE / 10)  # 100ms
BRAIN_FILE = "brain.brn"

# Initializes pygame and pyaudio
pygame.mixer.pre_init(RATE, -16, CHANNELS, 2048) # setup mixer to avoid sound lag
pygame.mixer.init()
pygame.init()

fechaSesion = datetime.now().strftime("%d%m%Y%H%M%S")
sessionFileName = "historial_dialogo_" + fechaSesion + ".txt"
texttospeech_client = texttospeech.TextToSpeechClient(credentials=credentials)


texttospeech_voice = texttospeech.VoiceSelectionParams(
    language_code='es-US',name="es-US-Wavenet-A", ssml_gender=texttospeech.SsmlVoiceGender.FEMALE)

# El valor normal de speaking_rate es 1.0, puede tener valores entre 0.25 y 4
texttospeech_audio_config = texttospeech.AudioConfig(
    audio_encoding=texttospeech.AudioEncoding.LINEAR16, speaking_rate=0.80)



class MicrophoneStream(object):
    """Opens a recording stream as a generator yielding the audio chunks."""

    def __init__(self, rate, chunk):
        self._rate = rate
        self._chunk = chunk

        # Create a thread-safe buffer of audio data
        self._buff = queue.Queue()
        self.closed = True

    def __enter__(self):
        self._audio_interface = pyaudio.PyAudio()
        self._audio_stream = self._audio_interface.open(
            format=pyaudio.paInt16,
            # The API currently only supports 1-channel (mono) audio
            # https://goo.gl/z757pE
            channels=1,
            rate=self._rate,
            input=True,
            frames_per_buffer=self._chunk,
            # Run the audio stream asynchronously to fill the buffer object.
            # This is necessary so that the input device's buffer doesn't
            # overflow while the calling thread makes network requests, etc.
            stream_callback=self._fill_buffer,
        )

        self.closed = False

        return self

    def __exit__(self, type, value, traceback):
        self._audio_stream.stop_stream()
        self._audio_stream.close()
        self.closed = True
        # Signal the generator to terminate so that the client's
        # streaming_recognize method will not block the process termination.
        self._buff.put(None)
        self._audio_interface.terminate()

    def _fill_buffer(self, in_data, frame_count, time_info, status_flags):
        """Continuously collect data from the audio stream, into the buffer."""
        self._buff.put(in_data)
        return None, pyaudio.paContinue

    def generator(self):
        while not self.closed:
            # Use a blocking get() to ensure there's at least one chunk of
            # data, and stop iteration if the chunk is None, indicating the
            # end of the audio stream.
            chunk = self._buff.get()
            if chunk is None:
                return
            data = [chunk]

            # Now consume whatever other data's still buffered.
            while True:
                try:
                    chunk = self._buff.get(block=False)
                    if chunk is None:
                        return
                    data.append(chunk)
                except queue.Empty:
                    break

            yield b"".join(data)

def listen_print_loop(responses):
    """Iterates through server responses and prints them.

    The responses passed is a generator that will block until a response
    is provided by the server.

    Each response may contain multiple results, and each result may contain
    multiple alternatives; for details, see https://goo.gl/tjCPAU.  Here we
    print only the transcription for the top alternative of the top result.

    In this case, responses are provided for interim results as well. If the
    response is an interim one, print a line feed at the end of it, to allow
    the next result to overwrite it, until the response is a final one. For the
    final one, print a newline to preserve the finalized transcription.
    """
    num_chars_printed = 0
    
    for response in responses:
        if not response.results:
            continue

        # The `results` list is consecutive. For streaming, we only care about
        # the first result being considered, since once it's `is_final`, it
        # moves on to considering the next utterance.
        result = response.results[0]
        if not result.alternatives:
            continue

        # Display the transcription of the top alternative.
        transcript = result.alternatives[0].transcript

        # Display interim results, but with a carriage return at the end of the
        # line, so subsequent lines will overwrite them.
        #
        # If the previous result was longer than this one, we need to print
        # some extra spaces to overwrite the previous result
        overwrite_chars = " " * (num_chars_printed - len(transcript))

        if not result.is_final:
            sys.stdout.write(transcript + overwrite_chars + "\r")
            sys.stdout.flush()

            num_chars_printed = len(transcript)

        else:

            # Exit recognition if any of the transcribed phrases could be
            # one of our keywords.
            if re.search(r"\b(adiós|hasta luego|nos vemos|bye)\b", transcript, re.I):
                #print("Exiting..")
                respuesta_aiml = mc.genera_respuesta(transcript)
                print("Mari:",respuesta_aiml)

                # Se guarda en una variable el texto que será enviado a google TTS
                input_text = texttospeech.SynthesisInput(text=respuesta_aiml)

                # Se envía el texto a google TTS y se obtiene la respuesta
                google_tts_response = texttospeech_client.synthesize_speech(
                    input=input_text, voice=texttospeech_voice, audio_config=texttospeech_audio_config)
                
                # Se obtiene el contenido de audio de la respuesta y se guarda en un archivo de audio
                with open('respuestaTTS_out.wav', 'wb') as out:
                    out.write(google_tts_response.audio_content)        

                # Se reproduce con Pygame
                sound = pygame.mixer.Sound('respuestaTTS_out.wav')
                sound.play()
                while pygame.mixer.get_busy():
                    continue
                break

            else:
                # Se obtiene la respuesta de AIML de acuerdo a la coincidencia con algún patron
                print('Paciente: ' + transcript)
                respuesta_aiml = mc.genera_respuesta(transcript)
                print("Mari:",respuesta_aiml)

                # Se guarda en una variable el texto que será enviado a google TTS
                input_text = texttospeech.SynthesisInput(text=respuesta_aiml)

                # Se envía el texto a google TTS y se obtiene la respuesta
                google_tts_response = texttospeech_client.synthesize_speech(
                    input=input_text, voice=texttospeech_voice, audio_config=texttospeech_audio_config)
                
                # Se obtiene el contenido de audio de la respuesta y se guarda en un archivo de audio
                with open('respuestaTTS_out.wav', 'wb') as out:
                    out.write(google_tts_response.audio_content)        

                # Se reproduce con Pygame
                sound = pygame.mixer.Sound('respuestaTTS_out.wav')
                sound.play()
                #length = pygame.mixer.Sound.get_length(sound)            
                
                while pygame.mixer.get_busy():
                    pass                
                    #time.sleep(length)
            num_chars_printed = 0

            


def main():
    # See http://g.co/cloud/speech/docs/languages
    # for a list of supported languages.
    language_code = "es-MX"  # a BCP-47 language tag

    client = speech.SpeechClient(credentials=credentials)
    config = speech.RecognitionConfig(
        encoding=speech.RecognitionConfig.AudioEncoding.LINEAR16,
        sample_rate_hertz=RATE,
        language_code=language_code,
    )

    streaming_config = speech.StreamingRecognitionConfig(
        config=config, interim_results=True
    )

    with MicrophoneStream(RATE, CHUNK) as stream:
        audio_generator = stream.generator()
        requests = (
            speech.StreamingRecognizeRequest(audio_content=content)
            for content in audio_generator
        )

        responses = client.streaming_recognize(streaming_config, requests)

        # Now, put the transcription responses to use.
        listen_print_loop(responses)
        

if __name__ == "__main__":
    main()