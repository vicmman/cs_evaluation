<?php 
$conexion = pg_connect("host=localhost dbname=pacientes user=vicman password=Carlitos.1")
    or die('Error en la conexion: ' . pg_last_error());
    
    if ($conexion) {
    	echo "Conexión realiza con éxito";
    }
    else{
    	$error = pg_last_error();
    	echo "$error";
    }
 ?>