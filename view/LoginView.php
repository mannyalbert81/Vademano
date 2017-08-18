﻿  <div class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69); margin-top: -19px">
 <?php include("view/modulos/head.php"); ?>
 </div>
  
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

</head >

<body class="cuerpo">

    
     <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  		
   <form id="form-login"  action="<?php echo $helper->url("Usuarios","Loguear"); ?>" method="post" class="col-lg-12" >
  
   <div class="col-lg-5 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px;" >
   <h4>Login</h4>
            <hr/>
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
                                  <label for="usuario_usuario" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="usuario_usuario" name="usuario_usuario" value=""  placeholder="Usuario">
                                  <span class="help-block"></span>
                              </div>
                              <div class="form-group">
                                  <label for="clave_usuario" class="control-label">Password</label>
                                  <input type="password" class="form-control" id="clave_usuario" name="clave_usuario" value="" placeholder="Password">
                                  <span class="help-block"></span>
                              </div>
                             
                              
                            
						    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; ">
						    <div class="col-xs-3 col-md-3 col-lg-3" style="text-align: center;">
						    </div>
						     <div class="col-xs-6 col-md-6 col-lg-6" style="text-align: center;">
						      <div class="form-group">
				                                 <button type="submit" class="btn btn-success btn-block">Login</button>
				          
				            </div>
						    </div>
						     <div class="col-xs-3 col-md-3 col-lg-3" style="text-align: center;">
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
           <br><br><br><br><br><br><br><br><br> 
      </div>
      
            <div class="col-lg-7 col-md-3 division" style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px">
            <h4>Informate</h4>
            <hr/>
           <img src="" id="imagen" width="730" height="430">
            <br><br>
            </div>
            
 </form>
       </br>
       </br>
       </br>
       </br>
    
      
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
</body>
</html>