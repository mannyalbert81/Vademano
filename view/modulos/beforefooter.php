
 <script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
 <link rel="stylesheet" href="view/font-awesome/css/font-awesome.min.css">

<div class="navbar navbar-bottom"  >
<footer>
        
<div class="row" style="margin-top: 40px; background-color: #272525;  " >
  

	<div class="col-sm-2 col-md-2">
  	</div>
  	
  	<div class="col-sm-10 col-md-10">
  	  	
  	  	
  	  	<div class="col-sm-6 col-md-6">
  	  	<div class= "before-footer-titulo" style="text-align: center;">
				<strong> Informacion </strong> 
	    	</div>
  	  	
  	  	
  	  	<div class="col-sm-6 col-md-6" style="margin-top: 10px;" >
  	  	 <div id="mapa" name="mapa" style="height:140px;border:2px solid green;"></div>
  	  	</div>
  	  	
  	  	<div class="col-sm-6 col-md-6">
	  		
	    	<div style="margin-top: 20px;" >	
	      		
	      		<p class="before-footer-texto"><span class="glyphicon glyphicon-road fa-spin" aria-hidden="true"></span>  Edif. MAGAP Piso 9</p>
		  		<p class="before-footer-texto"><span class="glyphicon glyphicon-globe fa-spin" aria-hidden="true"></span>  Quito – Ecuador</p>
		  		<p class="before-footer-texto"><span class="glyphicon glyphicon-phone-alt fa-spin" aria-hidden="true"></span>  (+59)2 436 4566 - (+59)3 987 968 467</p>
		  		<p class="before-footer-texto"><span class="glyphicon glyphicon-comment fa-spin" aria-hidden="true"></span>  Skype: vademano</p>
		  		<p class="before-footer-texto"><span class="glyphicon glyphicon-envelope fa-spin" aria-hidden="true"></span>  info@vademano.com</p>
			</div>
	    	
	  	</div>
	  		</div>
	  
	  	
	  	<div class="col-sm-3 col-md-3">
	  		<div class= "before-footer-titulo"   >
				<strong> Zona de Usuarios </strong> 
	    	</div>
	    	<div style="margin-top: 20px;" >	
	      		<a href="<?php echo $helper->url("Preguntas","index"); ?>" class="before-footer-texto" > <span class="glyphicon glyphicon-pencil fa-spin" ></span><?php echo " Preguntas Frecuentes" ;?> </a><br>
	      	 <?php $status = session_status();  ?>
		        <?php if  (isset( $_SESSION['nombres_usuario'] )){  ?> 
			 	
	      		<a href="<?php echo $helper->url("FichasFavoritos","index"); ?>" class="before-footer-texto" ><span class="glyphicon glyphicon-star-empty fa-spin" ></span><?php echo " Productos Favoritos" ;?> </a><br>
				<a href="<?php echo $helper->url("Usuarios","Bienvenida"); ?>" class="before-footer-texto" ><span class="glyphicon glyphicon-heart fa-spin" ></span><?php echo " Productos Recientes" ;?> </a><br>
				<a href="<?php echo $helper->url("Afiliaciones","VistaActualizarDatos"); ?>" class="before-footer-texto" ><span class="glyphicon glyphicon-list-alt fa-spin" ></span><?php echo " Actualizar Datos de Usuario" ;?> </a>
				
				
				<?php } ?>
			</div>
	    	
	  	</div>
	  	<div class="col-sm-3 col-md-3"></div>
	  	
	</div>
	
	
  	
</div>
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