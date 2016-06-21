<!DOCTYPE HTML>
<html>
<head>
	<title>SOCOMTEC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	
  	<link type="text/css" rel="stylesheet" href="MATERIALIZE/css/materialize.min.css"  media="screen,projection"/>
  	
	<link href='https://fonts.googleapis.com/css?family=Bad+Script' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="JS/jquery-2.2.4.min.js"></script>
	<script src="MATERIALIZE/js/materialize.min.js"></script>
	
	<!--Import iconos google-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" href="FONT-AWESOME/css/font-awesome.min.css">
	<!--Import iconos google-->

	<script>
		$(document ).ready(function(){
			$('.slider').slider();
			$('.parallax').parallax();
			$(".button-collapse").sideNav();
			$('.scrollspy').scrollSpy();
			$('ul.tabs').tabs();
			
			 if($(window).width() >= 500){
	 	
			 	if($(window).height() > 900){

			 		var Porte_largo = $( window ).height();
					$('.porte_seccion').height(Porte_largo - 40);

			 	} 	

			 }

			 $(".responsive_seccion").click(function(){


				if($(window).width() >= 500){

			 		if($(window).height() > 900){

			 			var Porte_largo = $( window ).height();
						$('.porte_seccion').height(Porte_largo - 40);

			 		} 	

			 	}

			}); //cierre del click function .responsive_seccion

			
		}); //cierre del document ready

		function animacion(id){

				if(id == 2){

				$("#titulo_caracteristicas").addClass("animated rollIn");
        			contador_s_1 =0;
 	    			cronometro_1 = setInterval(
            		function(){
                if(contador_s_1==1)
                {
                $("#titulo_caracteristicas").removeClass("animated rollIn");     		
                clearInterval(cronometro_1);
                }
                contador_s_1++;
            		}
            	,1000);       	
    		
				} // aqui termina el primer if

				if(id == 3){

				$("#titulo_servicios").addClass("animated rollIn");
        			contador_s_2 =0;
 	    			cronometro_2 = setInterval(
            		function(){
                if(contador_s_2==1)
                {
                $("#titulo_servicios").removeClass("animated rollIn");     		
                clearInterval(cronometro_2);
                }
                contador_s_2++;
            	}
            	,1000);

				} // aqui termina el segundo if

				if(id == 4){

				$("#titulo_nosotros").addClass("animated rollIn");
        			contador_s_3 =0;
 	    			cronometro_3 = setInterval(
            		function(){
                if(contador_s_3==1)
                {
                $("#titulo_nosotros").removeClass("animated rollIn");     		
                clearInterval(cronometro_3);
                }
                contador_s_3++;
            	}
            	,1000);

				} // aqui termina el segundo if

				if(id == 5){

				$("#titulo_equipo").addClass("animated rollIn");
        			contador_s_4 =0;
 	    			cronometro_4 = setInterval(
            		function(){
                if(contador_s_4==1)
                {
                $("#titulo_equipo").removeClass("animated rollIn");     		
                clearInterval(cronometro_4);
                }
                contador_s_4++;
            	}
            	,1000);

				} // aqui termina el segundo if

				if(id == 6){

				$("#titulo_contacto").addClass("animated rollIn");
        			contador_s_5 =0;
 	    			cronometro_5 = setInterval(
            		function(){
                if(contador_s_5==1)
                {
                $("#titulo_contacto").removeClass("animated rollIn");     		
                clearInterval(cronometro_5);
                }
                contador_s_5++;
            	}
            	,1000);

				} // aqui termina el segundo if
			}
	</script>
<link type="text/css" rel="stylesheet" href="CSS/estilo_menu.css"/>
<link type="text/css" rel="stylesheet" href="CSS/animate.css"/>
</head>

