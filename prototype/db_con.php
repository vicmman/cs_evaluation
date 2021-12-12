<?php 
$conexion = pg_connect("host=localhost dbname=pacientes user=vicman password=Carlitos.1")
    or die('Error en la conexion: ' . pg_last_error());

if (isset($_POST['reg_1'])) {
	if (strlen($_POST['nombre_paciente']) >= 1) {
		$nombre_paciente = trim($_POST['nombre_paciente']);
		$nombre_preferido = trim($_POST['nombre_preferido']);
		$sexo = trim($_POST['sexo']);
		$fecha_nacimiento = trim($_POST['fecha_nacimiento']);
		$lugar_nacimiento = trim($_POST['lugar_nacimiento']);
		$lugar_residencia = trim($_POST['lugar_residencia']);
		$nivel_estudios = trim($_POST['nivel_estudios']);
		$ocupacion = trim($_POST['ocupacion']);
		$religion = trim($_POST['religion']);
		$nombre_cuidador = trim($_POST['nombre_cuidador']);
		$parentesco_cuidador = trim($_POST['parentesco_cuidador']);
		$fecha_registro = date('d-m-Y');
			
		$consulta = "INSERT INTO paciente (nombre_paciente, nombre_preferido, sexo, fecha_nacimiento, lugar_nacimiento, lugar_residencia, nivel_estudios, ocupacion, religion, nombre_cuidador, parentesco_cuidador, fecha_registro) VALUES ('$nombre_paciente','$nombre_preferido', '$sexo', '$fecha_nacimiento', '$lugar_nacimiento', '$lugar_residencia', '$nivel_estudios', '$ocupacion', '$religion', '$nombre_cuidador', '$parentesco_cuidador', '$fecha_registro')";
		$resultado = pg_query($conexion,$consulta);
		if ($resultado == false) {	 		
		 	$error = pg_last_error();
		 	echo "$error";
		} 
		else {	 	
			header('Location: reg_s2.php'); 	
		}
	}
	else{
		echo "Favor de ingresar todos los datos";
	}	 
}
if (isset($_POST['reg_2'])) {
	if (count($_POST['nombre_familiar']) >= 1) {
		$nombres = $_POST['nombre_familiar'];
		$parentescos = $_POST['parentesco_familiar'];
		$edades = $_POST['edad'];
		$informaciones = $_POST['informacion_adicional'];		
		$consulta_id = "SELECT MAX(id_paciente) FROM paciente";
		$resultado = pg_query($conexion, $consulta_id);
		if ($resultado == false) {
		 	$error = pg_last_error();
		 	echo "$error";
		}
		else{			
			while ($data = pg_fetch_object($resultado)) {
				$id_paciente = $data->max;	//valor id_paciente del ultimo registro ingresado	 
			}
			for ($i=0; $i < count($nombres); $i++) { 
				$nombre_familiar = $nombres[$i];
				$parentesco = $parentescos[$i];
				$edad = $edades[$i];
				$informacion_adicional = $informaciones[$i];
				$consulta = "INSERT INTO familiar_paciente (id_paciente, nombre, edad, parentesco, info_adicional) VALUES ('$id_paciente', '$nombre_familiar', '$edad', '$parentesco', '$informacion_adicional')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}	 	
			header('Location: reg_s3.php');			
		}
	}
	else{
		echo "Favor de ingresar todos los datos";
	}
}
if (isset($_POST['reg_3'])){
	if (count($_POST['habito']) >= 1) {	
		$habitos = $_POST['habito'];		
		$actividades = $_POST['actividad'];
		$platillos = $_POST['platillo'];
		$bebidas = $_POST['bebida'];
		$generos = $_POST['genero'];
		$cantantes = $_POST['cantante'];
		$canciones = $_POST['cancion'];
		$programas = $_POST['programa'];
		$actores = $_POST['actor'];
		$tareas = $_POST['tarea'];
		$pasatiempos = $_POST['pasatiempo'];
		$deportes = $_POST['deporte'];
		$equipos = $_POST['equipo'];
		$habilidades = $_POST['habilidad'];
		$festividades = $_POST['festividad'];
		$lugares = $_POST['lugar'];
		$temas = $_POST['tema'];
		
		$consulta_id = "SELECT MAX(id_paciente) FROM paciente";
		$resultado = pg_query($conexion, $consulta_id);
		if ($resultado == false) {
		 	$error = pg_last_error();
		 	echo "$error";
		}
		else{
			while ($data = pg_fetch_object($resultado)) {
				$id_paciente = $data->max;	//valor id_paciente del ultimo registro ingresado	 
			}			
			foreach ($habitos as $value) {				
				$consulta = "INSERT INTO habito_diario (id_paciente, descripcion_habito) VALUES ('$id_paciente', '$value')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($actividades as $value) {
				$consulta = "INSERT INTO actividad_preferida (id_paciente, descripcion_actividad) VALUES ('$id_paciente', '$value')";	
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}	
			}
			
			foreach ($platillos as $platillo) {
				$consulta = "INSERT INTO platillo_favorito (id_paciente, nombre_platillo) VALUES ('$id_paciente', '$platillo')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				 }
			}

			foreach ($bebidas as $bebida) {
				$consulta = "INSERT INTO bebida_favorita (id_paciente, nombre_bebida) VALUES ('$id_paciente', '$bebida')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}

			foreach ($generos as $genero) {
				$consulta = "INSERT INTO genero_musical (id_paciente, nombre_genero) VALUES ('$id_paciente', '$genero')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}			
			
			foreach ($cantantes as $cantante) {
				$consulta = "INSERT INTO cantante_favorito (id_paciente, nombre_cantante) VALUES ('$id_paciente', '$cantante')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($canciones as $cancion) {
				$consulta = "INSERT INTO cancion_favorita (id_paciente, nombre_cancion) VALUES ('$id_paciente', '$cancion')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}	
			}

			foreach ($programas as $programa) {
				$consulta = "INSERT INTO programa_favorito (id_paciente, nombre_programa) VALUES ('$id_paciente', '$programa')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($actores as $actor) {
				$consulta = "INSERT INTO actor_favorito (id_paciente, nombre_actor) VALUES ('$id_paciente', '$actor')";
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($tareas as $tarea) {
				$consulta = "INSERT INTO tarea_hogar (id_paciente, descripcion_tarea) VALUES ('$id_paciente', '$tarea')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($pasatiempos as $pasatiempo) {
				$consulta = "INSERT INTO pasatiempo_favorito (id_paciente, descripcion_pasatiempo) VALUES ('$id_paciente', '$pasatiempo')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($deportes as $deporte) {
				$consulta = "INSERT INTO deporte_favorito (id_paciente, nombre_deporte) VALUES ('$id_paciente', '$deporte')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($equipos as $equipo) {
				$consulta = "INSERT INTO equipo_favorito (id_paciente, nombre_equipo) VALUES ('$id_paciente', '$equipo')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($habilidades as $habilidad) {
				$consulta = "INSERT INTO habilidad (id_paciente, descripcion_habilidad) VALUES ('$id_paciente', '$habilidad')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($festividades as $festividad) {
				$consulta = "INSERT INTO festividad_favorita (id_paciente, nombre_festividad) VALUES ('$id_paciente', '$festividad')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}
			}
			
			foreach ($lugares as $lugar) {
				$consulta = "INSERT INTO lugar_favorito (id_paciente, nombre_lugar) VALUES ('$id_paciente', '$lugar')";	  
				$res = pg_query($conexion,$consulta);
				if ($res == false) {	 		
				 	$error = pg_last_error();
				 	echo "$error";
				}  
			}
			
			echo "<h2>Datos guardados exitosamente</h2>";
		}
	}
	else{
		echo "Favor de ingresar todos los datos";
	}
}

 ?>