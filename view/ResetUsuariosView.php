
<div  class="head" style=" -webkit-box-shadow: 0px 2px 2px 4px rgba(0,0,0,0.69);">
    <?php include("view/modulos/head.php"); ?>
</div>

<!DOCTYPE HTML>
<html lang="es">
      <head>
        <meta charset="utf-8"/>
        <title>Login - Vademano 2015</title>
   <link rel="stylesheet" href="view/css/bootstrap.css">
   		 	
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
       
      <form id="form" action="<?php echo $helper->url("Usuarios","Reset"); ?>" method="post" class="col-lg-5">
            <div class="col-lg-12 division"; style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px;" >
  
           
            <h4>Login</h4>
            <hr/>
         
     
       
           
             <div class="well">        
        <div class="row" style="padding-top: 10px">
    
               <div class="col-lg-6 col-md-3" >
                     
                              <div class="form-group">
                                  <label for="reestablecer_usuario" class="control-label">Usuario</label>
                                  <input type="text" class="form-control" id="reestablecer_usuario" name="reestablecer_usuario" value=""  placeholder="Usuario o Email">
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
									<div class="alert alert-success" role="alert"><strong>Te redirecionaremos a la pagina de Login</strong></div>	
					  			 <?php sleep(5); ?>
				     
				     			 <?php }?>
							
					        <?php } ?>
					        <?php } ?>  
                              
                            
						    <div class="col-xs-12 col-md-12 col-lg-12" style="text-align: center; ">
						    <div class="col-xs-2 col-md-2 col-lg-2" style="text-align: center;">
						    </div>
						     <div class="col-xs-8 col-md-8 col-lg-8" style="text-align: center;">
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
		  
		  
            
          </form>
       
      <form id="form" action="<?php echo $helper->url("Afiliaciones","InsertaAfiliados"); ?>" method="post" class="col-lg-7">
          <div class="col-lg-12 col-md-12 division" style="-webkit-box-shadow: 0px 2px 2px 2px rgba(0,0,0,0.69); border-radius: 24px 24px 24px 24px; margin-top: 20px">
          
            <h4>Publicidad Aqui</h4>
			<hr>
			 <img src="" id="imagen" width="825" height="430">
			 <br><br>
          </div>
        
          </form>
         
      </div>
      
      	<div class="col-lg-12">
  					
   		     <?php include("view/modulos/servicios.php"); ?>	
   			 
   		</div>     
  
       <?php include("view/modulos/beforefooter.php"); ?>
    		
   
     </body>  
    </html>   