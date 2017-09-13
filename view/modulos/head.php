<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vademano</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="stylesheet" href="view/css/estilos.css">
  <link rel="stylesheet" href="view/css/bootstrap.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
              

     
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="view/css/estilos.css">
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
	
		
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<script type="text/javascript" src="https://raw.github.com/HPNeo/gmaps/master/gmaps.js"></script>
		
		
		<style type="text/css">
		
		.menu{
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#42992a+0,42992a+100 */
background: rgb(66,153,42); /* Old browsers */
background: -moz-linear-gradient(top,  rgba(66,153,42,1) 0%, rgba(66,153,42,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(66,153,42,1) 0%,rgba(66,153,42,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(66,153,42,1) 0%,rgba(66,153,42,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#42992a', endColorstr='#42992a',GradientType=0 ); /* IE6-9 */
	
		}
	.zoom{
		transition: 1.5s ease;
 		-moz-transition: 1.5s ease; /* Firefox */
 		-webkit-transition: 1.5s ease; /* Chrome - Safari */
 		-o-transition: 1.5s ease; /* Opera */
	}
	.zoom:hover{
		transform : scale(1.2);
		-moz-transform : scale(1.2); /* Firefox */
		-webkit-transform : scale(1.2); /* Chrome - Safari */
		-o-transform : scale(1.2); /* Opera */
		-ms-transform : scale(1.2); /* IE9 */
	}
</style>
			
	 <script>
		 $(document).ready(function() {
				

			$('#myCarousel').carousel({
				interval: 10000
			
			})
		    
		    $('#myCarousel').on('slid.bs.carousel', function() {
		    	alert("slid");
			});
		    
		    
		});
   </script>
	
	
</head>
<body>





<div class="container" >
 	<div class="pull-left" >
    	  
		<a href="index.php?controller=Usuarios&action=cerrar_sesion"><img src="view/images/logo_vademano.png" class="img-responsive zoom" alt="Vademano"></a>
 	</div>
 	<div class="pull-right" >

   		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only"    >Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="nav navbar-brand" href="#"></a>
		    </div>
			
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse menu" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li  ><a href="index.php?controller=Usuarios&action=cerrar_sesion"><span class="glyphicon glyphicon-home" style="color: #ffffff;;"><?php echo " Inicio" ;?></span> <span class="sr-only">(current)</span></a></li>
		        <li  ><a href="index.php?controller=Buscador&action=index"><span class="glyphicon glyphicon-folder-open" style="color: #ffffff;;"><?php echo " Vademécum" ;?></span> <span class="sr-only">(current)</span></a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-briefcase" style="color: #ffffff;;"><?php echo " Nosotros" ;?></span> <span class="caret"></span></a>
		          <ul class="dropdown-menu" style="color: #ffffff;" >
		        	<li ><a href="index.php?controller=Mensajes&action=index" style="color: #000000;">Quienes Somos</a>
				    </li>
					
				  </ul>
		        </li>
		        <li  ><a href="index.php?controller=Afiliaciones&action=index"><span class="glyphicon glyphicon-folder-open" style="color: #ffffff;;"><?php echo " Afiliarse" ;?></span> <span class="sr-only">(current)</span></a></li>  
		       	
		        <?php $status = session_status();  ?>
		        <?php if  (isset( $_SESSION['nombres_usuario'] )){  ?> 
			 		<li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user" ><?php echo " " . $_SESSION['nombres_usuario'] ;?></span> <span class="caret"></span></a>
			          <ul class="dropdown-menu">
			        	<li><a href="<?php echo $helper->url("FichasFavoritos","index"); ?>"><span class="glyphicon glyphicon-star-empty" ><?php echo " Productos Favoritos" ;?></span> </a>
					  	</li>
					  
					  	
					  	<li><a href="<?php echo $helper->url("Afiliaciones","VistaActualizarDatos"); ?>"><span class="glyphicon glyphicon-list-alt" style="color: #ffffff;;"><?php echo " Actualizar Datos" ;?></span> </a>
					  	</li>
					  	<li><a href="<?php echo $helper->url("Usuarios","cerrar_sesion"); ?>"><span class="glyphicon glyphicon-lock" style="color: #ffffff;;"><?php echo " Cerrar Sesion" ;?></span> </a>
					  	</li>
					  	
					  	
					  </ul>
			        </li>
			 	  
			 		
				 
			 	 <?php } else { ?>	
			 	
			 		   	<li><a href="<?php echo $helper->url("Usuarios","Loguear"); ?>"><span class="glyphicon glyphicon-lock" style="color: #ffffff;;"><?php echo " Login" ;?></span> </a>
					  	</li>
				 
			 	 	
			 	 <?php  }?>
			 		
		   
		      </ul>
		 
		 	
		 	     
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
 	</div>  
           
</div>


</body>
</html>
