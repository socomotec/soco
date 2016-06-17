<!DOCTYPE HTML>
<html>
<head>
	<title>SOCOMTEC</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>	
  	<link type="text/css" rel="stylesheet" href="MATERIALIZE/css/materialize.min.css"  media="screen,projection"/>
  	<link type="text/css" rel="stylesheet" href="CSS/estilo_menu.css"/>

  	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <!--<script type="text/javascript" src="JS/jquery-2.2.4.min.js"></script> -->
	<script src="MATERIALIZE/js/materialize.min.js"></script>
	
	<!--Import iconos google-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import iconos google-->

	<script>
		$(document ).ready(function(){
			$('.slider').slider();
			$('.parallax').parallax();
			$(".button-collapse").sideNav();
			$('.scrollspy').scrollSpy();
			/*var options = [
			    {selector: '#Nosotros', offset: 50, callback: function() { Materialize.toast("This is our ScrollFire Demo!", 1500 ); } }, 
			    {selector: '.nosotros', offset: 400, callback: function() { Materialize.showStaggeredList(".nosotros"); } } //{selector: '#image-test', offset: 500, callback: function() { Materialize.fadeInImage("#image-test"); } }
			]; Materialize.scrollFire(options);*/


			});
	</script>

</head>

<body>

	<!-- Barra de navegacion-->
	<div class="navbar-fixed ">	 
	    <nav>
		    <div class="nav-wrapper blue darken-2">
		      	<a href="#!" class="brand-logo">Socomtec</a>
			    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
			    <ul class="right hide-on-med-and-down table-of-contents">
			    	<li><a href="#Inicio">Inicio</a></li>
			        <li><a href="#Caracteristicas">Caracteristicas</a></li>
			        <li><a href="#Servicio">Servicios</a></li>
			        <li><a href="#Nosotros">Nosotros</a></li>
			        <li><a href="#Equipo">Equipo</a></li>
			        <li><a href="#Contaco">Contacto</a></li>
			     </ul>
			     <!-- Barra de navegacion para movil-->
			     <ul class="side-nav table-of-contents" id="mobile-demo">
			        <li><a href="#Inicio">Inicio</a></li>
			        <li><a href="#Caracteristicas">Caracteristicas</a></li>
			        <li><a href="#Servicio">Servicios</a></li>
			        <li><a href="#Nosotros">Nosotros</a></li>
			        <li><a href="#Equipo">Equipo</a></li>
			        <li><a href="#Contaco">Contacto</a></li>
			     </ul>
		    </div>
	  	</nav>
    </div>
	<!-- Termina Barra de navegacion-->
	<!-- inicio slider-->
	<div class="fluid-container" id="Inicio">
		<div class="slider ">
		    <ul class="slides">
		      <li>
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
    
    <div class="section scrollspy" id="Caracteristicas">
	    <div class="row container ">
	    	<h2 class="header"></h2>
	      	<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
	    </div>
	</div>
	<div class="parallax-container">
	    <div class="parallax"><img src="IMG/paralax1.png"></div>
	</div>

	<div class="section white scrollspy" id="Servicio">
	    <div class="row container">
	    	<h2 class="header">Servicios</h2>
	      	<p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
	    </div>
	</div>
	<div class="parallax-container">
		<div class="parallax"><img src="IMG/paralax2.jpg"></div>
  	</div>

  	<div class="section white scrollspy" id="Nosotros">
	    <div class="row container nosotros">
	    	<h2 class="header nosotros-con">Nosotros</h2>
	      	<p class="grey-text text-darken-3 lighten-3 nosotros-con">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
	    </div>
	</div>
	<div class="parallax-container">
		<div class="parallax"><img src="IMG/paralax2.jpg"></div>
  	</div>

  	<div class="section white scrollspy" id="Equipo">
  		<div class="container ">
  			<h1 class="center ">Nuestro Equipo</h1>
  		</div>
	    <div class="row container">
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
  	<div class="section white scrollspy" id="Contaco">
	    <div class="row container">
	    	<h2 class="header">Contacto</h2>
	      	
	      	<div class="row">
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
	</div>
  	<!-- Termina paralax-->



	<!-- footer -->
	<footer class="page-footer grey darken-3">
       	<div class="footer-copyright">
            <div class="container">
            	© 2016 SOCOMTEC .Ltda, Diseñada por SOCOMTEC
            	<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        	</div>
   	  	</div>
    </footer>



</body>
</html>