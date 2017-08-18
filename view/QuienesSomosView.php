 <div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
 </div>
 
 <?php include("view/modulos/slide.php"); ?>
 

<!DOCTYPE HTML>
<html lang="es">
   	 <head>
        <meta charset="utf-8"/>
        <title>Quienes Somos - Vademano 2015</title>
        	<link rel="stylesheet" href="view/css/bootstrap.css">
     <link rel="stylesheet" href="view/css/estilos.css">
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
        
 
  
   <script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
     
         <style type="text/css">
		    #mapa{
		      border:1px solid red;
		   
		      height: 500px;
		        width: 100%;
		    }
		  </style>
		  
    
	
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
    	
    	
    <form action="<?php echo $helper->url("Mensajes","Inserta"); ?>" method="post" class="col-lg-12">
   	
   			<div class="row" style="margin-top: 40px;" >
			  <div class="col-xs-1 col-md-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-10 col-md-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
				  <div class="col-xs-6 col-md-6" style="margin-top: 20px; " >
				  	<div style="text-align:justify; ">
				    	<div class="media">
				
						  <div class="media-body">
						    <div>
						    	<h4 class="media-heading"    >Quienes Somos </h4>
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
				  <div class="col-lg-6 col-md-6 col-xs-6">
				  
            <h4 >Enviar Mensaje</h4>
            <hr/>
           
		    
            <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Nombres</p>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Apellidos</p>
            	</div>
            </div>	
		    <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="nombres_mensajes"  class="form-control"/>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="apellidos_mensajes"  class="form-control"/>
            	</div>
            </div>	
		    
		    <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Pais</p>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Provincia</p>
            	</div>
            </div>		
	  		<div class="row">
            	<div class="col-xs-6 col-md-6">
            	  	<select name="paises" id="paises"  class="form-control" style="	width: 200px;">
						<?php foreach($resultPais as $resPais) {?>
							<option value="<?php echo $resPais->id_pais; ?>"  ><?php echo $resPais->nombre_pais; ?> </option>
			            <?php } ?>
					</select>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  	<select name="provincias" id="provincias"  class="form-control" style="	width: 200px;">
						
							<option value="0"  > -- SIN ESPECIFICAR -- </option>
			            
					</select>
            	</div>
            </div>		
	  		
	  		 <div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Telefono</p>
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <p class="formulario-subtitulo">Celular</p>
            	</div>
            </div>    		
        	<div class="row">
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="telefono_mensajes"  class="form-control"   />
            	</div>
            	<div class="col-xs-6 col-md-6">
            	  <input type="text" name="celular_mensajes"  class="form-control"   />
            	</div>
            </div>    		
        	 <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <p class="formulario-subtitulo">Email</p>
            	</div>
            	
            </div>
	  		 <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <input type="email" name="email_mensajes"  class="form-control"   />
            	</div>
            	
            </div>
	  		 <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <p class="formulario-subtitulo">Mensaje</p>
            	</div>
            	
            </div>
             <div class="row">
            	<div class="col-xs-12 col-md-12">
            	  <textarea rows="4" name="mensaje_mensajes" class="form-control" ></textarea>
            	</div>
            	
            </div>
	   		<div class="row">
            	<div class="col-xs-12 col-md-12" style="text-align: center;">
            	  <input type="submit" value="Enviar" class="btn btn-success"/>
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
   	 	
    </body>
</html>