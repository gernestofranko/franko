import os
import sys
import string
import operaciones
#German Ernesto Franco Gonzalez SMIS362613
#Ojo ing ahorita no hay validaciones! solamente captura numeros enteros en los campos de valores
controlador = 0
while(controlador == 0):
    print"#### BIENVENIDO ##### IS1 UGB ######"
    nombre = str(raw_input("Cual es su nombre: "))
    valor1 = int(raw_input("Digite el valor 1: "))
    valor2 = int(raw_input("Digite el valor 2: "))
    accionMatematica = int(raw_input(nombre + " Que accion desea realizar???:\n 1-Suma\n 2-Resta\n 3-Multiplicacion\n 4-Division\n:"))

    if accionMatematica == 1:
        operaciones.moduloSuma(nombre,valor1,valor2)
    elif accionMatematica == 2:
        operaciones.moduloResta(nombre,valor1,valor2)
    elif accionMatematica == 3:
        operaciones.moduloMultiplicacion(nombre,valor1,valor2)
    elif accionMatematica == 4:
        operaciones.moduloDivision(nombre,valor1,valor2)
    else:
        print"El numero no es correcto "+nombre

    manejador=str(raw_input("\n#######Desea hacer otra operacion!???########\n s-Si\n n-No\n: "))
    if manejador == "s":
        controlador=0
    else:
        controlador=1
        print"Ok! Adios " + nombre
    


