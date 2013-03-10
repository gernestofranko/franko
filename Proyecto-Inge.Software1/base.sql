/*Nombres
Apellidos
Direccion
Dui
Edad
Nivel Academico
----------------------------------Referencia en caso de emergencia---------------
Nombre
Direccion 
Parentezco

*/

create database registro;
use registro;
create table Datos(Id_Registro BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Nombres text,
Apellidos text,
Direccion text,
Dui text,
Edad text,
NivelAcad text,
NombreRef text,
DireccionRef text,
ParentezcoRef text);