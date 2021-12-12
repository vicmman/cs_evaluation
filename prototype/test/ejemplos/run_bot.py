import aiml
import subprocess

# Create the kernel and learn AIML files
kernel = aiml.Kernel()
kernel.learn("std-startup.xml")
kernel.respond("load aiml b")

#Se establecen las propiedades del bot
kernel.setBotPredicate("name","Frida")
kernel.setBotPredicate("age","30")
kernel.setBotPredicate("gender","Mujer")


#Se establecen constantes dentro que el bot puede utilizar
sessionId = 12345
kernel.setPredicate("dog", "Chenin")
kernel.setPredicate("topic", "presentacion")
kernel.setPredicate("name_patient", "Amador")
kernel.setPredicate("ocupacion","Militar")
#Si queremos establecer propiedades de acuerdo al usuario de cada sesión
#kernel.setPredicate("dog", "Chenin", sessionId)	


# Press CTRL-C to break this loop
while True:
    #print (kernel.respond(input("Tu turno:")))
    user_input = input("Platícame algo >>")
    if user_input == 'salir':
    	exit()
    else:
	    response = kernel.respond(user_input)
	    print(response)
	    #Sintetiza la respuesta
	    #print(subprocess.getoutput("/usr/bin/espeak -v es-la -p 99 -s 150 \"" + response + "\" ")) #-v <voice> -p <pitch adjustment> -s <speed in words per minute>
