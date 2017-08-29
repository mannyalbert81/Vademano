 <script src="http://maps.google.com/maps/api/js?key=AIzaSyDyu4jW-edLYPnTIBRqHtUxisvp3NRVBps"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>

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
	      		
	      		<p class="before-footer-texto">   <span class="glyphicon glyphicon-road" aria-hidden="true"></span>  Edif. MAGAP Piso 9</p>
		  		<p class="before-footer-texto">   <span class="glyphicon glyphicon-globe" aria-hidden="true"></span> Quito – Ecuador</p>
		  		<p class="before-footer-texto">   <span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span> (+59)2 436 4566 - (+59)3 987 968 467</p>
		  		<p class="before-footer-texto">   <span class="glyphicon glyphicon-comment" aria-hidden="true"></span> Skype: vademano</p>
		  		<p class="before-footer-texto">  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> info@vademano.com</p>
			</div>
	    	
	  	</div>
	  		</div>
	  	
	  	
	  	<div class="col-sm-3 col-md-3">
	  		<div class= "before-footer-titulo"   >
				<strong> Zona de Usuarios </strong> 
	    	</div>
	    	<div style="margin-top: 20px;" >	
	      		<a href="<?php echo $helper->url("Preguntas","index"); ?>" class="before-footer-texto" > <span class="glyphicon glyphicon-pencil" ><?php echo " Preguntas Frecuentes" ;?></span> </a><br>
	      	 <?php $status = session_status();  ?>
		        <?php if  (isset( $_SESSION['nombres_usuario'] )){  ?> 
			 	
	      		<a href="#" class="before-footer-texto" ><span class="glyphicon glyphicon-star-empty" ><?php echo " Productos Favoritos" ;?></span> </a><br>
				<a href="#" class="before-footer-texto" ><span class="glyphicon glyphicon-heart" ><?php echo " Productos Recientes" ;?></span> </a><br>
				<a href="<?php echo $helper->url("Afiliaciones","VistaActualizarDatos"); ?>" class="before-footer-texto" ><span class="glyphicon glyphicon-list-alt" ><?php echo " Actualizar Datos de Usuario" ;?></span> </a>
				
				
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