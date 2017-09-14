 <div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
 </div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Afiliaciones - Vademano 2015</title>
   
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

 h4 {
	    font-size: 25px;
	    font-style: verdana;
	    color:#696969;
	    text-decoration:none;
	    text-shadow: -0px -0px 0px #101010, 0px 1px 0px #505050;
	  }
	</style>
	
	
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
            
          
           <?php 
           		$id_usuario ="";
           		$nombres_usuario ="";
           		$apellidos_usuario = "";
           		
           ?>
           <?php if (!empty($resultSet)) {?>
           
           <?php $registros = count($resultSet);  ?>
           
            <?php foreach($resultSet as $res) { 
            	
        		
        		$id_usuario = $res->id_usuario;
        		$nombres_usuario = $res->nombres_usuario;
        		$apellidos_usuario = $res->apellidos_usuario;
        		
            }?>
            
           <div class="col-lg-12 col-md-12 division" style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px">
           
            <hr/>
          
            <input type="hidden" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario;     ?>" class="form-control"/>
	        	
	        	<div class="alert alert-warning" role="alert">
		<div class="alert alert-warning" role="alert" style="text-align: center;">Hola  <strong> <?php echo $nombres_usuario ." " . $apellidos_usuario; ?> </strong>, Presiona el boton Validar para terminar con el proceso de validación.</div>
		    <div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 20px;">
		    <div class="form-group">
                                   <input type="submit" id="btn_validar" name="btn_validar" value="Validar" class="btn btn-success"/>	
			
            </div>
		    </div>
		    </div>
				  
				 
				</div>
            
             </div>
            
            
	        	
			
        		
			
			
			<?php }else {?>
				<div class="alert alert-success" role="alert">
				  <div class="alert alert-danger" role="alert">Ocurrio un error al realizar su validación.</div>
				</div>
			<?php } ?>
	        
           
		</form>            
      
     
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