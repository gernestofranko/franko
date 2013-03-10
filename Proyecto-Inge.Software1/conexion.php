<?php

$conexion=mysql_connect("localhost","root","root") or die("Conexion no establecida con el servidor");
$base=mysql_select_db('registro',$conexion) or die("No se puede establecer la conexion.");

?>