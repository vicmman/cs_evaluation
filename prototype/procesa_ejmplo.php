<?php 
	//header("Location: index.html");
	if (isset($_POST['enviar'])) {
		$nombre = $_POST['nombre_paciente'];
		$fecha = $_POST['fecha_nacimiento'];
		$edad = $_POST['edad'];
		$field_values_array = $_POST['field_name'];
		print'<pre>'; print_r($field_values_array); print'</pre>';
		print_r($nombre); print_r($fecha); print_r($edad);
	}

?>