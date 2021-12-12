<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Document</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	
	<script type="text/javascript">
	$(document).ready(function(){
	    var maxField = 10; //Input fields increment limitation
	    var addButton = $('.add_button'); //Add button selector
	    var wrapper = $('.field_wrapper'); //Input field wrapper
	    var fieldHTML = '<div class="form-row"><div class="form-group col-md-6"><input type="text" class="form-control" name="field_name[]" value=""></div> <div class="form-group col-md-6"> <a href="javascript:void(0);" class="remove_button col-sm-10" title="Eliminar"><img src="img/remove_icon.png"></a></div></div>					';
	    // var fieldHTML = '<div><input type="text" class="form-control" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a></div>'; //New input field html 
	    var x = 1; //Initial field counter is 1
	    
	    //Once add button is clicked
	    $(addButton).click(function(){
	        //Check maximum number of input fields
	        if(x < maxField){ 
	            x++; //Increment field counter
	            $(wrapper).append(fieldHTML); //Add field html
	        }
	    });
	    
	    //Once remove button is clicked
	    $(wrapper).on('click', '.remove_button', function(e){
	        e.preventDefault();
	        $(this).parent('div').remove(); //Remove field html
	        x--; //Decrement field counter
	    });
	});
	</script>

	<style type="text/css">
		body {
				min-height: 75rem;
				padding-top: 4.5rem;
			}
		/*input[type="text"]{height: 20px; vertical-align: text-bottom;}*/
		.field_wrapper div{margin-bottom: 10px;}
		.add_button{margin-top: 10px; margin-left: 10px; vertical-align: text-bottom;}
		.remove_button{margin-top: 10px; margin-left: 10px; vertical-align: text-bottom;}		
	</style>
</head>

<body>
	<div class="container">
		<h1>Registrar los datos del paciente</h1>
		<form action="procesa_ejmplo.php" method="post">			
			<div class="form-group row">
				<label for="nombrePaciente" class="col-sm-2 col-form-label">Nombre del paciente:</label>
				<div class="col-sm-10">
					<input type="text" name="nombre_paciente" class="form-control" id="nombrePaciente">	
				</div>				
			</div>
			<div class="form-group row">
				<label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha de nacimiento</label>
				<div class="col-sm-10">
					<input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento">	
				</div>
				
			</div>
			<div class="field_wrapper form-group row">
				<label for="habilidad" class="col-sm-2 col-form-label">Habilidad:</label>
				<div class="col-sm-10">					
					<div class="form-row">
						<div class="form-group col-md-6">
							<input type="text" id="habilidad" class="form-control" name="field_name[]" value="">	
						</div>
						<div class="form-group col-md-6">
							<a href="javascript:void(0);" class="add_button col-sm-10" title="Agregrar otro"><img src="img/add_icon.png"></a>		
						</div>						
					</div>					
				</div>
			</div>
			<div class="form-group row">
				<label for="edad" class="col-sm-2 col-form-label">Edad</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="edad" name="edad">	
				</div>				
			</div>			
			<button type="submit" class="btn btn-primary" name="enviar">Enviar</button>			
		</form>
	</div>
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>