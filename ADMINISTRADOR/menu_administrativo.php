<!DOCTYPE HTML>
<HTML>
	<HEAD>
		<title>SOCOMTEC</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link type="text/css" rel="stylesheet" href="../MATERIALIZE/css/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="../CSS/estilo_menu.css" />		
	</HEAD>

	<BODY>

    <div class="navbar-fixed">
      <nav class="navbar-color">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Logo</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="sass.html">Sass</a></li>
            <li><a href="badges.html">Components</a></li>
            <li><a href="collapsible.html">JavaScript</a></li>
          </ul>
        </div>
      </nav>
    </div>
    <div id="main">
      <div class="wrapper">
        <div class="row">
        <div class="col l3 hide-on-med-and-down" id="dashboard">     
          <aside id="left-sidebar-nav teal lighten-4" style="width:290px;" class="fixed" >
            <ul id="slide-out" class="side-nav fixed leftside-navigation ps-container ps-active-y" style="width: 240px;">
              <li class="user-details cyan darken-2">
                <div class="row"> 
                  <div class="col col s4 m4 l4" id="imagen_perfil">
                    <img src="../logo.png" class="circle responsive-img valign profile-image" />
                  </div>
                  <div class="col col s8 m8 l8" id="btn_perfil">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">
                      Sebastian
                      <i class="mdi-navigation-arrow-drop-down right"> </i>
                    </a>
                    <ul id="profile-dropdown" class="dropdown-content active">
                      
                      <li><a href="#"><i class="material-icons">&#xE853;</i> Perfil</a></li>
                      <li><a href="#"><i class="material-icons">&#xE853;</i> </a></li>

                    </ul>
                  </div>
                </div>
              </li>
            </ul>
          </aside>          
        </div>
        <div class="col l9">
          aqui va toda la informacion
        </div>  
      </div>
      </div>
    </div>
		
      

		<script type="text/javascript" src="../js/jquery-2.2.4.min.js"></script>
     	<script type="text/javascript" src="../MATERIALIZE/js/materialize.min.js"></script>

	</BODY>
</HTML>