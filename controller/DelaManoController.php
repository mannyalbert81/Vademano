<?php
class DelaManoController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
       	
	
	public function  index()
	{
			
		session_start();
		$industria = new IndustriaModel();
		$resultEdit="";
		$resultInd="";
		$_id_industria=0;
		
		$columnas = "*";
		$tablas   = "public.industria";
		$where    = "industria.id_industria>0";
		$id = "industria.id_industria";
		$resultInd=$industria->getCondiciones($columnas ,$tablas ,$where, $id);
		
		if (isset ($_GET["id_industria_editar"])   )
		{
			$_id_industria = $_GET["id_industria_editar"];
			$where1    = "id_industria = '$_id_industria' ";
			$resultEdit = $industria->getBy($where1);
		
			
			
		}
		
		
		if(isset($_GET["id_industria_borrar"]))
		{
			$id_industria=(int)$_GET["id_industria_borrar"];
			$industria = new IndustriaModel();
			$industria->deleteBy("id_industria",$id_industria);
		
			$this->redirect("DelaMano", "index");
		}
	
		
		if (isset($_POST["btn_guardar"]) )
		{
		
			$_descripcion_industria = $_POST["descripcion_industria"];
				
			
			if ($_FILES['archivo']['tmp_name']!="")
			{
		
				
				$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/industria/';
				$nombre = $_FILES['archivo']['name'];
				$tipo = $_FILES['archivo']['type'];
				$tamano = $_FILES['archivo']['size'];
				move_uploaded_file($_FILES['archivo']['tmp_name'],$directorio.$nombre);
				$data = file_get_contents($directorio.$nombre);
				$pdf = pg_escape_bytea($data);
					
				$funcion = "ins_industria";
				$parametros = " '$_descripcion_industria' ,'{$pdf}' ";
				$industria->setFuncion($funcion);
				$industria->setParametros($parametros);
				$resultado=$industria->Insert();
					
				
				$this->redirect("DelaMano", "index");
				
			}
			
			
		}
		
		if (isset($_POST["btn_actualizar"]) )
		{
				
			$_descripcion_industria = $_POST["descripcion_industria"];
			$_id_industria =  $_POST["id_industria"];
		
			if($_id_industria>0){
		
				if ($_FILES['archivo']['tmp_name']!="")
				{
		
		
				$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/industria/';
				$nombre = $_FILES['archivo']['name'];
				$tipo = $_FILES['archivo']['type'];
				$tamano = $_FILES['archivo']['size'];
				move_uploaded_file($_FILES['archivo']['tmp_name'],$directorio.$nombre);
				$data = file_get_contents($directorio.$nombre);
				$pdf = pg_escape_bytea($data);
					
						
					$colval = " descripcion_industria = '$_descripcion_industria',  pdf = '$pdf' ";
					$tabla = "industria";
					$where = "id_industria = '$_id_industria'";
					$resultado=$industria->UpdateBy($colval, $tabla, $where);
						
				}else{
						
					$colval = " descripcion_industria = '$_descripcion_industria'";
					$tabla = "industria";
					$where = "id_industria = '$_id_industria'";
					$resultado=$industria->UpdateBy($colval, $tabla, $where);
						
				}
		
				$this->redirect("DelaMano", "index");
		
			}
		}
				
		
		
		
		$this->view("ConlaIndustria", array("resultEdit"=>$resultEdit, "resultInd"=>$resultInd
		));
	
		
		
			
			
	}
	
	public function  index2()
	{
			

		session_start();
		$investigacion = new InvestigacionModel();
		$resultEdit="";
		$resultInv="";
		$_id_industria=0;
		
		$columnas = "*";
		$tablas   = "public.investigacion";
		$where    = "investigacion.id_investigacion>0";
		$id = "investigacion.id_investigacion";
		$resultInv=$investigacion->getCondiciones($columnas ,$tablas ,$where, $id);
		
		if (isset ($_GET["id_investigacion_editar"])   )
		{
			$_id_investigacion = $_GET["id_investigacion_editar"];
			$where1    = "id_investigacion = '$_id_investigacion' ";
			$resultEdit = $investigacion->getBy($where1);
		
		}
		
		
		if(isset($_GET["id_investigacion_borrar"]))
		{
			$id_investigacion=(int)$_GET["id_investigacion_borrar"];
			$investigacion =  new InvestigacionModel();
			$investigacion->deleteBy("id_investigacion",$id_investigacion);
		
			$this->redirect("DelaMano", "index2");
		}
		
		
		if (isset($_POST["btn_guardar"]) )
		{
		
			$_descripcion_investigacion = $_POST["descripcion_investigacion"];
			$_fecha_investigacion = $_POST["fecha_investigacion"];
		
				
			if ($_FILES['archivo']['tmp_name']!="")
			{
		
		
				$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/investigacion/';
				$nombre = $_FILES['archivo']['name'];
				$tipo = $_FILES['archivo']['type'];
				$tamano = $_FILES['archivo']['size'];
				move_uploaded_file($_FILES['archivo']['tmp_name'],$directorio.$nombre);
				$data = file_get_contents($directorio.$nombre);
				$pdf = pg_escape_bytea($data);
					
				$funcion = "ins_investigacion";
				$parametros = " '$_descripcion_investigacion' ,'{$pdf}','$_fecha_investigacion' ";
				$investigacion->setFuncion($funcion);
				$investigacion->setParametros($parametros);
				$resultado=$investigacion->Insert();
					
		
				$this->redirect("DelaMano", "index2");
		
			}
				
				
		}
		
		if (isset($_POST["btn_actualizar"]) )
		{
		
			$_descripcion_investigacion = $_POST["descripcion_investigacion"];
			$_fecha_investigacion = $_POST["fecha_investigacion"];
			$_id_investigacion =  $_POST["id_investigacion"];
		
			if($_id_investigacion>0){
		
				if ($_FILES['archivo']['tmp_name']!="")
				{
		
		
					$directorio = $_SERVER['DOCUMENT_ROOT'].'/Vademano/investigacion/';
					$nombre = $_FILES['archivo']['name'];
					$tipo = $_FILES['archivo']['type'];
					$tamano = $_FILES['archivo']['size'];
					move_uploaded_file($_FILES['archivo']['tmp_name'],$directorio.$nombre);
					$data = file_get_contents($directorio.$nombre);
					$pdf = pg_escape_bytea($data);
						
		
					$colval = " descripcion_investigacion = '$_descripcion_investigacion',  pdf = '$pdf', fecha_investigacion= '$_fecha_investigacion' ";
					$tabla = "investigacion";
					$where = "id_investigacion = '$_id_investigacion'";
					$resultado=$investigacion->UpdateBy($colval, $tabla, $where);
		
				}else{
		
					$colval = " descripcion_investigacion = '$_descripcion_investigacion', fecha_investigacion= '$_fecha_investigacion' ";
					$tabla = "investigacion";
					$where = "id_investigacion = '$_id_investigacion'";
					$resultado=$investigacion->UpdateBy($colval, $tabla, $where);
		
				}
		
				$this->redirect("DelaMano", "index2");
		
			}
		}
		
		
	
		
		
			
	
		$this->view("ConlaInvestigacion", array("resultEdit"=>$resultEdit, "resultInv"=>$resultInv
		));
	
	
	
			
			
	}
	
	public function  index3()
	{
		session_start();
		$industria = new IndustriaModel();
		$fichas = new FichasModel();
		$where10 = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where10);
		$resultInd="";
		
		$resultMenu=array(0=>'--TODOS--',1=>'Descripción');
		
		$columnas = "*";
		$tablas   = "public.industria";
		$where    = "industria.id_industria>0";
		$id = "industria.id_industria";
		$resultInd=$industria->getCondiciones($columnas ,$tablas ,$where, $id);
		
		
		if (isset($_POST["btn_buscar"]))
		{
			$columnas1 = "*";
			$tablas1   = "public.industria";
			$where1    = "industria.id_industria>0";
			$id1       = "industria.id_industria";
				
				
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
		
						$where_2 = " AND  industria.descripcion_industria LIKE '$contenido%'  ";
						break;
					
				}
		
				$where_to  = $where1 .  $where_0.  $where_2;
				$resultInd=$industria->getCondiciones($columnas1 ,$tablas1 ,$where_to, $id1);
		
			}
		}
		
		
		
		$this->view("CatalogoIndustria", array("resultInd"=>$resultInd, "resultMenu"=>$resultMenu, "resultVis"=>$resultVis
		));
	}
	
	
	public function  index4()
	{
		session_start();
		$investigacion = new InvestigacionModel();
		
		$resultInv="";
		
		$resultMenu=array(0=>'--TODOS--',1=>'Descripción', 2=>'Fecha');
		$fichas = new FichasModel();
		$where11 = "nombre_fichas LIKE '%%' ORDER by consultas_fichas DESC LIMIT 4";
		$resultVis = $fichas->getBy($where11);
		
		$columnas = "*";
		$tablas   = "public.investigacion";
		$where    = "investigacion.id_investigacion>0";
		$id = "investigacion.id_investigacion";
		$resultInv=$investigacion->getCondiciones($columnas ,$tablas ,$where, $id);
	
		if (isset($_POST["btn_buscar"]))
		{
			
			
			$columnas1 = "*";
			$tablas1   = "public.investigacion";
			$where1    = "investigacion.id_investigacion>0";
			$id1       = "investigacion.id_investigacion";
		
		
			$criterio = $_POST["criterio_busqueda"];
			$contenido = $_POST["contenido_busqueda"];
			$contenido1 = $_POST["contenido_busqueda1"];
		
		
			$where_0 = "";
			$where_2 = "";
			$where_3 = "";
			
		if(!empty($contenido))
			{
				
		
				switch ($criterio) {
					case 0:
						$where_0 = " ";
						break;
					case 1:
		
						$where_2 = " AND  investigacion.descripcion_investigacion LIKE '$contenido%'  ";
						break;
						
						
							
				}
				
				
		
			
		
			}
			
			if(!empty($contenido1))
			{
				switch ($criterio) {
					case 0:
						$where_0 = " ";
						break;
					
			
					case 2:
			
						$where_3 = " AND  investigacion.fecha_investigacion = '$contenido1'";
						break;
							
				}
				
				
				
			}
			
			$where_to  = $where1 .  $where_0.  $where_2.  $where_3;
			$resultInv=$investigacion->getCondiciones($columnas1 ,$tablas1 ,$where_to, $id1);
			
		}
		
		
		$this->view("CatalogoInvestigacion", array("resultInv"=>$resultInv, "resultMenu"=>$resultMenu, "resultVis"=>$resultVis
		));
	}
	

}
	
?>
