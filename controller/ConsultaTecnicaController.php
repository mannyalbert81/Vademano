<?php
class ConsultaTecnicaController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
       	
	
	public function  index()
	{
			
		session_start();
		$nombre_fichas="";
		$id_fichas="";
		$mensajes = new MensajesModel();
		$fichas = new FichasModel();
		$fichas_laboratorios= new FichasLaboratoriosModel();
		$laboratorios = new LaboratoriosModel();
		$where = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where);
		
		$paises=new PaisesModel();
		$resultPais = $paises->getAll("nombre_pais");
		
		$provincias=new ProvinciasModel();
		$resultProv = $provincias->getAll("nombre_provincia");
		
		if (isset($_POST["consulta_tecnica"])){
			
		$nombre_fichas= $_POST["nombre_fichas"];	
		$id_fichas= $_POST["id_fichas"];
	
		
		
		$this->view("ConsultaTecnica", array("nombre_fichas"=>$nombre_fichas, "id_fichas" => $id_fichas, "resultPais"=>$resultPais, "resultProv"=>$resultProv, "resultVis"=>$resultVis
		));
		exit ();
		
		}
		
		
		if  (isset($_POST["btn_guardar"])){
			
			$_id_tipo_documentos  = 1;
			$_nombres_mensajes = $_POST["nombres_usuario"];
			$_apellidos_mensajes = $_POST["apellidos_usuario"];
			$_id_pais            = $_POST["paises"];
			$_id_provincia       = $_POST["provincias"];
			$_telefono_mensajes = $_POST["telefono_usuario"];
			$_celular_mensajes = $_POST["celular_usuario"];
			$_email_mensajes = $_POST["correo_usuario"];
			$_mensaje_mensajes = $_POST["mensaje"];
			$id_fichas= $_POST["id_fichas"];
			$_id_laboratorios=0;
			$_email_laboratorios="";
			
			
			$where1    = "id_fichas = '$id_fichas' ";
			$resultGet = $fichas_laboratorios->getBy($where1);
			
			foreach($resultGet as $res)
			{	
				$_id_laboratorios=$res->id_laboratorios;
			}
			
			if($_id_laboratorios>0){
				
				$where10    = "id_laboratorios = '$_id_laboratorios' ";
				$resultGet10 = $laboratorios->getBy($where10);
				
				foreach($resultGet10 as $res)
				{
					$_email_laboratorios=$res->email_laboratorios;
				}
			}
			
		
			$funcion = "ins_mensajes";
			$parametros = " '$_id_tipo_documentos', '$_nombres_mensajes', '$_apellidos_mensajes' , '$_id_pais' , '$_id_provincia', '$_telefono_mensajes' , '$_celular_mensajes' , '$_email_mensajes' , '$_mensaje_mensajes' ";
			$mensajes->setFuncion($funcion);
			$mensajes->setParametros($parametros);
			$resultado=$mensajes->Insert();
			
			
			
			
			
			$cabeceras = "MIME-Version: 1.0 \r\n";
			$cabeceras .= "Content-type: text/html; charset=utf-8 \r\n";
			$cabeceras.= "From: $_email_mensajes \r\n ";
			$destino="$_email_laboratorios";
			$asunto="Consulta Técnica";
			$fecha=date("d/m/y");
			$hora=date("H:i:s");
			//align='center'
			$resumen="
			<table rules='all'>
			<tr style='background:#7acb5a'><td WIDTH='1000' HEIGHT='50'><rigth><img src='http://186.4.203.42:4000/Vademano/view/images/logo_vademano.png' WIDTH='200' HEIGHT='80' /></rigth></td></tr>
			</tabla>
			<p><table rules='all'></p>
			<tr style='background: #FFFFFF;'><td  WIDTH='1000' align='center'><b> TE ENVIARON ESTA CONSULTA</b></td></tr>
			<tr style='background: #FFFFFF;'><td WIDTH='1000' align='justify'><b> Consulta: </b>$_mensaje_mensajes</td></tr>
			</tabla>
			<p><table rules='all'></p>
			<tr style='background:#1C1C1C'><td WIDTH='1000' HEIGHT='50' align='center'><font color='white'>Vademano. - <a href='http://www.vademano.com'><FONT COLOR='#7acb5a'>www.vademano.com</FONT></a> - Copyright © 2017-</font></td></tr>
			</table>";
				
			if (mail("$destino","Consulta Técnica","$resumen","$cabeceras"))
			{
			
					
				$this->view("ConsultaTecnica",array(
						"nombre_fichas"=>$nombre_fichas, "id_fichas" => $id_fichas, "resultado" => "true", "resultPais"=>$resultPais, "resultProv"=>$resultProv, "resultVis"=>$resultVis
				));
					
				exit();
			}
			else
			{
			
					
				$this->view("ConsultaTecnica",array(
						"nombre_fichas"=>$nombre_fichas, "id_fichas" => $id_fichas, "resultado" => "false", "resultPais"=>$resultPais, "resultProv"=>$resultProv, "resultVis"=>$resultVis
				));
					
				exit();
			}
			
		}
		
		
		
			
				
			
	}
	}
	
	
    
   	

?>
