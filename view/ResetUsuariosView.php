
<div  class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
    <?php include("view/modulos/head.php"); ?>
</div>
   <?php include("view/modulos/slide.php"); ?>
<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Login - Vademano 2015</title>
   
   			<link rel="stylesheet" href="view/css/bootstrap.css">
    
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrap.min.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
  <script src="view/js/ValidarReset.js"></script>
  
  	   <script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
     
	 	<style type="text/css">

.menu-fixed {
	position:fixed;
	z-index:1000;
	top:0;
	left:0;
	right: 0;
	
}

 h4 {
	    font-size: 25px;
	    font-style: verdana;
	    color:#696969;
	    text-decoration:none;
	    text-shadow: -0px -0px 0px #101010, 0px 1px 0px #505050;
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
        
        <script>
    var imagenes=new Array(

        'view/images/publicidad/1.jpg',
        'view/images/publicidad/2.jpg',
        'view/images/publicidad/3.jpg',
        'view/images/publicidad/4.jpg',
        'view/images/publicidad/5.jpg',
        'view/images/publicidad/6.jpg',
        'view/images/publicidad/7.jpg',
        'view/images/publicidad/8.jpg',
        'view/images/publicidad/9.jpg'

    );

    function rotarImagenes()
    {
        var index=Math.floor((Math.random()*imagenes.length));
        document.getElementById("imagen").src=imagenes[index];
        
    }

    onload=function()
    {
        rotarImagenes();
        setInterval(rotarImagenes,3000);
    }
    </script>
        
        
        
    </head>
    
    <body class="cuerpo">
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    	 <form id="form-reset" action="<?php echo $helper->url("Usuarios","Reset"); ?>" method="post" class="col-lg-12">
    
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
            <hr/>
         
     
       
           
             <div class="well">        
        <div class="row" style="padding-top: 10px">
    
               <div class="col-lg-6 col-md-3" >
                     
                              <div class="form-group">
                                  <label for="reestablecer_usuario" class="control-label">Usuario</label>
                                  <input type="email" class="form-control" id="reestablecer_usuario" name="reestablecer_usuario" value=""  placeholder="Usuario o Email">
                                  <span class="help-block"></span>
                              </div>
                            
                              <?php if ($resultSet == "") {?>
								
						  		 <div class="alert alert-success" role="alert">Introduzca un nombre de usuario o correo electrónico del usuario registrado en el sistema.</div>
								
					        <?php    } ?>
                              <?php if (isset($resultSet)) {?>
							<?php if ($resultSet != "") {?>
						
								 <?php if ($error == TRUE) {?>
								 	<div class="alert alert-danger" role="alert"><?php echo $resultSet; ?></div>
								 <?php } else {?>			
								    <div class="alert alert-success" role="alert"><?php echo $resultSet; ?></div>
								 <?php sleep(5); ?>
				     
				     			 <?php }?>
							
					        <?php } ?>
					        <?php } ?>  
                              
                            
						    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; ">
						    <div class="col-xs-2 col-md-2 col-lg-2" style="text-align: center;">
						    </div>
						     <div class="col-xs-9 col-md-9 col-lg-9" style="text-align: center;">
						      <div class="form-group">
				                                 <button type="submit" id="btn_reestablecer" name="btn_reestablecer" class="btn btn-success btn-block" >Reestablecer</button>
				          
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
		                        </ul>
		                  </div>
              </div>
              </div>
           <br><br><br><br><br><br><br><br>
           
           
           
           
           
           
           
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