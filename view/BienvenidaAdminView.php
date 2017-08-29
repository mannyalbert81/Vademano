 <div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/headadmin.php"); ?>
 </div>
<div class="menu1">
     <?php include("view/modulos/menuadmin.php"); ?>
     </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Afiliaciones - Vademano 2015</title>
   
   		 
   		<link rel="stylesheet" href="view/css/bootstrap.css">
     <link rel="stylesheet" href="view/css/estilos.css">
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
 		
 		
 		<style type="text/css">

.menu-fixed {
	position:fixed;
	z-index:1000;
	top:0;
	left:0;
	right: 0;
	
}
.menu1-fixed {
	position:fixed;
	z-index:1000;
	top:120;
	left:0;
	right: 0;
	
}

	</style>
	
	
	<script>
			$(document).ready(function(){
			var altura = $('.menu').offset().top;
			
			$(window).on('scroll', function(){
				if ( $(window).scrollTop() > altura ){
					$('.menu').addClass('menu-fixed');
					$('.menu1').addClass('menu1-fixed');
					
				} else {
					$('.menu').removeClass('menu-fixed');
					$('.menu1').removeClass('menu1-fixed');
				}
			});
		});
	 </script>  
 		
    </head>
    <body class="cuerpo">
       
       <form id="form" method="post" class="col-lg-12" >
	   
	   <br> <br> <br> <br> 
	   <hr>
        <div class="row">
	    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 20px;">
	    <div class="form-group">
   		 <div class="alert alert-info" role="alert">
			
			<h3>Bienvenido !!! <small>ESTAS EN EL PANEL ADMINISTRATIVO DEL SISTEMA</small></h3>
			
       </div>	
    
        </div>
	    </div>
	    </div>

         <hr>
       </form>
       
       
      
		 
     </body>  
    </html>   