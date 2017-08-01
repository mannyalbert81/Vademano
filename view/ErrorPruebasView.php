<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="utf-8"/>
        <title>Error - aDocument 2015</title>
   <link rel="stylesheet" href="view/css/bootstrap.css">
     <link rel="stylesheet" href="view/css/estilos.css">
  <script src="view/js/jquery.js"></script>
  <script src="view/js/bootstrapValidator.min.js"></script>
  <script src="view/js/noty.js"></script>
        
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
    
          <?php include("view/modulos/head.php"); ?>
          <?php include("view/modulos/menu.php"); ?>
      <form  method="post" class="col-lg-5">
            <h3>Error Detectado</h3>
            <hr/>
            <table>
             <?php foreach($resultado as $res) {?>
	        		<tr>  
	                   <td>
	                   		 <?php echo $res->destino_id; ?>  
	                   </td>
	                </tr>
		    <?php }?>
            </table>
     </form>
  
  		  <?php include("view/modulos/footer.php"); ?>
     </body>  
    </html>