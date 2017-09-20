 <div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
 </div>
<?php include("view/css/modal/sincronizar.php");?>

<!DOCTYPE HTML>
<html lang="es">
   	 <head>
        <meta charset="utf-8"/>
        <title>Vademano 2015</title>
       <link rel="stylesheet" href="view/css/bootstrap.css">
     <link rel="stylesheet" href="view/css/estilos.css">
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
       



 <script type="text/javascript" src="view/css/modal/VentanaCentrada.js"></script>
	     
   
    
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
   
   
     <body class="cuerpo" >
    	 	<?php include("view/modulos/slide.php"); ?>
      
   	<form action="<?php echo $helper->url("Preguntas","index"); ?>" method="post" class="col-lg-12">
   			<div class="row" style="margin-top: 30px; " >
			   <div class="col-xs-12 col-md-12 col-lg-12">
			  <div class="col-xs-1 col-md-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-10 col-md-10" style=" background-color: #f6f3f3; border-radius: 5px 5px 5px 5px;"> 
				  <div class="col-xs-6 col-md-6" style="margin-top: 20px; " >
				  	<div style="text-align:justify; ">
				    	<div class="media">
						  <div class="media-left">
						    <a href="#">
						      <img class="media-object" src="view/images/mano.png" alt="Vademano">
						    </a>
						  </div>
						  <div class="media-body">
						    <h4 class="media-heading">Bienvenido Disfruta de Vademano !!!</h4>
						    	<p>
							    </p>
						  </div>
						</div>
				    	
					</div>    
				  </div>
				  
				  <?php include("view/modulos/columnas_laterales.php"); ?>
				  </div>
				  
				  </div>
				  
			  
			  <div class="col-xs-1 col-md-1">
			  </div>
			</div>
   	</div>
   	
   	</form>
   	
   	
   		
   		
    
    	 <div class="col-lg-12">
     	 	 <?php include("view/modulos/beforefooter.php"); ?>
    	 </div>  
    	 
    	 <span class="ir-arriba">^</span>   
    </body>
</html>