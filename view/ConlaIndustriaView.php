<div class="head menu" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
 <?php include("view/modulos/head.php"); ?>
</div>

<!DOCTYPE HTML>
<html lang="es">
     <head>
        <meta charset="utf-8"/>
        <title>Con la Industria - Vademano 2015</title>
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
	
     
	
	
		<script >
 		
		$(document).ready(function(){
			
		    // cada vez que se cambia el valor del combo
		    $("#btn_guardar").click(function() 
			{
		    	 
		    	var descripcion_industria = $("#descripcion_industria").val();
		    	var archivo = $("#archivo").val();
		    	
		    	if (descripcion_industria == "")
		    	{
			    	
		    		$("#mensaje_descripcion_industria").text("Introduzca una Descripción");
		    		$("#mensaje_descripcion_industria").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_descripcion_industria").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	if (archivo == "")
		    	{
			    	
		    		$("#mensaje_pdf").text("Seleccione PDF");
		    		$("#mensaje_pdf").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_pdf").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
				}); 
		    $( "#descripcion_industria" ).focus(function() {
				$("#mensaje_descripcion_industria").fadeOut("slow");
			});
			$( "#archivo" ).focus(function() {
				$("#mensaje_pdf").fadeOut("slow");
			});
			
				    
		}); 
	</script>
	
	
	<script >
 		
		$(document).ready(function(){
			
		    // cada vez que se cambia el valor del combo
		    $("#btn_actualizar").click(function() 
			{
		    	 
		    	var descripcion_industria = $("#descripcion_industria").val();
		    	
		    	
		    	if (descripcion_industria == "")
		    	{
			    	
		    		$("#mensaje_descripcion_industria").text("Introduzca una Descripción");
		    		$("#mensaje_descripcion_industria").fadeIn("slow"); //Muestra mensaje de error
		            return false;
			    }
		    	else 
		    	{
		    		$("#mensaje_descripcion_industria").fadeOut("slow"); //Muestra mensaje de error
		            
				}
		    	
		    	
		    	
				}); 
		    $( "#descripcion_industria" ).focus(function() {
				$("#mensaje_descripcion_industria").fadeOut("slow");
			});
			
			
				    
		}); 
	</script>
	
 	    
   	 </head>
    
    <body class="cuerpo">
    <form  action="<?php echo $helper->url("DelaMano","index"); ?>" method="post" enctype="multipart/form-data" class="col-lg-12">
        
			  <div class="row" style="margin-top: 20px;" >
			  <div class="col-xs-1 col-md-1">
			  </div>
			  
			  <div>
			  <div class="col-xs-10 col-md-10" style=" background-color: #fbfbfb; border-radius: 5px 5px 5px 5px;"> 
				
			  <div class="col-lg-6 col-md-6 col-xs-6">
		   	  <h4>De la Mano Con la Industria</h4>  
			  <hr/>
         
			
			<?php if ($resultEdit !="" ) { foreach($resultEdit as $resEdit) {?>
			
			 <div class="row">
	         <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="descripcion_industria" class="control-label">Descripción:</label>
                                  <textarea type="text"  class="form-control" id="descripcion_industria" name="descripcion_industria" value=""  placeholder="Descripción"><?php echo  $resEdit->descripcion_industria;?></textarea>
                                  <div id="mensaje_descripcion_industria" class="errores"></div>
			 
             </div>
		     </div>
	  		 </div> 
			
			 <div class="row">
			 <div class="col-xs-6 col-md-12">
		     <div class="form-group">
                                  <label for="archivo" class="control-label">Catálogo:</label>
                                  <input type="file" class="form-control" id="archivo" name="archivo" accept=".pdf" class="form-control" multiple />
                                  <input type="hidden" class="form-control" id="id_industria" name="id_industria" value="<?php echo  $resEdit->id_industria;?>" class="form-control" />
                                  <div id="mensaje_pdf" class="errores"></div>
                                  
								
             </div>
             </div>
		     </div>
		     
		     <div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 20px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_actualizar" name="btn_actualizar" class="btn btn-warning"><i class="fa fa-plus-square fa-spin" aria-hidden="true"></i> Actualizar</button>
            </div>
		    </div>
		    </div>
			
			<?php }}else{?>
			
			 <div class="row">
	         <div class="col-xs-12 col-md-12">
		     <div class="form-group ">
		                          <label for="descripcion_industria" class="control-label">Descripción:</label>
                                  <textarea type="text"  class="form-control" id="descripcion_industria" name="descripcion_industria" value=""  placeholder="Descripción"></textarea>
                                  <div id="mensaje_descripcion_industria" class="errores"></div>
			 
             </div>
		     </div>
	  		 </div> 
			
			 <div class="row">
			 <div class="col-xs-6 col-md-12">
		     <div class="form-group">
                                  <label for="archivo" class="control-label">Catálogo:</label>
                                  <input type="file" class="form-control" id="archivo" name="archivo" accept=".pdf" class="form-control" multiple/>
                                  <div id="mensaje_pdf" class="errores"></div>
                                  
								
             </div>
             </div>
		     </div>
			
			<div class="row">
		    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; margin-top: 20px;">
		    <div class="form-group">
                                  <button type="submit" id="btn_guardar" name="btn_guardar" class="btn btn-success"><i class="fa fa-plus-square fa-spin" aria-hidden="true"></i> Guardar</button>
            </div>
		    </div>
		    </div>
			
			
			<?php }?>
		   
		   
		     	  </div>
				
				  <div class="col-xs-6 col-md-6" style="margin-top: 55px; " >
					<section class="col-lg-12 ">
				        <table class="table table-hover">
					         <tr class="info">
					    		<th style="text-align: left;  font-size: 11px;">Id</th>
					    		<th style="text-align: left;  font-size: 11px;">Descripción</th>
					    		<th style="text-align: left;  font-size: 11px;">Catálogo</th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		<th style="text-align: left;  font-size: 11px;"></th>
					    		
					  		</tr>
				                
					            <?php if(!empty($resultInd)) {foreach($resultInd as $res) {?>
					        	
					        		<tr>
					                   <td style="font-size: 11px;"> <?php echo $res->id_industria; ?>  </td>
						               <td style="font-size: 11px;"> <?php echo $res->descripcion_industria; ?> </td> 
						               <td style="font-size: 11px;"><a href="view/DevuelveCatalogoView.php?id_valor=<?php echo $res->id_industria; ?>&id_nombre=id_industria&tabla=industria&campo=pdf" target="_blank"><img src="view/images/logo_pdf.png" class="img-responsive zoom" width="25" height="25"></a></td> 
						             
                                          
                                          
                                          
										 <td style="font-size: 11px;">   
					                	   <a  href="<?php echo $helper->url("DelaMano","index"); ?>&id_industria_editar=<?php echo $res->id_industria; ?>" class="btn btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
						                </td>
						               <td style="font-size: 11px;">   
							                    <a href="<?php echo $helper->url("DelaMano","index"); ?>&id_industria_borrar=<?php echo $res->id_industria; ?>" class="btn btn-danger" onClick="return mensaje();"><i class="glyphicon glyphicon-trash"></i></a>
							           </td>
						    		</tr>
						        <?php }} ?>
				            
				       	</table>     
				    </section>
				  </div>
				  </div>
				  
				  </div>
				  
			  
			  <div class="col-xs-1 col-md-1">
			  </div>
			  
			  
			  
			  <br><br>
			</div>
			  
			  
         
     
</form>   



 
         	<div class="col-lg-12">
  			 <?php include("view/modulos/beforefooter.php"); ?>	
   			</div>    
   		  
   		
   		 
   		 
   	 	<span class="ir-arriba">^</span>
     </body>  
    	
    </html>   