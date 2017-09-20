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




<div data-role="content">
<form>
<input type="hidden" id="msg"  name="msg" value="<?php echo $_SESSION['id_usuario'];  ?>">

</form>


<div id="qr"></div>
</div>
</body>
</html>
