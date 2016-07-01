<?php

?>

<html lang="es-CL">

	<head>

		<title>Socomtec</title>
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		
		<link rel="stylesheet" href="../../FONT-AWESOME/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />	
		
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  		<script src="//code.jquery.com/jquery-1.10.2.js"></script>
  		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<script src="../bootstrap/js/bootstrap.js"></script>
		<script type="text/javascript">

			$(document).ready(function(){

				
    			
    			
				
				


    			$("#terminar").click(function(e){

    				if($("#input_nombre_obge").val().length == 0){

    					$('#modal-alerta').text("Debe de ingresar un nombre al objetivo general");	
    					$('#alerta').modal('show');

    				}else{

    					if($("#input_fecha_inicio_obge").val().length == 0){
    						
    						$('#modal-alerta').text("Debe ingresar una fecha de inicio");	
    						$('#alerta').modal('show');
    						
    					}else{

    						if($("#input_fecha_termino_obge").val().length == 0){
    							
    							$('#modal-alerta').text("Debe ingresar una fecha de termino");	
    							$('#alerta').modal('show');
    						
    						}else{

    							validacion = validacion_fecha($("#input_fecha_inicio_obge").val(), $("#input_fecha_termino_obge").val());

    							if(validacion==1){

    								alert($("#input_fecha_inicio_obge").val());

    							}else{

    								$('#modal-alerta').text("La fecha de inicio debe ser menor a la de termino");	
    								$('#alerta').modal('show');
    							}

    						}
    					}
    				}

    			});

			});
			
        
			function validacion_fecha(fechaInicial,fechaFinal){

            	valuesStart=fechaInicial.split("-");
            	valuesEnd=fechaFinal.split("-");
 
            	// Verificamos que la fecha no sea posterior a la actual
            	var dateStart=new Date(valuesStart[2],(valuesStart[1]-1),valuesStart[0]);
            	var dateEnd=new Date(valuesEnd[2],(valuesEnd[1]-1),valuesEnd[0]);

            	if(dateStart>dateEnd){

                	

    				return 0;
            	}

            	return 1;

        	}
 
   
            
        </script>

	</head>

	<body>

		<div class="container">

			<div class="row container">

				<h2>Creación de Objetivos</h2>

				<hr />
				
				<div class="panel panel-primary">

					<div class="panel-heading">

						<h4> Formulario de Ingreso: Objetivo General </h4>

					</div>

					<div class="panel-body">

						<form>

							<div class="form-group row">
								<div class="col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2">
    								<label>Nombre objetivo general</label>
    								<input  class="form-control" id="input_nombre_obge" name="nombre_obge" placeholder="Objetivo General" maxlength="30">
  								</div>
  							</div>
	
							<div class="form-group row">
								<div class="col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2">
    								<label>Fecha Inicio</label>
    								<input class="form-control fecha" id="input_fecha_inicio_obge" name="fecha_inicio_obge" placeholder="Fecha Inicio" type="date" />
    							</div>
  							</div>
	
	  						<div class="form-group row">
	  							<div class="col-sm-8 col-sm-offset-2 col-md-3 col-md-offset-2 col-lg-3 col-lg-offset-2">
    								<label>Fecha Termino</label>
    								<input class="form-control" id="input_fecha_termino_obge" name="fecha_termino_obge" placeholder="Fecha Termino" type="date" />
  								</div>
  							</div>

						</form> <!-- Cierre del Formulario -->

					</div> <!-- Cierre Panel-body -->

					<div class="panel-footer">

						<div class="text-right">

  							<Button class="btn btn-primary" id="terminar"> Siguiente </button>

  						</div>

					</div> <!-- Cierre Panel-footer -->

				</div> <!-- Cierre del panel -->

				<div class="modal fade" tabindex="-1" role="dialog" id="alerta">
  					<div class="modal-dialog">
    					<div class="modal-content">
      						<div class="modal-header">
        						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        						<h4 class="modal-title">Alerta!</h4>
      						</div>
      						<div class="modal-body">
        						<p id="modal-alerta"></p>
      						</div>
      						<div class="modal-footer">
        						<button type="button" class="btn btn-primary" data-dismiss="modal">Entiendo</button>
      						</div>
    					</div> <!-- Cierre de Modal-Content -->
  					</div><!-- Cierre de Modal Dialog -->
				</div><!-- Cierre del Modal -->


			</div> <!-- Cierre Row -->
			
		</div> <!-- Cierre Container Principal -->

	</body>

</html>