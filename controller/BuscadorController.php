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
		
		
		$resultCat = $buscador->getCondiciones("DISTINCT clasificacion_farmacologica_fichas ", "fichas", "1=1", "clasificacion_farmacologica_fichas");
		
		
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
			$resultPro=array();
// 			para buscar filtro inicial 
			$colIni="f.clasificacion_farmacologica_fichas,f.id_fichas";
// 					
			$tabIni="public.fichas f ";			
			$whereIni="1=1";
			
			$clasificacion_farmacologica=isset($_POST["categoria_farmacologica"])?$_POST["categoria_farmacologica"]:"0";
			$especiesId=isset($_POST["id_especies"])?$_POST["id_especies"]:"0";
			$composicionesId=isset($_POST["id_composiciones"])?$_POST["id_composiciones"]:"0";
			$formasAdministracion=isset($_POST["forma_administracion"])?$_POST["forma_administracion"]:"0";
			$laboratoriosId=isset($_POST["id_laboratorios"])?$_POST["id_laboratorios"]:"0";
			
			if ($clasificacion_farmacologica !="0")
			{
				$whereIni .= " AND f.clasificacion_farmacologica_fichas = '$clasificacion_farmacologica' ";
			}
			if ($especiesId !="0")
			{
				$colIni .=",fe.id_especies";
				$tabIni .=" INNER JOIN public.fichas_especies fe ON fe.id_fichas = f.id_fichas";
				$whereIni .= " AND fe.id_especies = '$especiesId' ";
			}
			if ($composicionesId !="0")
			{
				$colIni .=",fc.id_composiciones";
				$tabIni .=" INNER JOIN public.fichas_composiciones fc ON fc.id_fichas = f.id_fichas";
				$whereIni .= " AND fc.id_composiciones = '$composicionesId' ";
			}
			if ($formasAdministracion !="0")
			{
				$colIni .=",fad.id_formas_administracion";
				$tabIni .=" INNER JOIN public.fichas_formas_administracion fad ON fad.id_fichas = fad.id_fichas";
				$whereIni .= " AND fad.id_formas_administracion = '$formasAdministracion' ";
			}
			if ($laboratoriosId !="0")
			{
				$colIni .=",fl.id_laboratorios";
				$tabIni .=" INNER JOIN public.fichas_laboratorios fl ON fl.id_fichas = f.id_fichas";
				$whereIni .= " AND fl.id_laboratorios = '$laboratoriosId' ";
			}
			
			$dtInicial = $buscador->getCondiciones($colIni, $tabIni, $whereIni, "f.id_fichas");
			
			//para ver la consulta
// 			echo $colIni."<br>".$tabIni."\n".$whereIni;
// 			die();
// 			para los ids
			$fichaConsultadaIds="0,";
			
			if(	!empty($dtInicial))
			{
				foreach ($dtInicial as $res)
				{
					$fichaConsultadaIds.=$res->id_fichas.",";
				}
				$fichaConsultadaIds=trim($fichaConsultadaIds,',');
				$_contenido_busqueda =  strtoupper ( $_POST['contenido_busqueda'] );
				$where = " buscador LIKE '%$_contenido_busqueda%' ";
				
				
				if($fichaConsultadaIds!="0")
				{
					$columnaDis =" DISTINCT (d.*)";
					$tablaDis ="public.fichas_distribuidores fd INNER JOIN public.distribuidores d ON fd.id_distribuidores = d.id_distribuidores";
					$whereDis = "fd.id_fichas  IN(".$fichaConsultadaIds.") AND ".$where;
					
					$resultDisBus = $distribuidores->getCondiciones($columnaDis,$tablaDis,$whereDis,"d.id_distribuidores");
					
					$columnaLab =" DISTINCT l.*";
					$tablaLab ="public.fichas_laboratorios fl INNER JOIN public.laboratorios l ON fl.id_laboratorios = l.id_laboratorios";
					$whereLab = "fl.id_fichas IN(".$fichaConsultadaIds.") AND ".$where;
						
					$resultLabBus = $laboratorios->getCondiciones($columnaLab,$tablaLab,$whereLab,"l.id_laboratorios");
					
					$columnaPrincAct =" DISTINCT comp.*";
					$tablaPrincAct = "public.fichas_composiciones fc INNER JOIN public.composiciones comp ON fc.id_composiciones = comp.id_composiciones";
					$wherePrincAct = " fc.id_fichas IN (".$fichaConsultadaIds.") AND ".$where;
						
					$resultPrinBus = $principios_activos->getCondiciones($columnaPrincAct, $tablaPrincAct, $wherePrincAct, "comp.id_composiciones");
					
					//$resultSet = $buscador->getBy( "id_fichas  IN(".$fichaConsultadaIds.") AND ".$where);
					$resultPro = $productos->getBy(" tipo_ficha= 'P' AND id_fichas  IN(".$fichaConsultadaIds.") AND ".$where);
					//$resultAliBus = $alimentos->getBy( "id_fichas  IN(".$fichaConsultadaIds.") AND ".$where);
					$resultAli = $alimentos->getBy("tipo_ficha= 'A' AND id_fichas  IN(".$fichaConsultadaIds.") AND ".$where);
				}
				
				//tipo_ficha= 'P'
				$CantProductos = count($resultPro);
				$CantAlimentos  =  count($resultAli);
				$CantPrincipios  =  count($resultPrinBus);
				$CantLaboratorios  =  count($resultLabBus);
				$CantDistribuidores  =  count($resultDisBus);
				
				
			}
		
		
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
