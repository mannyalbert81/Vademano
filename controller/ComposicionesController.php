<?php
class ComposicionesController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	
				//Creamos el objeto usuario
	session_start();
		
		$composiciones = new ComposicionesModel();
		$resultSet = $composiciones->getAll("id_composiciones");
		
		
					
					//Conseguimos todos los usuarios
		//$resultSet=$usuarios->getCondiciones($columnas ,$tablas ,$where, $id);
		$resultEdit = "";
			
		if (isset ($_GET["id_composiciones"])   )
			{
				$_id_composiciones = $_GET["id_composiciones"];
				$where    = "id_composiciones = '$_id_composiciones' "; 
				$resultEdit = $composiciones->getBy($where);
				
			}
			
			
		
		$this->view("Composiciones",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit
			));
		
		
	}
	
	public function Inserta(){
		session_start();
		$composiciones = new ComposicionesModel();
		
		if (isset($_POST["nombre_composiciones"]) )
		{
			
			$_nombre_composiciones = strtoupper ($_POST["nombre_composiciones"]);
			
            
			$funcion = "ins_composiciones";
				
			$parametros = " '$_nombre_composiciones' ";
			$composiciones->setFuncion($funcion);
			
			$composiciones->setParametros($parametros);
			
			
			$resultado=$composiciones->Insert();
			
			$this->redirect("Composiciones", "index");
			
		}
		
			
	}
	
	public function borrarId()
	{
		session_start();
		if(isset($_GET["id_composiciones"]))
		{
			$id_composiciones=(int)$_GET["id_composiciones"];
	
			$composiciones=new ComposicionesModel();
				
			$composiciones->deleteBy(" id_composiciones",$id_composiciones);
				
				
		}
	
		$this->redirect("Composiciones", "index");
	}
	
	
	public function  VistaComposicionesOnline()
	{
			
		session_start();
		//if(isset($_GET["id_laboratorios"]))
		//{
		//$_id_laboratorios = $_GET["laboratorios"];
		$_id_composiciones = 742;
		//	$_nombre_laboratorios = $_GET["nombre_laboratorios"];
		//Creamos el objeto usuario
		$composiciones=new ComposicionesModel();
		//Conseguimos todos los usuarios
	
	
		$columnas = " composiciones.id_composiciones, 
					  composiciones.nombre_composiciones, 
					  composiciones.categoria_farmacologica_composicion, 
					  composiciones.subcategoria_farmacologica_composiciones, 
					  composiciones.indicaciones_uso_composiciones, 
					  composiciones.forma_administracion_composiciones, 
					  composiciones.efectos_secundarios_composiciones, 
					  composiciones.mecanismo_accion_composiciones, 
					  composiciones.precausiones_composiociones, 
					  composiciones.interacciones_composiciones, 
					  composiciones.contraindicaciones_composiciones, 
					  composiciones.periodo_retirio_composiciones";
		$tablas   = "public.composiciones";
		$where    = " composiciones.id_composiciones =  $_id_composiciones ";
		$id       = "composiciones.id_composiciones";
	
		$resultRep = $composiciones->getCondiciones($columnas, $tablas, $where, $id);
	
		$this->view("ComposicionesOnline", array(	"resultRep"=>$resultRep
		));
	
	}
	
    
   	
}
?>
