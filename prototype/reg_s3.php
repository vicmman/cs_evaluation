<!DOCTYPE html>
<html lang="es-MX">
<head>
	<meta charset="UTF-8">
	<title>Formulario de registro</title> 
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">   
    
    <script type="text/javascript">
      $(document).ready(function(){
          var maxField = 20; //Input fields increment limitation
          var x = 1; //Initial field counter is 1
          var addButton = $('#addBtn1');
          var addButton2 = $('#addBtn2');
          var addButton3 = $('#addBtn3');
          var addButton4 = $('#addBtn4');
          var addButton5 = $('#addBtn5');
          var addButton6 = $('#addBtn6');
          var addButton7 = $('#addBtn7');
          var addButton8 = $('#addBtn8');
          var addButton9 = $('#addBtn9');
          var addButton10 = $('#addBtn10');
          var addButton11 = $('#addBtn11');
          var addButton12 = $('#addBtn12');
          var addButton13 = $('#addBtn13');
          var addButton14 = $('#addBtn14');
          var addButton15 = $('#addBtn15');
          var addButton16 = $('#addBtn16');
          var addButton17 = $('#addBtn17');

          var wrapper_c1 = $('#wrapper1');
          var wrapper_c2 = $('#wrapper2');
          var wrapper_c3 = $('#wrapper3');
          var wrapper_c4 = $('#wrapper4');
          var wrapper_c5 = $('#wrapper5');
          var wrapper_c6 = $('#wrapper6');
          var wrapper_c7 = $('#wrapper7');
          var wrapper_c8 = $('#wrapper8');
          var wrapper_c9 = $('#wrapper9');
          var wrapper_c10 = $('#wrapper10');
          var wrapper_c11 = $('#wrapper11');
          var wrapper_c12 = $('#wrapper12');
          var wrapper_c13 = $('#wrapper13');
          var wrapper_c14 = $('#wrapper14');
          var wrapper_c15 = $('#wrapper15');
          var wrapper_c16 = $('#wrapper16');
          var wrapper_c17 = $('#wrapper17');


          var habito_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="habito[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var actividad_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="actividad[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var comida_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="platillo[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var bebida_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="bebida[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var genero_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="genero[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var cantante_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="cantante[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var cancion_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="cancion[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var programa_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="programa[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var actor_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="actor[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var deporte_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="deporte[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var equipo_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="equipo[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var festividad_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="festividad[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var lugar_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="lugar[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var tarea_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="tarea[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var pasatiempo_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="pasatiempo[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var habilidad_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="habilidad[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';
          var tema_field = '<div class="row"><div class="col-10"><input type="text" class="form-control" name="tema[]" value=""/> </div><div class="col"><a href="javascript:void(0);" class="remove_button" title="Eliminar"><img src="img/remove_icon.png"/></a> </div></div>';


          $(addButton).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c1).append(habito_field); //Add field html
              }
          });
          //Once remove button is clicked
          $(wrapper_c1).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton2).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c2).append(actividad_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c2).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton3).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c3).append(comida_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c3).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton4).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c4).append(bebida_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c4).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton5).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c5).append(genero_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c5).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton6).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c6).append(cantante_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c6).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton7).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c7).append(cancion_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c7).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton8).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c8).append(programa_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c8).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton9).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c9).append(actor_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c9).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton10).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c10).append(deporte_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c10).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton11).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c11).append(equipo_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c11).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton12).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c12).append(festividad_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c12).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton13).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c13).append(lugar_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c13).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton14).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c14).append(tarea_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c14).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton15).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c15).append(pasatiempo_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c15).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton16).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c16).append(habilidad_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c16).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });

          $(addButton17).click(function(){
              //Check maximum number of input fields

              if(x < maxField){ 
                  x++; //Increment field counter
                  $(wrapper_c17).append(tema_field); //Add field html
              }
          });          
          //Once remove button is clicked
          $(wrapper_c17).on('click', '.remove_button', function(e){
              e.preventDefault();
              $(this).parent().parent().remove(); //Remueve el div row donde esta el input y el boton
              //$(this).parentsUntil('div').remove(); //Remove field html
              x--; //Decrement field counter
          });


      });
      </script>

      <style type="text/css">
            /* Para que el body no sea cubierto cuando se utiliza un NavBar*/
            /*body {          
                        min-height: 75rem;
                        padding-top: 4.5rem;
                  }*/           
            .field_wrapper div{margin-bottom: 10px;}
            .add_button{margin-top: 10px; margin-left: 10px; vertical-align: text-bottom;}
            .remove_button{margin-top: 10px; margin-left: 10px; vertical-align: text-bottom;}         
      </style>
</head>

