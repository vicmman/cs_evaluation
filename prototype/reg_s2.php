<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Formulario de registro</title>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <script type="text/javascript">
    $(document).ready(function(){
        var maxField = 10; //Input fields increment limitation
        var addButton = $('#addBtn1'); //Add button selector
        var wrapper = $('.field_wrapper'); //Input field wrapper
        var fieldHTML = '<div class="form-row"><div class="form-group col-md-5"><label for="nombre_familiar">Nombre del familiar:</label><input type="text" id="nombre_familiar" class="form-control" name="nombre_familiar[]"></div><div class="form-group col-md-5"><label for="parentesco_familiar">Parentesco:</label><input type="text" id="parentesco_familiar" class="form-control" name="parentesco_familiar[]"></div><div class="form-group col-md-2"><label for="edad">Edad:</label><input type="text" class="form-control" id="edad" name="edad[]"></div></div> <div class="form-row align-items-center"> <div class="form-group col-md-10"><label for="informacion_adicional">Información adicional</label><textarea rows="3" cols="30" class="form-control" id="informacion_adicional" name="informacion_adicional[]" placeholder="Describir información relacionada con el paciente como: cercanía con el paciente, experiencias vividas juntos, preferencias, habitos y actividades en común, etc."></textarea></div></div>';
        
        //New input field html 
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
                padding-top: 2.5rem;
            }
        /*input[type="text"]{height: 20px; vertical-align: text-bottom;}*/
        /*.field_wrapper div{margin-bottom: 10px;}*/
        .add_button{margin-top: 10px; margin-left: 10px; vertical-align: text-bottom;}
        .remove_button{margin-top: 10px; margin-left: 10px; vertical-align: text-bottom;}       
    </style>
    
</head>
<body>
    <div class="container">
        <div class="card bg-light">
            <h2 class="card-header text-opacity-75 text-center"> Registro de información del paciente</h2>    
            <h4 class="card-title text-primary mt-4 ml-4">2/3) Datos familiares</h4> 
            <p class="card-text ml-4"><strong>Instrucciones:</strong> Ingresa la información de todos los familiares que sean relevantes para el paciente. Cada vez que necesites agregar 
            uno nuevo presiona el botón "Agregar otro". Cuando hayas terminado de ingresarlos presiona el botón "Siguiente".</p>
            <form class="card-body" action="db_con.php" method="post">            
            <div class="field_wrapper">       
                
                <div class="form-row">                
                    <div class="form-group col-md-5">
                        <label for="nombre_familiar">Nombre del familiar:</label>
                        <input type="text" id="nombre_familiar" class="form-control" name="nombre_familiar[]">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="parentesco_familiar">Parentesco:</label>
                        <input type="text" id="parentesco_familiar" class="form-control" name="parentesco_familiar[]">
                    </div>
                    <div class="form-group col-md-2">
                        <label for="edad">Edad:</label>
                        <input type="text" class="form-control" id="edad" name="edad[]">
                    </div>
                </div>
                <div class="form-row align-items-center">            
                    <div class="form-group col-md-10">
                        <label for="informacion_adicional">Información adicional</label>
                        <textarea rows="3" cols="30" class="form-control" id="informacion_adicional" name="informacion_adicional[]" placeholder="Describir información relacionada con el paciente como: cercanía con el paciente, experiencias vividas juntos, preferencias, habitos y actividades en común, etc."></textarea>
                    </div>    
                    <div class="col-md-2">
                        <a href="javascript:void(0);" id="addBtn1" class="add_button" title="Agregar otro"><img src="img/btn_add.png"/>                    
                    </div>
                </div>                
            </div>    <!-- Fin div wrapper     -->
            <div class="card-footer text-right">
                <a href="./reg_s1.php" class="btn btn-primary">Regresar</a>
                <button type="submit" id="reg_2" class="btn btn-primary" name="reg_2">Siguiente</button>
            </div>            
            </form>	    
        </div>
	
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>