<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vademano</title>
  <link rel="shortcut icon" href="favicon.ico" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<?php include("view/css/modal/sincronizar.php");?>
     
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
   		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>   
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="view/css/estilosadmin.css">
		<link rel="stylesheet" href="http://jqueryvalidation.org/files/demo/site-demos.css">
        <script src="http://jqueryvalidation.org/files/dist/jquery.validate.min.js"></script>
        <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
 	 <script type="text/javascript" src="view/css/modal/VentanaCentrada.js"></script>
 <link rel="stylesheet" href="view/css/pace-theme-big-counter.css" />
		 <script src="view/js/pace.js"></script>
 
 	<style type="text/css">
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
	
</head>
<body>


<div class="container" >
  
  
 <div class="pull-left" >
 
    <a href="index.php?controller=Usuarios&action=cerrar_sesion"><img src="view/images/logo_vademano.png" class="img-responsive zoom" alt="Responsive image"></a>
 </div>
 
  <?php $status = session_status();  ?>
 	 <?php if  (isset( $_SESSION['nombres_usuario'] )){  ?> 
 	 
 	<button type="image"  class="pull-right" style="margin-top: 0px ; margin-left: 5px" data-toggle="modal" data-target="#myModal">
						<img type="image" src="view/images/qr-code.jpg" width="40" height="45"></img>
	</button>
	<?php  }?>  
 <div class="pull-right">
     
   
 
   <a href="https://play.google.com">
  	 <img class="img-responsive" src="view/images/logo-googleplay.png" alt="App Store" width="90" height="30"> 
 	</a>
 </div>  
 <div class="pull-right">
  	<a href="http://www.apple.com/itunes/download/">
  	 <img class="img-responsive" src="view/images/logo-appstore.png" alt="App Store" width="90" height="30"> 
 	</a>
 </div>  
 <div class="pull-right">
  	<a href="http://www.windowsphone.com/en-us/how-to/wp8/apps/get-apps-from-windows-phone-store">
  	<img class="img-responsive" src="view/images/logo-windowsstore.png" alt="App Store" width="90" height="30"> 
 	</a>
 </div>  
           
</div>


</body>
</html>


