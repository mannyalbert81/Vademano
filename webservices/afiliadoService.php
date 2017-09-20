<?php
//header('Access-Control-Allow-Origin: *');

  require_once '../core/DB_Functions.php';
  $db = new DB_Functions();

	if(isset($_POST['action']))
	{
		switch ($_POST['action'])
		{
			case 'insertar' :
				
				
				$_nombres_afi = strtoupper ( $_POST['nombres'] );
				$_apellidos_afi  = strtoupper ( $_POST['apellidos'] );
				$_usuario_afi   = $_POST['email'];
				$_clave_afi = encrypt($_POST['clave']);
				$_clave_afi1     = $_POST["clave"];
				$_telefono_afi  = $_POST["telefono"];
				$_celular_afi   = $_POST["celular"];
				$_correo_afi    = $_POST["email"];
				$_id_rol   = 3;   // afiliados
				$_id_estado = 2; //sin activar
				$_clave_activacion_afi = encrypt($_POST['email']);
				$_fecha_nac_afi = '2017-09-20';
				
				
				$funcion = "ins_usuarios";
				$parametros = " '$_nombres_afi','$_apellidos_afi', '$_usuario_afi', '$_clave_afi'
					,'66', '19', '$_telefono_afi', '$_celular_afi'
					,'$_correo_afi', '$_id_rol','$_id_estado', '$_clave_activacion_afi'
					, '$_fecha_nac_afi' , '8' , '' ";
				
				$dtInsert = $db->insertar($funcion, $parametros);
				
				
				echo json_encode(array('a'=>1));
				die();
				
				
				$respuesta = new stdClass();
				
				if($dtInsert==1){
					//enviarcorreo();
					$respuesta->cod=1;
					$respuesta->mensaje='Se registro su afiliacion, Favor revisar correo';
				}else {
					$respuesta->cod=0;
					$respuesta->mensaje='Error al registrar afiliacion, Revise conexion';
				}
				
				echo json_encode($respuesta);
				
			break;
		}
	}

	function encrypt($string) {
		$key = "Romina";
		$result = '';
		for($i=0; $i<strlen($string); $i++) {
			$char = substr($string, $i, 1);
			$keychar = substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char)+ord($keychar));
			$result.=$char;
		}
		return base64_encode($result);
	}
 
	function enviarcorreo(){


		$baseUrl = URLVADEMANO;
		$controladorAccion = "controller=Afiliaciones&action=ValidarAfiliado&clave_activacion=" . $_clave_activacion_usuario;
		$activacion = $baseUrl.$controladorAccion;
		$cabeceras = "MIME-Version: 1.0 \r\n";
		$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
		$cabeceras.= "From: info@masoft.net \r\n";
		$destino="$_correo_usuario";
		$asunto="Afiliacion";
		$fecha=date("d/m/y");
		$hora=date("H:i:s");
		//align='center'
		$resumen="
			
		<table rules='all'>
		<tr style='background:#7acb5a'><td WIDTH='1000' HEIGHT='50'><rigth><img src='http://186.4.203.42:4000/Vademano/view/images/logo_vademano.png' WIDTH='200' HEIGHT='80' /></rigth></td></tr>
		</tabla>
		<p><table rules='all'></p>
		<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> BIENVENIDO A VADEMANO </b></td></tr></p>
		<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='justify'>Bienvenido a Vademano veterinario el portal digital que reúne toda la información  de relevancia relacionada con los productos  farmacéuticos de uso veterinario que se comercializan, busca proveer a médicos veterinarios, técnicos, especialistas y público en general  el más completo vademécum digital.
		El Vademano Veterinario está diseñado como una herramienta web moderna, versátil y fácil de utilizar, que se ajusta a la versatilidad de los dispositivos de comunicación actual para que la búsqueda de información se convierta en una tarea sencilla que puede ser realizada a través de múltiples combinaciones de criterios:
		efecto terapéutico, forma farmacéutica, especies, etc.; asimismo dispondrá de la información de los productos en formato PDF, opción para imprimir, entre otras múltiples ventajas.</td></tr>
		</tabla>
		<p><table rules='all'></p>
		<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> ESTAS REGISTRADO EN VADEMANO</b></td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Nombre: </b>$_nombres_usuario</td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Apellido: </b>$_apellidos_usuario </td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000'></td></tr>
		</tabla>
		<p><table rules='all'></p>
		<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> TUS DATOS DE ACCESO SON: </b></td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Usuario: </b>$_correo_usuario </td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000'><b> Clave: </b>$_clave_usuario1 </td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000'></td></tr>
		</tabla>
		<p><table rules='all'></p>
		<tr style='background: #FFFFFF;'><td WIDTH='1000' align='center'><b>  LINK DE ACTIVACIÓN </b></td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000' align='center'><a href=$activacion>Activación</A></td></tr>
		<tr style='background: #FFFFFF;'><td WIDTH='1000'></td></tr>
		</table>
		<p><table rules='all'></p>
		<tr style='background:#1C1C1C'><td WIDTH='1000' HEIGHT='50' align='center'><font color='white'>Vademano. - <a href='http://www.vademano.com'><FONT COLOR='#7acb5a'>www.vademano.com</FONT></a> - Copyright © 2017-</font></td></tr>
		</table>";
			
		if (mail("$destino","Afiliaciones","$resumen","$cabeceras"))
		{
			
				
			die('if');
				
		}
		else
		{
				
			die('else');
				
		}
			
		
	}
	
?>