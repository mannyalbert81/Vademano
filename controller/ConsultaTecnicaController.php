<?php
class ConsultaTecnicaController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    

	
        	
	
	public function  index()
	{
			
		session_start();
		$nombre_fichas='';
		if (isset($_POST["consulta_tecnica"])){
			
		$nombre_fichas= $_POST["nombre_fichas"];	
	
		
		}
		
		




		$this->view("ConsultaTecnica", array("nombre_fichas"=>$nombre_fichas
		));
		
	
	}
	}
	
	
    
   	

?>