<body>

	<!-- Barra de navegacion-->
	<div class="navbar-fixed " id="barra_navegacion_1">	 
	    <nav>
		    <div class="nav-wrapper blue darken-2">
		      	<a href="#!" id="logo" class="brand-logo">Socomtec</a>
			    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			    <ul class="right hide-on-med-and-down table-of-contents" id="barra_navegacion">
			    	<li><a href="#Inicio" class="responsive_seccion" onClick="animacion(this.id)" id="1">Inicio</a></li>
			        <li><a href="#Caracteristicas" class="responsive_seccion" onClick="animacion(this.id)" id="2">Caracteristicas</a></li>
			        <li><a href="#Servicio" class="responsive_seccion" onClick="animacion(this.id)" id="3">Servicios</a></li>
			        <li><a href="#Nosotros" class="responsive_seccion" onClick="animacion(this.id)"id="4">Nosotros</a></li>
			        <li><a href="#Equipo" class="responsive_seccion" onClick="animacion(this.id)" id="5">Equipo</a></li>
			        <li><a href="#Contacto" class="responsive_seccion" onClick="animacion(this.id)" id="6">Contacto</a></li>
			     </ul>
			     <!-- Barra de navegacion para movil-->
			     <ul class="side-nav table-of-contents" id="mobile-demo">
			        <li><a href="#Inicio">Inicio</a></li>
			        <li><a href="#Caracteristicas">Caracteristicas</a></li>
			        <li><a href="#Servicio">Servicios</a></li>
			        <li><a href="#Nosotros">Nosotros</a></li>
			        <li><a href="#Equipo">Equipo</a></li>
			        <li><a href="#Contacto">Contacto</a></li>
			     </ul>
		    </div>
	  	</nav>
    </div>
	<!-- Termina Barra de navegacion-->
	<!-- inicio slider-->
	<div class="fluid-container scrollspy" id="Inicio">
		<div class="slider" >
		    <ul class="slides" >
		      <li >
		        <img src="IMG/1.png"> <!-- random image -->
		        <div class="caption center-align">
		          <h3>This is our big Tagline!</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="IMG/2.png"> <!-- random image -->
		        <div class="caption left-align">
		          <h3>Left Aligned Caption</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="IMG/3.jpg"> <!-- random image -->
		        <div class="caption right-align">
		          <h3>Right Aligned Caption</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="IMG/4.png"> <!-- random image -->
		        <div class="caption center-align">
		          <h3>This is our big Tagline!</h3>
		          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
		        </div>
		      </li>
		    </ul>
	  	</div>
  	</div>
  	<!-- Termina slider-->

	<!-- inicio paralax -->
    
    
	    <div class="row container porte_seccion">
	    	<br />
	    	<br />
	    	<h2 class="titulo center-align" id="titulo_caracteristicas">Caracteristicas</h2>
	    	<hr class="section scrollspy" id="Caracteristicas" />
	      	<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
	    </div>
	
	    <div class="row container porte_seccion">
	    	<br />
	    	<br />
	    	<h2 class="center-align titulo" id="titulo_servicios">Servicios</h2>
	    	<hr class="section scrollspy" id="Servicio" />
	      	<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
	    </div>
	
	<div class="parallax-container">
		<div class="parallax"><img src="IMG/paralax1.png"></div>
  	</div>

  	
	    <div class="row container porte_seccion" >
	    	<br />
	    	<BR />
	    	<br />
	    	
	    	<h2 class="center-align titulo" id="titulo_nosotros">Nosotros</h2>
	    	<hr class="section scrollspy" id="Nosotros" />
	    	<div class="col s12 m12 l12 " >
	    		<h3 class="titulo center-align"> ¿Quiénes Somos? </h3>
	    		<p class="flow-text " align="justify">

	    			SOCOMTEC es una empresa que nace con la necesidad de cubrir las falencias informaticas y/o tecnologicas
	    			que poseen las empresas a nivel local, a traves de un servicio integro, cubriendo amplias expectativas.

	    		</p>
	    	</div>
	    	<div class="col s12 m6 l6">
	    		
	    		<h3 class="titulo center-align"> Misión <i class="fa fa-flag" aria-hidden="true"></i> </h3>
	      	<p class="flow-text " align="justify">
	      		Ser una de las empresas consultoras líderes del mercado local, estando siempre a la 
	      		vanguardia de las nuevas tecnologías, entregando un servicio de calidad en cada una
	      		de las propuestas innovadoras que ofrecemos al exigente mercado al cual abarcamos.
	      	</p>
	        </div>
	      	<div class="col s12 m6 l6" >
	    		<h3 class="titulo center-align"> Visión <i class="fa fa-eye" aria-hidden="true"></i> </h3>
	    		<p class="flow-text" align="justify"> 
	    		Llegar a ser una de las empresas mas reconocidas en el país, abarcando a empresas de alto 
	    		nivel, compitiendo con las mejores empresas consultoras a nivel nacional.
	    	</p>
	   		 </div>
	    </div>
	
	<div class="parallax-container">
		<div class="parallax"><img src="IMG/paralax2.jpg"></div>
  	</div>

  	<div >
  		
	    <div class="row container porte_seccion">
			<br />
			<br />

  			<h2 class="center-align titulo" id="titulo_equipo">Nuestro Equipo</h2>
  			<hr class="section scrollspy " id="Equipo" />
	    	<div class="col s12 m4">
	    	  <div class="card">
			    <div class="card-image waves-effect waves-block waves-light">
			      <img class="activator " src="IMG/misa.jpg">
			    </div>
			    <div class="card-content">
			      <span class="card-title activator grey-text text-darken-4">Misael Arroyo Ortiz<i class="material-icons right">more_vert</i></span>
			      <p><a href="#">Ver Mas</a></p>
			    </div>
			    <div class="card-reveal">
			      <span class="card-title grey-text text-darken-4">Misael Arroyo Ortiz<i class="material-icons right">close</i></span>
			      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
			    </div>
			  </div>
			</div>
			<div class="col s12 m4">
	    	  <div class="card">
			    <div class="card-image waves-effect waves-block waves-light">
			      <img class="activator" src="IMG/edu.jpg">
			    </div>
			    <div class="card-content">
			      <span class="card-title activator grey-text text-darken-4">Luis Gutierrez Valdes<i class="material-icons right">more_vert</i></span>
			      <p><a href="#">Ver Mas</a></p>
			    </div>
			    <div class="card-reveal">
			      <span class="card-title grey-text text-darken-4">Luis Gutierrez Valdes<i class="material-icons right">close</i></span>
			      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
			    </div>
			  </div>
			</div>
			<div class="col s12 m4">
	    	  <div class="card">
			    <div class="card-image waves-effect waves-block waves-light">
			      <img class="activator" src="IMG/seba.jpg">
			    </div>
			    <div class="card-content">
			      <span class="card-title activator grey-text text-darken-4">Sebastian Salas Gonzalez<i class="material-icons right">more_vert</i></span>
			      <p><a href="#">Ver Mas</a></p>
			    </div>
			    <div class="card-reveal">
			      <span class="card-title grey-text text-darken-4">Sebastian Salas Gonzalez<i class="material-icons right">close</i></span>
			      <p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
			    </div>
			  </div>
			</div>
	    </div>
	</div>
	<div class="parallax-container">
		<div class="parallax"><img src="IMG/paralax3.jpg"></div>
  	</div>


  	
	    <div class="row container porte_seccion">

	    	<br />
	    	<BR />
	    	<br />
	    	<h2 class="titulo center-align" id="titulo_contacto">Contacto</h2>
	    	<hr class="section scrollspy" id="Contacto" />
	      	
	      	<div class="row ">
		      	<div class="col s12 m6">
		      		<p>Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.</p>
		      	</div>
			    <form class="col s12 m6">
			      <div class="row">
			        <div class="input-field col s12">
			          	<i class="material-icons prefix">account_circle</i>
			          	<input id="icon_prefix" type="text" class="validate">
			          	<label for="icon_prefix">Nombre</label>
			        </div>
			        <div class="input-field col s12">
			          	<i class="material-icons prefix">phone</i>
			         	<input id="icon_telephone" type="tel" class="validate">
			          	<label for="icon_telephone">Celular</label>
			        </div>
			        <div class="input-field col s12">
			        	<i class="material-icons prefix">email</i>
			          	<input id="email" type="email" class="validate">
			          	<label for="email" data-error="wrong" data-success="right">Email</label>
			        </div>
			        <div class="input-field col s12">
			        	<i class="material-icons prefix">label_outline</i>
			          	<input id="email" type="email" class="validate">
			          	<label for="email" data-error="wrong" data-success="right">Asunto</label>
			        </div>
			        <div class="input-field col s12">
			          	<i class="material-icons prefix">comment</i>
			          	<textarea id="icon_prefix2" class="materialize-textarea"></textarea>
			          	<label for="icon_prefix2">Comentario</label>
			        </div>
			      </div>
			      <div class="center">
			      	<a class="waves-effect blue darken-1 btn">Enviar</a>
			      </div>
			    </form>
			  </div>

	    </div>
	
  	<!-- Termina paralax-->



	<!-- footer -->
	<footer class="page-footer grey darken-3">
       	<div class="footer-copyright">
            <div class="container">
            	© 2016 Soluciones Computacionales y Tecnologicas Ltda, Diseñada por SOCOMTEC
            	<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        	</div>
   	  	</div>
    </footer>



</body>
</html>