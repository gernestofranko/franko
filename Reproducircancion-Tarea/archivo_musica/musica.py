#Importamos librerias necesarias...
import os
import sys
import pygame.mixer
import pygame.cdrom


#Empezamos a trabajar
pygame.mixer.init(44100, -16, 2, 4036)
reload(sys)
sys.setdefaultencoding('utf8')

pygame.mixer.music.load('../we.mp3')
pygame.mixer.music.play()

#Y si queremos llamar la cancion desde otra carpeta que esta dentro de la que contiene el archivo py.
#pygame.mixer.music.load('cancion/we.mp3')
#pygame.mixer.music.play()

