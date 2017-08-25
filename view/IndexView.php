<!DOCTYPE HTML>
<html lang="es">
   	 <head>
        <meta charset="utf-8"/>
        <title>Vademano 2015</title>
       <link rel="stylesheet" href="view/css/bootstrap.css">
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
	</style>
	
	
	<script>
			$(document).ready(function(){
			var altura = $('.menu').offset().top;
			
			$(window).on('scroll', function(){
				if ( $(window).scrollTop() > altura ){
					$('.menu').addClass('menu-fixed');
				} else {
					$('.menu').removeClass('menu-fixed');
				}
			});
		});
	 </script>   
        <style>
            input{
                margin-top:5px;
                margin-bottom:5px;
            }
            .right{
                float:right;
            }
        </style>
        <style>
			body {
	    /* Ubicación de la imagen */
		 background-image: url(view/images/templatemo_bg_homepage.jpg);
		       }
			</style>
			
			
			
	
   	 </head>
   
   
    
     <body class="cuerpo" >
    	 <div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
		 <?php include("view/modulos/head.php"); ?>
		 </div>
    	 <div>
    	 	<?php include("view/modulos/slide.php"); ?>
   		 </div> 	
         <div> 
   		 <?php include("view/modulos/servicios.php"); ?>	
   		  </div>
   		  
   		 <div style="margin-top: 20px; background-color: #4bae4f;">
   		 <?php include("view/modulos/small_slide.php"); ?>
   		 </div>
   		 
   		 <div style="background-color: #7acb5a;">
   	 	 <footer class="col-lg-12">
     	 	<?php include("view/modulos/footer.php"); ?>
    	 </footer> 
		 </div>
        
    </body>
    
</html>