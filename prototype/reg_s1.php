<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Formulario de registro</title>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body>
    <div class="container mt-3">
        <div class="card bg-light">
        <h2 class="card-header text-opacity-75 text-center"> Registro de información del paciente</h2>    
        <h4 class="card-title text-primary m-4">1/3) Datos personales</h4>        
    	<form class="card-body" action="db_con.php" method="post">    		
                <div class="form-group row">
                    <label for="nombrePaciente" class="col-md-2 col-form-label">Nombre completo:</label>
                    <div class="col-md-10">
                        <input type="text" name="nombre_paciente" class="form-control" id="nombrePaciente"> 
                    </div>              
                </div>
                <div class="form-row">
                    <div class="form-group col-md-8">
                        <div class="form-group row">
                            <label for="nombre_preferido" class="col-md-4 col-form-label">Como le gusta que le digan:</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="nombre_preferido" name="nombre_preferido"> 
                        </div>              
                        </div>    
                    </div>
                    <div class="form-group col-md-4">
                        <div class="form-group row">
                            <label for="sexo" class="col-md-3 col-form-label">Sexo:</label>
                        <div class="col-md-9">
                            <select class="form-control" id="sexo" name="sexo">
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            </select>                    
                        </div>              
                        </div>    
                    </div>                
                </div>
                
                <div class="form-row">                
                    <div class="form-group col-md-4">
                        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                        <input type="date" id="fecha_nacimiento" class="form-control" name="fecha_nacimiento">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lugar_nacimiento">Lugar de nacimiento:</label>
                        <input type="text" id="lugar_nacimiento" class="form-control" name="lugar_nacimiento">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="lugar_residencia">Lugar de residencia actual:</label>
                        <input type="text" class="form-control" id="lugar_residencia" name="lugar_residencia">
                    </div>
                </div>
                <div class="form-row">                
                    <div class="form-group col-md-4">
                        <label for="nivel_estudios">Nivel de estudios:</label>
                        <input type="text" class="form-control" id="nivel_estudios" name="nivel_estudios">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="ocupacion">Ocupación:</label>
                        <input type="text" class="form-control" id="ocupacion" name="ocupacion">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="religion">Religión:</label>
                        <input type="text" class="form-control" id="religion" name="religion">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="nombre_cuidador">Nombre del cuidador principal:</label>
                        <input type="text" class="form-control" id="nombre_cuidador" name="nombre_cuidador">
                    </div>
                    <div class="form-group col-md-5">
                        <label>Parentesco del cuidador:</label>
                        <input type="text" class="form-control" id="parentesco_cuidador" name="parentesco_cuidador">
                    </div>                
                </div>
                <div class="card-footer text-right">
                    <a href="./index.html" class="btn btn-primary">Regresar</a>
                    <button type="submit" class="btn btn-primary" name="reg_1">Siguiente</button>         
                </div>                        
    	</form>
        </div>
    </div>	
    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>