<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<title>Sincronizar</title>
<meta name ="author" content ="Norfi Carrodeguas">
<script type="text/javascript" src="view/js/qrcode.js"></script>
	<body onload="update_qrcode();">
	</body>
	
</head>
<body>	
			<!-- Modal -->
			<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
				  <div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Sincronizar</h4>
				  </div>
				  <div class="modal-body">
					<form class="form-horizontal">
					 <input type="hidden" id="msg"  name="msg" value="<?php echo $_SESSION['id_usuario'];  ?>">
					 <div id="qr"></div>
					</form>
				  </div>
				  <br>
				  <div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					
				  </div>
				</div>
			  </div>
			</div>
			
			
			
			
</body>
</html>
	