<?php

class MensajesController extends ControladorBase{

	public function __construct() {
		parent::__construct();
	}



	public function index(){
	
		session_start();
		$paises=new PaisesModel();
		$resultPais = $paises->getAll("nombre_pais");
		
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
		$mensajes = new MensajesModel();
		
		$fichas = new FichasModel();
		
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
		
		if(isset($_POST["btn_guardar"])){
			
			$_id_tipo_documentos  = 1;
			$_nombres_mensajes = $_POST["nombres_usuario"];
			$_apellidos_mensajes = $_POST["apellidos_usuario"];
			$_id_pais            = $_POST["paises"];
			$_id_provincia       = $_POST["provincias"];
			$_telefono_mensajes = $_POST["telefono_usuario"];
			$_celular_mensajes = $_POST["celular_usuario"];
			$_email_mensajes = $_POST["correo_usuario"];
			$_mensaje_mensajes = $_POST["mensaje"];
				
				
		
			
			$funcion = "ins_mensajes";
			$parametros = " '$_id_tipo_documentos', '$_nombres_mensajes', '$_apellidos_mensajes' , '$_id_pais' , '$_id_provincia', '$_telefono_mensajes' , '$_celular_mensajes' , '$_email_mensajes' , '$_mensaje_mensajes' ";
			$mensajes->setFuncion($funcion);
			$mensajes->setParametros($parametros);
			$resultado=$mensajes->Insert();
			
			
			$cabeceras = "MIME-Version: 1.0 \r\n";
			$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
			$cabeceras.= "From: $_email_mensajes \r\n ";
			$destino="steven@masoft.net";
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
			
			if (mail("$destino","Mensaje","$resumen","$cabeceras"))
			{
				
			
				$this->view("QuienesSomos",array(
						"resultSet"=>"", "resultPais"=>$resultPais, "resultProv"=>$resultProv, "resultado"=>"true", "resultVis"=>$resultVis
				));
			
				exit();
			}
			else
			{
				
			
				$this->view("QuienesSomos",array(
						"resultSet"=>"", "resultPais"=>$resultPais, "resultProv"=>$resultProv, "resultado"=>"false", "resultVis"=>$resultVis
				));
			
				exit();
			}
			
		}
		
		
		$this->view("QuienesSomos",array(
				"resultSet"=>"", "resultPais"=>$resultPais, "resultProv"=>$resultProv, "resultVis"=>$resultVis
		));
		
	}
	
	public function Inserta(){
		session_start();
		//ins_mensajes(_id_tipo_documentos integer, _nombres_mensajes character varying,
		//_apellidos_mensajes character varying, _telefono_mensajes character varying, _celular_mensajes character varying, _email_mensajes character varying, _mensaje_mensajes character varying)
		//ins_mensajes(_id_tipo_documentos integer, _nombres_mensajes character varying, _apellidos_mensajes character varying, _id_pais integer, _id_provincia integer, _telefono_mensajes character varying, _celular_mensajes character varying, _email_mensajes character varying, _mensaje_mensajes character varying)
		$mensajes = new MensajesModel();
		
		if (isset ($_POST["nombres_mensajes"]) && isset ($_POST["apellidos_mensajes"]) && isset ($_POST["telefono_mensajes"])  && isset ($_POST["celular_mensajes"]) && isset ($_POST["email_mensajes"]) && isset ($_POST["mensaje_mensajes"]) )
		{
			$_id_tipo_documentos  = 1;
 			$_nombres_mensajes = $_POST["nombres_mensajes"];
			$_apellidos_mensajes = $_POST["apellidos_mensajes"];
			$_id_pais            = $_POST["paises"];
			$_id_provincia       = $_POST["provincias"];
			$_telefono_mensajes = $_POST["telefono_mensajes"];
			$_celular_mensajes = $_POST["celular_mensajes"];
			$_email_mensajes = $_POST["email_mensajes"];
			$_mensaje_mensajes = $_POST["mensaje_mensajes"];
			
			
		
			$funcion = "ins_mensajes";
				
			$parametros = " '$_id_tipo_documentos', '$_nombres_mensajes', '$_apellidos_mensajes' , '$_id_pais' , '$_id_provincia', '$_telefono_mensajes' , '$_celular_mensajes' , '$_email_mensajes' , '$_mensaje_mensajes' ";
		
			try {
		
				$mensajes->setFuncion($funcion);
				$mensajes->setParametros($parametros);
				$resultado=$mensajes->Insert();
		
				
				//envio el correo
				$para = 'steven@masoft.net';
				$titulo = 'Correo';
				$mensaje = 'Hola, bienvenido a mi sitio web \r\n Saludos'; //Mensaje de 2 lineas
				$cabeceras = 'From: desarrollo@masoft.net' . "\r\n" . //La direccion de correo desde donde supuestamente se envió
						'Reply-To: info@masoft.net' . "\r\n" . //La direccion de correo a donde se responderá (cuando el recepto haga click en RESPONDER)
						'X-Mailer: PHP/' . phpversion();  //información sobre el sistema de envio de correos, en este caso la version de PHP
				
				mail($para, $titulo, $mensaje, $cabeceras);
		
				$this->redirect("QuienesSomos", "index");
					
			}
			catch (Exeption $Ex)
			{
				$this->view("Error",array(
						"resultado"=>$Ex
				));
		
		
			}
				
		
		}
		
			
	}
	
		
	
}
?>