<?php
class PrincipiosActivosController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
	session_start();
	    $composiciones = new ComposicionesModel();
		$resultSet = $composiciones->getAll("nombre_composiciones");
		
		$resultEdit = "";
			
		$resultMenu=array(0=>'--TODOS--',1=>'Nombre Principio');
		
		
		if (isset($_POST["btn_buscar"]))
		{
		
		
			$columnas1 = "composiciones.id_composiciones, 
  composiciones.nombre_composiciones, 
  composiciones.creado, 
  composiciones.modificado, 
  composiciones.buscador, 
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
			 
			$tablas1   = "public.composiciones";
			$where1    = "composiciones.id_composiciones>0";
			$id1 = "composiciones.id_composiciones";
		
		
			$criterio = $_POST["criterio_busqueda"];
			$contenido = $_POST["contenido_busqueda"];
		
		
		
			if ($contenido !="")
			{
		
				$where_0 = "";
				$where_2 = "";
		
				 
		
				switch ($criterio) {
					case 0:
						$where_0 = " ";
						break;
					case 1:
		
						$where_2 = " AND composiciones.nombre_composiciones LIKE '$contenido%'  ";
						break;
						 
				}
		
		
		
				$where_to  = $where1 .  $where_0.  $where_2;
		
		
				$resul = $where_to;
				 
				//Conseguimos todos los usuarios con filtros
				$resultSet=$composiciones->getCondiciones($columnas1 ,$tablas1 ,$where_to, $id1);
		
		
		
		
			}
		}
		
		
		if (isset ($_GET["id_composiciones"])   )
			{
				$_id_composiciones = $_GET["id_composiciones"];
				$where    = "id_composiciones = '$_id_composiciones' "; 
				$resultEdit = $composiciones->getBy($where);
				
			}
		
		$this->view("PrincipiosActivos",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultMenu"=>$resultMenu
			));
		
		
	}
	
	public function index_dos(){
		session_start();
		$composiciones = new ComposicionesModel();
		$resultSet = $composiciones->getAll("nombre_composiciones");
	
		$resultEdit = "";
		$_nombre_composiciones = "";
		
		$_id_composiciones = 0  ;
		
		$_nuevo_composiciones = FALSE;
		
		
		if (isset($_POST["nombre_composiciones"]))
		{
			$_nombre_composiciones = $_POST["nombre_composiciones"];
		}
		
		
		//AGREGO EL NOMBRE Y DEVUELVO EL ID
		if (isset($_POST["btn_agregar_composiciones"]) )
		{
			$_nuevo_composiciones = TRUE;
			$_nombre_composiciones   = strtoupper ( $_POST["nombre_composiciones"] );
			$funcion = "ins_composiciones";
			$parametros = " '$_nombre_composiciones'  ";
			$composiciones->setFuncion($funcion);
			$composiciones->setParametros($parametros);
			$resultado=$composiciones->Insert();
			
			
						
			
		}
		//btn_buscar
		
		if (isset($_POST["btn_buscar"]) )
		{
			
			$_contenido_busqieda   = strtoupper ( $_POST["contenido_busqueda"] );
		
			$where = "buscador = '$_contenido_busqieda' ";
			$resultSet = $composiciones->getBy($where);	
				
		
				
		}
		$res_composiciones=$composiciones->getBy("nombre_composiciones = '$_nombre_composiciones' ");
			
			
		foreach($res_composiciones as $res) {
		
			$_id_composiciones = $res->id_composiciones;
		}
	
		
		
		//editando
		if (isset ($_GET["id_composiciones_edit"])   )
		{
			$_id_composiciones = $_GET["id_composiciones_edit"];
			$where    = "id_composiciones = '$_id_composiciones' ";
			$resultEdit = $composiciones->getBy($where);
		
			
		}
		
		
		//guardamos el distribuidores
		if (isset($_POST["btn_guardar"]) )
		{
			
			$_nombre_composiciones    = strtoupper ( $_POST["nombre_composiciones"]   );
			
			$_categoria_farmacologica_composicion = strtoupper ( $_POST["categoria_farmacologica_composicion"]   ); 
			$_subcategoria_farmacologica_composiciones = strtoupper ( $_POST["subcategoria_farmacologica_composiciones"]   );
			$_indicaciones_uso_composiciones = strtoupper ( $_POST["indicaciones_uso_composiciones"]   );
			$_forma_administracion_composiciones = strtoupper ( $_POST["forma_administracion_composiciones"]   );
			$_efectos_secundarios_composiciones = strtoupper ( $_POST["efectos_secundarios_composiciones"]   );
			$_mecanismo_accion_composiciones = strtoupper ( $_POST["mecanismo_accion_composiciones"]   );
			$_precausiones_composiociones = strtoupper ( $_POST["precausiones_composiociones"]   );
			$_interacciones_composiciones = strtoupper ( $_POST["interacciones_composiciones"]   );
			$_contraindicaciones_composiciones = strtoupper ( $_POST["contraindicaciones_composiciones"]   );
			$_periodo_retirio_composiciones = strtoupper ( $_POST["periodo_retirio_composiciones"]   );
			
			
			$funcion = "ins_composiciones";
			
			$parametros = "'$_nombre_composiciones' , '$_categoria_farmacologica_composicion',	'$_subcategoria_farmacologica_composiciones' , 
						   '$_indicaciones_uso_composiciones' , '$_forma_administracion_composiciones' , '$_efectos_secundarios_composiciones' ,
						   '$_mecanismo_accion_composiciones' , '$_precausiones_composiociones' , '$_interacciones_composiciones' , 
						   '$_contraindicaciones_composiciones' , '$_periodo_retirio_composiciones' ";
			
			$composiciones->setFuncion($funcion);
				
			$composiciones->setParametros($parametros);
				
			$resultado=$composiciones->Insert();
				
			$this->redirect("PrincipiosActivos", "index");
			
		}
		else 
		{
			$this->view("PrincipiosActivosAdd",array(
					"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "id_composiciones"=>$_id_composiciones, "nombre_composiciones"=>$_nombre_composiciones , "nuevo_composiciones"=>$_nuevo_composiciones
			));
			
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
	
		$this->redirect("PrincipiosActivos", "index");
	}
	    
   	
}
?>
