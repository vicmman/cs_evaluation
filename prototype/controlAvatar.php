<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Formulario de registro</title>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> 
</head>
<body>
    <div class="container">
    	<form action="test2.php" method="post">
    		<h2>Control de interacción</h2>            
                <div class="form-group row">
                    <label for="sexo" class="col-sm-2 col-form-label">Manifestar emoción: </label>
                    <button type="submit" class="btn btn-primary" name="reg_1">Sonreir</button>         
                    <div class="col-1">
                        <button type="submit" class="btn btn-primary" name="reg_1">Neutral</button>         
                    </div>              
                    <div class="col">
                        <button type="submit" class="btn btn-primary" name="reg_1">Sorpresa</button>         
                    </div>              
                </div>
                <div class="form-row">
                    <br>
                    <label for="sexo" class="col-sm-2 col-form-label">Respuestas rápidas: </label>                  
                    <div class="col-6">
                        <button type="submit" class="btn btn-primary" name="reg_1">Hola</button>         
                        <button type="submit" class="btn btn-primary" name="reg_1">Adios</button>
                        <button type="submit" class="btn btn-primary" name="reg_1">Si</button>         
                        <button type="submit" class="btn btn-primary" name="reg_1">No</button>                     
                        <button type="submit" class="btn btn-primary" name="reg_1">No lo se</button>   
                    </div>              
                    <!-- <div class="col-7">
                        <button type="submit" class="btn btn-primary" name="reg_1">Tienes razón</button>
                        <button type="submit" class="btn btn-primary" name="reg_1">Muy bien</button>
                        <button type="submit" class="btn btn-primary" name="reg_1">No lo se</button>   
                        <button type="submit" class="btn btn-primary" name="reg_1">Lo siento mucho</button>
                    </div>               -->
                </div>
        
                <div class="form-row">                
                    <div class="form-group">
                        <br>
                        <label for="informacion_adicional">Seleccionar respuesta:</label>
                        <textarea rows="15" cols="30" class="form-control" id="informacion_adicional" name="informacion_adicional[]" placeholder="Selecciona alguna frase:"></textarea><br>
                        <button type="submit" class="btn btn-primary" name="reg_1">Responder</button>         
                    </div>                     

                </div>
           
                        <div class="form-group row">
                    <div class="col">
                        <label for="nombre_cuidador">Redactar respuesta:</label>
                        <input type="text" class="form-control" id="nombre_cuidador" name="nombre_cuidador">       
                    </div>
                    <div class="col">
                        
                    </div>
                
                </div>
                <button type="submit" class="btn btn-primary" name="reg_1">Responder</button>
        

                <!-- <input type="submit" name="reg_1" value="Siguiente"> -->
    	</form>
    </div>	
    <!-- Optional JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>