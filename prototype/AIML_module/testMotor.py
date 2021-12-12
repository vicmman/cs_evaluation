import re
import motorConversacional as mc

while True:
    utterance = input('Tu turno:')
    respuesta_sistema = mc.genera_respuesta(utterance)
    print(respuesta_sistema)
    if re.search(r"\b(adios|hasta luego|nos vemos|bye)\b", utterance, re.I):
        break