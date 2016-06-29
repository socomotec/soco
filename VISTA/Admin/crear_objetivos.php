<?php

?>

<html lang="es">

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

			$(function() {
    			$( "#fecha_inicio_obge" ).datepicker();
 			});
            
        </script>

	</head>

	<body>

		<div class="container">

			<div class="row container">

				<h2>Creación de Objetivos</h2>
				<hr />

				<form>

					<div class="form-group">
    					<label>Nombre objetivo general</label>
    					<input  class="form-control" id="nombre_obge" placeholder="Objetivo General">
  					</div>

  					<div class="form-group">
    					<label>Fecha Inicio</label>
    					<input class="form-control" id="fecha_inicio_obge" placeholder="Fecha inicio" type="text" />
  					</div>

  					


        
    
					
				</form>
				
			</div>
			
		</div>

	</body>

</html>