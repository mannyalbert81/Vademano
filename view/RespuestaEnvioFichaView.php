 <div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Enviar Ficha - Vademano 2015</title>
   
   		  <link rel="stylesheet" href="view/css/bootstrap.css">
     <link rel="stylesheet" href="view/css/estilos.css">
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
 		
 		<script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
		
		<script>
		    webshims.setOptions('forms-ext', {types: 'date'});
			webshims.polyfill('forms forms-ext');
		</script>
 		
 		
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
	
<script type="text/javascript">
	$(document).ready(function(){
		 
		$('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 300);
		});
	 
		$(window).scroll(function(){
			if( $(this).scrollTop() > 0 ){
				$('.ir-arriba').slideDown(300);
			} else {
				$('.ir-arriba').slideUp(300);
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
    </head>
    <body class="cuerpo">
    
      
       
  
    
       
      <form id="form" action="<?php echo $helper->url("Afiliaciones","ValidarAfiliado"); ?>" method="post" class="col-lg-12">
            
         <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px; "   >
            <h4>Información</h4>
            <hr/>
            
          <?php if (isset($resultado)) {?>
        	<?php if ($resultado == "true") {?>
        	
	        	<div class="alert alert-success" role="alert">
				  <div class="alert alert-success" role="alert">Tu envio se realizo <strong> correctamente </strong>, Enviamos a tu emil la ficha que seleccionaste.</div>
				</div>
			<?php }else {?>
				<div class="alert alert-success" role="alert">
				  <div class="alert alert-danger" role="alert">No pudimos enviar la ficha a su email, vuelva a intentarlo.</div>
				</div>
			<?php }} ?>
            
         </div>      
           
		</form>            
      
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
   <span class="ir-arriba">^</span>
     </body>  
    </html>   