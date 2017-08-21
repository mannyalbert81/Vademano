<?php
class BuscadorController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
	public function index(){
		session_start();
		$resultSet = "";
		$resultEdit = "";
		
		$productos = new FichasModel();
		$resultPro = $productos->getBy("tipo_ficha= 'P'");
	
		$composiciones = new ComposicionesModel();
		$resultCom = $composiciones->getAll("nombre_composiciones");
		
		$especies = new EspeciesModel();
		$resultEsp = $especies->getAll("nombre_especies");
		
		$distribuidores = new DistribuidoresModel();
		$resultDis = $distribuidores->getAll("nombre_distribuidores");
		
		$alimentos = new FichasModel();
		$resultAli = $alimentos->getBy("tipo_ficha= 'A'");
		
		$laboratorios = new LaboratoriosModel();
		$resultLab = $laboratorios->getAll("nombre_laboratorios");
		 
		$formas_administracion = new FormasAdministracionModel();
		$resultFor = $formas_administracion->getAll("nombre_formas_administracion");
		
		
		$buscador = new FichasModel();
		
		$resultCat = $buscador->getAll("clasificacion_farmacologica_fichas");
		
		
		$CantProductos = 0;
		$CantAlimentos = 0;
		$CantPrincipios = 0;
		$CantLaboratorios = 0;
		$CantDistribuidores = 0;
		
		
		$resultAliBus = "";
		$resultPrinBus = "";
		$resultLabBus = "";
		$resultDisBus = "";
		
	
		
		
		$principios_activos = new ComposicionesModel();
		
		if (isset($_POST["btn_buscar"]))
		{
			$_contenido_busqueda =  strtoupper ( $_POST['contenido_busqueda'] );
			
			$where = "buscador LIKE '%$_contenido_busqueda%' ";
			 
			
			$resultSet = $buscador->getBy($where);
			$resultAliBus = $alimentos->getBy($where);
			$resultPrinBus = $principios_activos->getBy($where);			
			$resultLabBus = $laboratorios->getBy($where);
			$resultDisBus = $distribuidores->getBy($where);
			
			
			$CantProductos = count($resultPro);
			$CantAlimentos  =  count($resultAli);
			$CantPrincipios  =  count($resultPrinBus);
			$CantLaboratorios  =  count($resultLabBus);
			$CantDistribuidores  =  count($resultDisBus);
			
			
			
		}
		/* para los filtros*/
		if (isset($_POST["btn_filtrar"]))
		{
// 			para buscar filtro inicial 
			$colIni="f.clasificacion_farmacologica_fichas,f.id_fichas";
// 			,fe.id_especies,fc.id_composiciones,fad.id_formas_administracion,
// 					fl.id_laboratorios";			
			$tabIni="public.fichas f ";			
			$whereIni="1=1";
			
			$clasificacion_farmacologica=isset($_POST["clasificacion_farmacologica"])?$_POST["clasificacion_farmacologica"]:"";
			$especiesId=isset($_POST["id_especies"])?$_POST["id_especies"]:"";
			$composicionesId=isset($_POST["id_composiciones"])?$_POST["id_composiciones"]:"";
			$formasAdministracion=isset($_POST["forma_administracion"])?$_POST["forma_administracion"]:"";
			$laboratoriosId=isset($_POST["id_laboratorios"])?$_POST["id_laboratorios"]:"";

			if ($clasificacion_farmacologica !="0")
			{
				$whereIni .= " AND fichas.clasificacion_farmacologica_fichas = '$clasificacion_farmacologica' ";
			}
			if ($clasificacion_farmacologica !="0")
			{
				$whereIni .= " AND fichas.clasificacion_farmacologica_fichas = '$clasificacion_farmacologica' ";
			}
			if ($clasificacion_farmacologica !="0")
			{
				$whereIni .= " AND fichas.clasificacion_farmacologica_fichas = '$clasificacion_farmacologica' ";
			}
			if ($clasificacion_farmacologica !="0")
			{
				$whereIni .= " AND fichas.clasificacion_farmacologica_fichas = '$clasificacion_farmacologica' ";
			}
			if ($clasificacion_farmacologica !="0")
			{
				$whereIni .= " AND fichas.clasificacion_farmacologica_fichas = '$clasificacion_farmacologica' ";
			}
			
			
			
			$resultSet = $buscador->getBy($where);
			$resultAliBus = $alimentos->getBy($where);
			$resultPrinBus = $principios_activos->getBy($where);
			$resultLabBus = $laboratorios->getBy($where);
			$resultDisBus = $distribuidores->getBy($where);
				
				
			$CantProductos = count($resultPro);
			$CantAlimentos  =  count($resultAli);
			$CantPrincipios  =  count($resultPrinBus);
			$CantLaboratorios  =  count($resultLabBus);
			$CantDistribuidores  =  count($resultDisBus);
				
			
			$where1 = "";
			$where2 = "";
			$where3 = "";
			$where4 = "";
			$where5 = "";
			$where6 = "";
			
			$columnas = "fichas.nombre_fichas, fichas.id_fichas, fichas.clasificacion_farmacologica_fichas";
			
			$tablas = "public.fichas, public.laboratorios, public.distribuidores, 
  						public.fichas_composiciones, public.fichas_dosificacion";
			
			$where = "laboratorios.id_laboratorios = fichas.id_laboratorios AND
  						distribuidores.id_distribuidores = fichas.id_distribuidores AND
  						fichas_composiciones.id_fichas = fichas.id_fichas AND
  						fichas_dosificacion.id_fichas = fichas.id_fichas";
			$id = "fichas.nombre_fichas";
			
			if (isset($_POST["id_especies"]))
			{
	
				
				
				$_id_especies = $_POST["id_especies"];
				if ($_id_especies > 0)
				{
					$where1 = " AND fichas_dosificacion.id_especies = '$_id_especies' ";
				}
			}
			
			
			if (isset($_POST["id_composiciones"]))
			{
				$_id_composiciones = $_POST["id_composiciones"];
				if ($_id_composiciones > 0)
				{
					$where2 = " AND fichas_composiciones.id_composiciones = '$_id_composiciones' ";
				}
			}
			if (isset($_POST["forma_administracion"]))
			{
				$_forma_administracion = $_POST["forma_administracion"];
				if ($_forma_administracion != "0")
				{
					$where3 = " AND fichas.forma_administracion_fichas = '$_forma_administracion' ";
				}
			}
			
			if (isset($_POST["id_laboratorios"]))
			{
				$_id_laboratorios = $_POST["id_laboratorios"];
				if ($_id_laboratorios > 0)
				{
					$where4 = " AND fichas.id_laboratorios = '$_id_laboratorios' ";
				}
			}
			if (isset($_POST["clasificacion_farmacologica"]))
			{
				$_clasificacion_farmacologica = $_POST["clasificacion_farmacologica"];
				if ($_clasificacion_farmacologica > 0)
				{
					$where5 = " AND fichas.clasificacion_farmacologica_fichas = '$_clasificacion_farmacologica' ";
				}
			}
					
			$where_tot = $where . $where1 . $where2 . $where3 . $where4 . $where5 . $where6; 
			
			
			
			$resultSet = $buscador->getCondiciones($columnas, $tablas, $where_tot, $id);
		
			$CantProductos = count($resultSet);
				
		
		
		}
		$this->view("Buscador",array(
				"resultSet"=>$resultSet, "resultEdit" =>$resultEdit, "resultCom"=>$resultCom, "resultEsp"=>$resultEsp, "resultLab"=>$resultLab,
				"CantProductos"=>$CantProductos, "CantAlimentos"=>$CantAlimentos, "CantPrincipios"=>$CantPrincipios,
				"CantLaboratorios"=>$CantLaboratorios, "CantDistribuidores"=>$CantDistribuidores, 
				"resultPrinBus"=>$resultPrinBus, "resultAli"=>$resultAli, "resultPro"=>$resultPro, "resultAliBus"=>$resultAliBus, "resultLabBus"=>$resultLabBus, "resultDisBus"=>$resultDisBus,  "resultFor"=>$resultFor,
				"resultCat"=>$resultCat
			));
		
		
	}
	
	
	public function buscador(){
		session_start();
		$resultSet = "";
		$buscador = new FichasModel();
		if (isset($_POST["btn_buscar"]))
		{
			$_contenido_busqueda =  strtoupper ( $_POST['contenido_busqueda'] );
			$where = "nombre_fichas LIKE '$_contenido_busqueda' ";
			
			$resultSet = $buscador->getBy($where);
			
			
			
		}
		
		$this->view("Buscador",array(
				"resultSet"=>$resultSet
		));
	
	
	}
	
   	
}
?>
