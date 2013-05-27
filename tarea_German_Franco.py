#Listas en Pythonnnn-------------------------------------------------------------
Lista = ["Primer Dato", "Segundo dato", "Tercer Dato", "Cuarto Dato", "Quinto dato"]
print(Lista[0])#nos imprime el indice 0
print(Lista[1:2])#Solo nos muestra lo que esta entre el indice 1 yel 2
print(Lista[0:])#imprime desde el elemento 0 hasta el ultimo
Lista.append("Sexto Dato")#Agrega un elemento mas al final de la lista
print(Lista)
Lista.count("Primer Dato")#Cuenta las apariciones de el elemento
Lista.reverse()#Invierte el contenidoo de la lista
print(Lista)

#Cadenas de texto en Python-------------------------------------------------------
Cadena="Contenido de la cadena UGB"#Declaracion de una variable de cadena
print(Cadena)
if "Cont" in Cadena:#busca un elemento especificado dentro de una cadena
    print("Esta Cont!")

print(Cadena.find('tenido'))#muestra la posicion en la que inicia la palabra que estamos buscando
print Cadena.replace("UGB","REEMPLAZADA")#Nos ayuda a reemplazar un texto dentro de una cadena
dato = Cadena.split(" ")#NOs ayuda a cortar una cadena dependiendo de el parametro que le pongamos como delimitador en este caso es espacio
print(dato)#Mostramos el array que nos genero
print(dato[1])#Extraemos una porcion de lo que nos genero el array como cadena
print(Cadena.capitalize())#Nos muestra el primer caracter en mayuscula
print(Cadena.upper())#Nos devuelve en mayuscula toda la cadena

###SUMA-------------------

suma1 = int(raw_input("Digita la cantidad 1:"))
suma2 = int(raw_input("Digita la cantidad2 :"))
print "El total dela suma es: ", suma1 + suma2
print("Ahora vamos a la Resta")
resta1 = int(raw_input("Digita la primera cantidad: "))
resta2 = int(raw_input("Digita la segunda cantidad: "))
print "El total de la resta es: ", resta1 - resta2
print("Ahora vamos a la multiplicacion")
mul1 = int(raw_input("Digita la primera cantidad: "))
mul2 = int(raw_input("Digita la segunda cantidad: "))
print "El resultado de la multiplicacion es ", mul1 * mul2
print"Ahora vamos con la Division"
div1 = int(raw_input("Digite el primer valor a dividir: "))
div2 = int(raw_input("Digite el segundo valor a dividir: "))
print"El total de la division es: ", div1 / div2

