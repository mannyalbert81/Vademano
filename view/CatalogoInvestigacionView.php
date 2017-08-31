<div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
</div>

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
        
   <link rel="stylesheet" href="view/font-awesome/css/font-awesome.min.css">   
  
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
	
	
	<script>
	$(document).ready(function(){

		//alert("hola");
		$("#calendario").hide();

		$("#criterio_busqueda").change(function(){

			var criterio_busqueda=$(this).val();

			if(criterio_busqueda==2){
				$("#calendario").show();
				$("#texto").hide();
				}else{
					$("#calendario").hide();
					$("#texto").show();
					}

			});
		
		});

		</script>
		
		
		
		<script>
		$(document).ready(function(){
		    $fecha=$('#calendario');
		    if ($fecha[0].type!="date"){
		    $fecha.attr('readonly','readonly');
		    $fecha.datepicker({
	    		changeMonth: true,
	    		changeYear: true,
	    		dateFormat: "yy-mm-dd",
	    		yearRange: "1990:2017"
	    		});
		    }
		}); 
	</script>
	
         <style type="text/css">
		    #mapa{
		      border:1px solid red;
		   
		      height: 500px;
		        width: 100%;
		    }
		  </style>
		  
    	
	
      
        
   	 </head>
    
    <body class="cuerpo">
    <form  action="<?php echo $helper->url("DelaMano","index4"); ?>" method="post" class="col-lg-12">
    
    	 
      
		     
          
	    
			  <div class="row" style="margin-top: 20px;" >
			  <div class="col-xs-1 col-md-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-10 col-md-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
				
			<div class="col-lg-6 col-md-6 col-xs-6">
			 <h4>De la Mano Con la Investigación</h4>  
			  <hr>
			   	 <div class="panel panel-info">
         <div class="panel-heading">
	         <h5><i class='glyphicon glyphicon-search'></i> Buscar</h5>
	         </div>
	         <div class="panel-body"> 
	          <div class="col-xs-4 col-md-4 col-lg-4" id="texto" >
	          	<input type="text" class="form-control" name="contenido_busqueda" id="contenido_busqueda" placeholder="texto a buscar">
	            </div>
	          <div class="col-xs-4 col-md-4 col-lg-4" id="calendario" >
	          	<input type="date" class="form-control" name="contenido_busqueda1" id="contenido_busqueda1" >
	          </div>
	          <div class="col-lg-4 col-md-4 col-xs-4" style="margin-top: 1px;">
             <select name="criterio_busqueda" id="criterio_busqueda"  class="form-control">
                                    <?php foreach($resultMenu as $val=>$desc) {?>
                                         <option value="<?php echo $val ?>" <?php //if ($resRol->id_rol == $resEdit->id_rol )  echo  ' selected="selected" '  ;  ?> ><?php echo $desc ?> </option>
                                    <?php } ?>
                                        
           </select>
           <div id="mensaje_criterio_busqueda" class="errores"></div>
           </div>				   		
	          <div class="col-xs-4 col-md-4 col-lg-4" style="margin-top: 6px;" >	
	          	<button type="submit" id="btn_buscar" name="btn_buscar" class="btn btn-primary"><span class="glyphicon glyphicon-search	" ><?php echo "" ;?> </span></button>
	          </div>
          
        </div>
        </div>
				        <table class="table table-hover">
					         <tr class="info">
					    		
					    		<th style="text-align: left;  font-size: 11px;">Descripción</th>
					    		<th style="text-align: left;  font-size: 11px;">Fecha</th>
					    		<th style="text-align: left;  font-size: 11px;">Catálogo</th>
					    		
					    		
					  		</tr>
				                
					            <?php if(!empty($resultInv)) {foreach($resultInv as $res) {?>
					        	
					        		<tr>
					                   
						               <td style="font-size: 12px;"> <?php echo $res->descripcion_investigacion; ?> </td> 
						               <td style="font-size: 12px;"> <?php echo $res->fecha_investigacion; ?> </td> 
						               <td style="font-size: 11px;"><a href="view/DevuelveCatalogoView.php?id_valor=<?php echo $res->id_investigacion; ?>&id_nombre=id_investigacion&tabla=investigacion&campo=pdf" target="_blank"><img src="view/images/logo_pdf.png" class="img-responsive zoom" width="50" height="50"></a></td> 
						             
                                        
						    		</tr>
						        <?php }} ?>
				            
				       	</table>     
				   
		   
		     	  </div>
				
				  <div class="col-xs-6 col-md-6" style="margin-top: 20px; " >
				  	<div style="text-align:justify; ">
				    	<div class="media">
				
						  <div class="media-body">
						    <div>
						    	<h4 class="media-heading"    > Vademano</h4>
						    	<br>
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
				  </div>
				  
				  </div>
				  
			  
			  <div class="col-xs-1 col-md-1">
			  </div>
			</div>
			  
			  
         
     
</form>   


 		 <div class="col-xs-12 col-md-12">
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