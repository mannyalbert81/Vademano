<?php

require_once '../core/DB_Functions.php';

$db = new DB_Functions();

if(isset($_GET['id_usuario']))
{
	$_email_mensajes="steven@masoft.net"; //viene de ajax
	$_mensaje_mensajes="probando"; //viene de ajax
	
	$resultadosJson ="";
	
	$cabeceras = "MIME-Version: 1.0 \r\n";
	$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
	$cabeceras.= "From: $_email_mensajes \r\n ";
	$destino="danny@masoft.net";
	$asunto="Mensaje";
	$fecha=date("d/m/y");
	$hora=date("H:i:s");
	//align='center'
	$resumen="
	<table rules='all'>
	<tr style='background:#7acb5a'><td WIDTH='1000' HEIGHT='50'><rigth><img src='http://186.4.203.42:4000/Vademano/view/images/logo_vademano.png' WIDTH='200' HEIGHT='80' /></rigth></td></tr>
	</tabla>
	<p><table rules='all'></p>
	<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> TE ENVIARON ESTE MENSAJE</b></td></tr>
	<tr style='background: #FFFFFF;'><td WIDTH='1000' align='justify'><b> Mensaje: </b>$_mensaje_mensajes</td></tr>
	</tabla>
	<p><table rules='all'></p>
	<tr style='background:#1C1C1C'><td WIDTH='1000' HEIGHT='50' align='center'><font color='white'>Vademano. - <a href='http://www.vademano.com'><FONT COLOR='#7acb5a'>www.vademano.com</FONT></a> - Copyright © 2017-</font></td></tr>
	</table>";
	
	try {
		mail("$destino","Mensaje","$resumen","$cabeceras");
		
	} catch (Exception $e) {
		echo "entro" + $e;
		die();
	} 
	
	
	echo $_GET['jsoncallback'] . '(' . $resultadosJson . ');';
}else{
	
	echo "no entro";
	die();
	
}

?>
	