<body>
<div class="container">
      <div class="card bg-light">      
            <h2 class="card-header text-opacity-75 text-center"> Registro de información del paciente</h2>    
            <h4 class="card-title text-primary mt-4 ml-4">3/3) Información sobre hábitos, gustos y preferencias del paciente</h4> 
            <p class="card-text ml-4 mr-4 text-justify"><strong>Instrucciones:</strong> Ingresa la información de la forma más certera posible,
             pueden quedar respuestas sin contestar pero entre más información proporciones la terapia será más personalizada. 
             Dentro de cada campo, agrega únicamente una respuesta, si necesitas agregar más respeustas presiona el boton con el signo de +. 
             Cuando hayas terminado de ingresarlos presiona el botón "Finalizar registro".</p>
            <form class="card-body" action="db_con.php" method="post">                  
                  <div class="form-group row">
                        <label for="habito[]" class="col-sm-4 col-form-label">Hábito que realice de forma cotidiana:</label>
                        <div class="col-sm-5">
                              <div id="wrapper1" class="field_wrapper">
                                    <div class="row">
                                          <div class="col-10"><input type="text" class="form-control" name="habito[]" value="" placeholder="Describir brevemente un hábito" /></div>
                                          <div class="col"><a href="javascript:void(0);" id="addBtn1" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>                 
                                    </div>
                              </div>                        
                        </div>                  
                  </div>
                  <div class="form-group row">
                        <label for="actividad[]" class="col-sm-4 col-form-label">Actividad que le gusta realizar:</label>
                        <div class="col-sm-5">
                              <div id="wrapper2" class="field_wrapper">
                                    <div class="row">
                                          <div class="col-10"><input type="text" class="form-control" name="actividad[]" placeholder="Escribir una actividad"></div>
                                          <div class="col"><a href="javascript:void(0);" id="addBtn2" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>                  
                                    </div>
                              </div>                          
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="platillo[]">Comida favorita:</label>
                        <div class="col-sm-5">
                              <div id="wrapper3" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="platillo_favorito" name="platillo[]" placeholder="Escriba el nombre de un platillo (p.e. Mole poblano)"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn3" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>                                  
                              </div>
                              </div>                          
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="bebida[]">Bebidas favoritas:</label>
                        <div class="col-sm-5">
                              <div id="wrapper4" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="bebida_favorita" name="bebida[]" placeholder="Escriba el nombre de la bebida (p.e. Agua de naranja)"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn4" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>                       
                              </div>
                              </div>                         
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="genero[]"> Género de música que le gusta:</label>
                        <div class="col-sm-5">
                              <div id="wrapper5" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="genero_favorito" name="genero[]" placeholder="Escriba el nombre de un género musical que le guste"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn5" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>                       
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="cantante[]">Cantante o grupo musical que le gusta:</label>
                        <div class="col-sm-5">
                              <div id="wrapper6" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="cantante_favorito" name="cantante[]" placeholder="Escriba el nombre de un cantante, grupo o banda musical"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn6" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>                       
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="cancion[]">Canción que le gusta:</label>
                        <div class="col-sm-5">
                              <div id="wrapper7" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="cancion_favorita" name="cancion[]" placeholder="Escriba el nombre de la canción"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn7" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>                
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="programa[]">Programa de Tv o pélicula que le gusta:</label>
                        <div class="col-sm-5">
                              <div id="wrapper8" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="programa_favorito" name="programa[]" placeholder="Escriba el nombre del programa o película"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn8" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="actor[]">Actor, actriz o personaje que le guste:</label>
                        <div class="col-sm-5">
                              <div id="wrapper9" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="actor_favorito" name="actor[]" placeholder="Escriba el nombre del actor, actriz o personaje"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn9" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="deporte[]">Deporte que le guste practicar o ver:</label>
                        <div class="col-sm-5">
                              <div id="wrapper10" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="deporte_favorito" name="deporte[]" placeholder="Escriba el nombre del deporte"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn10" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="equipo[]">Equipo deportivo que le guste:</label>
                        <div class="col-sm-5">
                              <div id="wrapper11" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="equipo_favorito" name="equipo[]" placeholder="Escriba el nombre del equipo"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn11" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="festividad[]">Festividad que le guste celebrar:</label>
                        <div class="col-sm-5">
                              <div id="wrapper12" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="festividad_favorita" name="festividad[]" placeholder="Escriba el nombre de la festividad"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn12" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="lugar[]">Lugar que haya visitado y le gustó:</label>
                        <div class="col-sm-5">
                              <div id="wrapper13" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="nombre_lugar" name="lugar[]" placeholder="Escriba el nombre del lugar (p.e: Acapulco)"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn13" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                         
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="tarea[]">Tarea del hogar que le gusta realizar:</label>
                        <div class="col-sm-5">
                              <div id="wrapper14" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="tarea_hogar" name="tarea[]" placeholder="Describa la tarea (p.e. Regar el jardín)"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn14" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="pasatiempo[]">Pasatiempo que disfruta:</label>
                        <div class="col-sm-5">
                              <div id="wrapper15" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="pasatiempo_favorito" name="pasatiempo[]" placeholder="Describa el pasatiempo (p.e. Escuchar música)"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn15" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="habilidad[]">Habilidad que tenga</label>
                        <div class="col-sm-5">
                              <div id="wrapper16" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="descripcion_habilidad" name="habilidad[]" placeholder="Describa brevemente la actividad (p.e. Tejer, cocinar, etc.)"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn16" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="form-group row">
                        <label class="col-sm-4 col-form-label" for="tema[]">Temas sobre los que le gusta platicar:</label>
                        <div class="col-sm-5">
                              <div id="wrapper17" class="field_wrapper">
                              <div class="row">
                                    <div class="col-10"><input type="text" class="form-control" id="tema_conversacion" name="tema[]" placeholder="Describa brevemente el tema (p.e. Familia, deporte, etc.)"></div>
                                    <div class="col"><a href="javascript:void(0);" id="addBtn17" class="add_button" title="Agregar otro"><img src="img/add_icon.png"/></a></div>
                              </div>
                              </div>                        
                        </div>
                  </div>
                  <div class="card-footer text-right">
                        <a href="./reg_s2.php" class="btn btn-primary">Regresar</a>
                        <button type="submit" name="reg_3" class="btn btn-primary">Finalizar registro</button>            
                  </div>		
                  
            </form>
      </div>
</div>      
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>