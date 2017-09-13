 <div class="head menu"  style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69); margin-top: -20px;"">
 <?php include("view/modulos/head.php"); ?>
 </div>
   <?php include("view/modulos/slide.php"); ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Login Pasantias</title>
		<link rel="stylesheet" href="view/css/bootstrap.css">
    
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrap.min.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
  <script src="view/js/ValidarLogin.js"></script>
  <link rel="stylesheet" href="view/font-awesome/css/font-awesome.min.css">
	   <script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
     
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

</head >

    <body class="cuerpo">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    	<form id="form-login"  action="<?php echo $helper->url("Usuarios","Loguear"); ?>" method="post" class="col-lg-12" >
  
    	  <div class="row" style="margin-top: 20px;" >
			  <div class="col-xs-1 col-md-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-10 col-md-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
				  <div class="col-xs-6 col-md-6" style="margin-top: 30px; " >
				  	<div style="text-align:justify; ">
				    	<div class="media">
				
						  <div class="media-body">
						    <div>
						    	<h4 class="media-heading"    > Vademano</h4>
						    </div>
						    	<p>
								    Somos un equipo de trabajo comprometido en <strong> PROMOVER SU NEGOCIO AGROPECUARIO  </strong> 
								    como página de contacto y donde usted y su empresa pueden promover  e 
								    informar sus productos y servicios generando un beneficio entre la oferta 
								    y la demanda, a nuestros clientes. 
								    Queremos ser facilitadores de negocios, con Actitud positiva, 
								    Disfrutamos de lo que hacemos y permanecemos en una permanente 
								    <strong>  búsqueda de oportunidades para usted </strong>, trabajamos en equipo con 
								    actitud de servicio integrado y organizado, que comienza con la evaluación 
								    de sus necesidades de promoción empresarial y concluye en la satisfacción 
								    de sus requerimientos, nuestros profesionales exponen su información en las 
								    mejores condiciones de presentación e imagen corporativa, ingenieros de sistemas
								    y representantes de ventas permanentemente mantienen con amabilidad, oportunidad
								    y eficiencia, el servicio de <strong>promoción empresarial</strong> en nuestro portal.
								    
							    </p>
						  </div>
						</div>
				    	
					</div>   
					<hr> 
					 <div class="row">
		            	<div class="col-xs-6 col-md-6">
		            	  <div id="mapa" name="mapa" style="height:200px;border:2px solid green;"></div>
		
		            	</div>
		            	<div class="col-xs-6 col-md-6">
		            		<hr>
		            	  	<p class="contacto">   <span class="glyphicon glyphicon-road" aria-hidden="true"></span>  Edif. MAGAP Piso 9</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Quito – Ecuador</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> (+59)2 436 4566 - (+59)3 987 968 467</p>
					  		<p class="contacto">   <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Skype: vademano</p>
					  		<p class="contacto">  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@vademano.com</p>
					        <hr>    	  	
		            	</div>
		            </div>	
				  	<hr>
				  </div>
			  <div class="col-lg-6 division" style=" margin-top: 20px">
   
     <h4>Login</h4>
     
           <?php if (isset($resultado)) {?>
        	<?php if ($resultado == "true") {?>
        	
	        	
				  <div class="alert alert-success" role="alert">Ok<strong> correctamente </strong>, Enviamos a tu emil la informacion necesaria para el acceso al sistema</div>
				
			<?php }if ($resultado == "false") {?>
				
				  <div class="alert alert-danger" role="alert">Su cuenta o clave son incorrectos</div>
				
				<?php } ?>
	        <?php } ?>
	        
       
          <div class="well">        
        <div class="row" style="padding-top: 10px">
    
               <div class="col-lg-6 col-md-3" >
                             <div class="form-group">
                             <label for="usuario_usuario" class="control-label">Usuario</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
							  <input class="form-control" type="text" id="usuario_usuario" name="usuario_usuario" placeholder="Email address">
							 <span class="help-block"></span>
							</div>
                            </div>
                            
                             <div class="form-group">
                             <label for="clave_usuario" class="control-label">Password</label></br>
                             <div class="input-group margin-bottom-sm">
                             <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
							  <input class="form-control" type="password" id="clave_usuario" name="clave_usuario" placeholder="Password">
							 <span class="help-block"></span>
							 </div>
                             </div>
                            
						    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; ">
						    <div class="col-xs-2 col-md-2 col-lg-2" style="text-align: center;">
						    </div>
						    <div class="col-xs-8 col-md-8 col-lg-8" style="text-align: center;">
						    <div class="form-group">
				                                 <button type="submit" class="btn btn-success btn-block"><i class="fa fa-unlock fa-spin" aria-hidden="true"></i> Login</button>
				          
				            </div>
						    </div>
						    <div class="col-xs-2 col-md-2 col-lg-2" style="text-align: center;">
						    </div>
						    </div>
						     
                  </div>
                  
                		  <div class="col-lg-6 col-md-3">
		                      <p class="lead">Consejos de Seguridad <span class="text-success"></span></p>
		                      <ul class="list-unstyled" style="line-height: 2">
		                          <li><span class="fa fa-check text-success"></span> Recuerda tu usuario y tu clave.</li>
		                          <li><span class="fa fa-check text-success"></span> No enseñes a nadie tu clave.</li>
		                          <li><span class="fa fa-check text-success"></span> La clave es personal.</li>
		                          <li><span class="fa fa-check text-success"></span> Cuidala.</li>
		                          <p><a href="<?php echo $helper->url("Usuarios","Reset"); ?>" >Olvidaste tu Cuenta</a> </p>
		                      </ul>
		                  </div>
              </div>
       
              </div>
               
           </div>
				
				  </div>
				  
				  </div>
				  
			  
			  <div class="col-xs-1 col-md-1">
			  
			  </div>
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
		 </div>
    	  <script type="text/javascript">
	    var mapa = new GMaps({
	      el: '#mapa',
	      lat: -1.666618,
	      lng: -78.174819,
	      zoom:7
	    });
	   
	   
	    
	  </script> 
	  	<span class="ir-arriba">^</span>
     </body>
</html>