<?php

?>

<html lang="es">
	<head>
		<title>Socomtec</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<script type="text/javascript" src="../../JS/jquery-2.2.4.min.js"></script>
		<link rel="stylesheet" href="../../FONT-AWESOME/css/font-awesome.min.css" />
		<link type="text/css" rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" />	
		<script src="../bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript">

		$(document ).ready(function(){
			
			valor_acumulado_diseño=0;
			Cantidad_diseño = $(".checkbox_diseño").size();
			var porcentaje_diseño_unitario = Math.round(100/Cantidad_diseño);

			$(".checkbox_diseño").change(function() {

    			if(this.checked) {

    					valor_acumulado_diseño = valor_acumulado_diseño + porcentaje_diseño_unitario;
    					document.getElementById('barra_objetivo_1').style.width = valor_acumulado_diseño + "%";
        		
   				 	}else{

   				 		valor_acumulado_diseño = valor_acumulado_diseño - porcentaje_diseño_unitario;
   				 		document.getElementById('barra_objetivo_1').style.width = valor_acumulado_diseño + "%";
   				 	}
				});

			valor_acumulado_programacion = 0;
			Cantidad_programacion = $(".checkbox_programacion").size();
			var porcentaje_programacion_unitario = Math.round(100/Cantidad_programacion);

			$(".checkbox_programacion").change(function() {

    			if(this.checked) {

    					valor_acumulado_programacion = valor_acumulado_programacion + porcentaje_programacion_unitario;
    					document.getElementById('barra_objetivo_2').style.width = valor_acumulado_programacion + "%";
        		
   				 	}else{

   				 		valor_acumulado_programacion = valor_acumulado_programacion - porcentaje_programacion_unitario;
    					document.getElementById('barra_objetivo_2').style.width = valor_acumulado_programacion + "%";
   				 	}
				});

			

			valor_acumulado_bd = 0;
			Cantidad_bd = $(".checkbox_bd").size();
			var porcentaje_bd_unitario = Math.round(100/Cantidad_bd);

			

			$(".checkbox_bd").change(function() {
				
    			if(this.checked) {

    					valor_acumulado_bd = valor_acumulado_bd + porcentaje_bd_unitario;
    					if(valor_acumulado_bd == 99){

    						valor_acumulado_bd = 100;
    					}


    					document.getElementById('barra_objetivo_3').style.width = Math.round(valor_acumulado_bd) + "%";
        		
   				 	}else{

   				 		valor_acumulado_bd = valor_acumulado_bd - porcentaje_bd_unitario;
   				 		if(valor_acumulado_bd == 1){

    						valor_acumulado_bd = 0;

    					}
    					document.getElementById('barra_objetivo_3').style.width = valor_acumulado_bd + "%";
   				 	}
				});
						
						
			}); /* Cierre de document ready */

			cronometro = setInterval(//20
            function(){
            valor_total = (30*(valor_acumulado_diseño/100)) + (50*(valor_acumulado_programacion/100)) + (20*(valor_acumulado_bd/100));

                if(valor_total > 33){

                	$("#barra_general").removeClass("progress-bar-danger");
                	$("#barra_general").addClass("progress-bar-warning");

                }

                if(valor_total > 66){

                	$("#barra_general").removeClass("progress-bar-warning");
                	$("#barra_general").addClass("progress-bar-success");

                }
                document.getElementById('barra_general').style.width = valor_total + "%";
                     		    
                
            }
            ,100);  

			

			
		

			/*
			valor_1 = 0;
			valor_general_1 = 0; 
 	    	cronometro_1 = setInterval(//40
            function(){
                
                if(valor_1 == 100){
                	clearInterval(cronometro_1);
                }else{
                valor_1 = valor_1 + 10;
                valor_general_1 = (40*(valor_1/100));
                document.getElementById('barra_objetivo_1').style.width = valor_1 + "%";
                     		    
                }
            }
            ,5000); 

            valor_2 = 0;
			valor_general_2 = 0; 
 	    	cronometro_2 = setInterval(//20
            function(){
                if(valor_2 == 100){
                	clearInterval(cronometro_2);
                }else{
                valor_2 = valor_2 + 20;
                valor_general_2 = (20*(valor_2/100));
                document.getElementById('barra_objetivo_2').style.width = valor_2 + "%";
                }  		    
                
            }
            ,12000); 

            valor_3 = 0;
			valor_general_3 = 0; 
 	    	cronometro_3 = setInterval(//40
            function(){
                
                if(valor_3 == 100){
                	clearInterval(cronometro_3);
                }else{
                valor_3 = valor_3 + 2;
                valor_general_3 = (40*(valor_3/100));
                document.getElementById('barra_objetivo_3').style.width = valor_3 + "%";
                  }  		    
                
            }
            ,1000);

            cronometro = setInterval(//20
            function(){
            valor_total = valor_general_1 + valor_general_2 + valor_general_3;

                if(valor_total > 33){

                	$("#barra_general").removeClass("progress-bar-danger");
                	$("#barra_general").addClass("progress-bar-warning");

                }

                if(valor_total > 66){

                	$("#barra_general").removeClass("progress-bar-warning");
                	$("#barra_general").addClass("progress-bar-success");

                }
                document.getElementById('barra_general').style.width = valor_general_1 + valor_general_2 + valor_general_3 + "%";
                     		    
                
            }
            ,100);  
 	    	   	*/
    		

		</script>

	</head>
	<body>

		<div class="container">
			<br />
			<br />

			<h1> Progreso de Objetivos</h1>

			<hr />
			<br />

			<h3> Objetivo General </h3>

			<div class="row">
				<div class="col-sm-12 col-md-12 collg-12">
					<div class="progress">
  						<div id="barra_general" class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
    						
  						</div>
					</div>
				</div>
			</div>

			<br />
			

			<div class="row container">
				<div class="panel panel-info">

				<div class="panel-heading">
				<h3 class="text-center"> Objetivos Específicos </h3>
				</div>
				
				<div class="panel-body">
				<br />
				<div class="col-sm-12 col-md-4 col-lg-4 ">
					<div class="progress">
  						<div id="barra_objetivo_1" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
    						
  						</div>
					</div>

					<h4 class="text-center"> Diseño (30%)</h4>
					<hr />

					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_diseño"> Diseño de interfaz administrativa
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_diseño"> Diseño de interfaz cliente
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_diseño"> Creación de interfaz administrativa
    					</label>
  					</div>

  					<div class="checkbox" >
    					<label>
      						<input type="checkbox" class="checkbox_diseño"> Creación de interfaz cliente
    					</label>
  					</div>



				</div>
				
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="progress">
  						<div id="barra_objetivo_2" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
    						
  						</div>
					</div>

					<h4 class="text-center"> Programación (50%) </h4>
					<hr />

					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_programacion"> Diseño de interfaz administrativa
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_programacion"> Diseño de interfaz cliente
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_programacion"> Creación de conexión a Base de Datos
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_programacion"> Creación Modelo-Vista-Controlador
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_programacion"> Creación de modulos administrativos
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_programacion"> Creación de modulos cliente
    					</label>
  					</div>

				</div>
				
				<div class="col-sm-12 col-md-4 col-lg-4">
					<div class="progress">
  						<div id="barra_objetivo_3" class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
    						
  						</div>
					</div>

					<h4 class="text-center"> Base de Datos (20%)</h4>
					<hr />

					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_bd"> Modelación de base de datos
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_bd"> Creación de base datos
    					</label>
  					</div>

  					<div class="checkbox">
    					<label>
      						<input type="checkbox" class="checkbox_bd"> Creación diagrama
    					</label>
  					</div>

				</div>
			</div> <!-- cierre del Panel-body -->
			</div> <!-- Cierre del Panel -->
			</div> 
		</div>

	</body>
</html>