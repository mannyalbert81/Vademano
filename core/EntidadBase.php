<?php
class EntidadBase{
    private $table;
    private $db;
    private $conectar;
    
    public function __construct($table) {
        $this->table=(string) $table;
        
        require_once 'Conectar.php';
        $this->conectar=new Conectar();
        $this->db=$this->conectar->conexion();

        $this->fluent=$this->getConetar()->startFluent();
        $this->con=$this->getConetar()->conexion();
        
    }
    
    public function fluent(){
    	return $this->fluent;
    }
    
    public function con(){
    	return $this->con;
    }
    
    
    public function getConetar(){
        return $this->conectar;
    }
    
    public function db(){
        return $this->db;
    }
    
    
    
    public function getAll($id){
        
    	$query=pg_query($this->con, "SELECT * FROM $this->table ORDER BY $id ASC");
    	$resultSet = array();
    	
           while ($row = pg_fetch_object($query)) {
             $resultSet[]=$row;
           }
        return $resultSet;
    }
    
 
    
    
    public function getById($id){
    	
    	$query=pg_query($this->con, "SELECT * FROM $this->table WHERE id=$id");
        $resultSet = array();
    	
           while ($row = pg_fetch_object($query)) {
             $resultSet[]=$row;
           }
        return $resultSet;
    }
    
    public function getBy($where){
    	
    	$query=pg_query($this->con, "SELECT * FROM $this->table WHERE   $where ");
        $resultSet = array();
    	
           while ($row = pg_fetch_object($query)) {
             $resultSet[]=$row;
           }
        return $resultSet;
    }
    
    public function deleteById($id){
    	
        $query=pg_query($this->con,"DELETE FROM $this->table WHERE $id"); 
        return $query;
    }
    
    public function deleteBy($column,$value){

    	try 
    	{
    		$query=pg_query($this->con,"DELETE FROM $this->table WHERE $column='$value' ");
    	}
    	catch (Exeption $Ex)
    	{
    		
    		
    	} 
    	
        return $query;
    }
    

    public function getCondiciones($columnas ,$tablas , $where, $id){
    	
    	$query=pg_query($this->con, "SELECT $columnas FROM $tablas WHERE $where ORDER BY $id  ASC");
    	$resultSet = array();
    	while ($row = pg_fetch_object($query)) {
    		$resultSet[]=$row;
    	}
    
    	return $resultSet;
    }
    
    public function getCondicionesOrd($columnas ,$tablas , $where, $id ,$orden='ASC'){
    	
    	$query=pg_query($this->con, "SELECT $columnas FROM $tablas WHERE $where ORDER BY $id $orden");
    	$resultSet = array();
    	while ($row = pg_fetch_object($query)) {
    		$resultSet[]=$row;
    	}
    
    	return $resultSet;
    }
    
    
    public function UpdateBy($colval ,$tabla , $where){
    	try 
    	{ 
    	     $query=pg_query($this->con, "UPDATE $tabla SET  $colval   WHERE $where ");
    	     
    	}
    	catch (Exeption  $Ex)
    	{
    		
    		
    	}
    }
    
    
    
    public function getByPDF($columnas, $tabla , $where){
    
    	if ($tabla == "")
    	{
    		$query=pg_query($this->con, "SELECT $columnas FROM $this->table WHERE   $where ");
    	}
    	else
    	{
    		$query=pg_query($this->con, "SELECT $columnas FROM $tabla WHERE   $where ");
    	}
    	
    	return $query;
    }
    
    public function getCondicionesPDF($columnas ,$tablas , $where, $id){
    	 
    	$query=pg_query($this->con, "SELECT $columnas FROM $tablas WHERE $where ORDER BY $id  ASC");
    
    	return $query;
    }
    
    
    
    /*
     * Aqui podemos montarnos un monton de métodos que nos ayuden
     * a hacer operaciones con la base de datos de la entidad
     */
    
	public function encrypt($string) {
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
    
	public function decrypt($string) {
		$key = "Romina";
		$result = '';
	   $string = base64_decode($string);
	   for($i=0; $i<strlen($string); $i++) {
	      $char = substr($string, $i, 1);
	      $keychar = substr($key, ($i % strlen($key))-1, 1);
	      $char = chr(ord($char)-ord($keychar));
	      $result.=$char;
	   }
	   return $result;
	}
    
    public function registrarSesion($id_usuario, $usuario_usuario, $id_rol, $nombres_usuario, $correo_usuario, $ip_usuario)
    {
    	session_start();
    	
    	$_SESSION["id_usuario"]=$id_usuario;
    	$_SESSION["usuario_usuario"]=$usuario_usuario;
    	$_SESSION["id_rol"]=$id_rol;
    	$_SESSION["nombres_usuario"]=$nombres_usuario;
    	$_SESSION["correo_usuario"]=$correo_usuario;
    	$_SESSION["ip_usuario"]=$ip_usuario; 	

    	if (substr($ip_usuario, 0, 3) == "192" )
    	{
    		$_SESSION["tipo_usuario"]="usuario_local";
    	}
    	else   ///usuarios externo 
    	{
    		
    		$_SESSION["tipo_usuario"]="usuario_externo";
    	}
    		
    	
    }
    
    
    public function getPermisosVer($where){
    	 
    	$query=pg_query($this->con, "SELECT permisos_rol.ver_permisos_rol FROM public.controladores, public.permisos_rol WHERE  controladores.id_controladores = permisos_rol.id_controladores AND  ver_permisos_rol = 'TRUE'   AND   $where ");
    	$resultSet = array();
    	while ($row = pg_fetch_object($query)) {
    		$resultSet[]=$row;
    	}
    
    	return $resultSet;
    }

    
    public function getPermisosEditar($where){
    
    	$query=pg_query($this->con, "SELECT permisos_rol.editar_permisos_rol FROM public.controladores, public.permisos_rol WHERE  controladores.id_controladores = permisos_rol.id_controladores AND  editar_permisos_rol = 'TRUE'   AND   $where ");
    	$resultSet = array();
    	while ($row = pg_fetch_object($query)) {
    		$resultSet[]=$row;
    	}
    
    	return $resultSet;
    }
    

    public function getPermisosBorrar($where){
    
    	$query=pg_query($this->con, "SELECT permisos_rol.borrar_permisos_rol FROM public.controladores, public.permisos_rol WHERE  controladores.id_controladores = permisos_rol.id_controladores AND  borrar_permisos_rol = 'TRUE'   AND   $where ");
    	$resultSet = array();
    	while ($row = pg_fetch_object($query)) {
    		$resultSet[]=$row;
    	}
    
    	return $resultSet;
    }
    
    
    public  function  SendMail($para, $titulo, $listaCartones)
    {
    	// Varios destinatarios
    	$para  = 'desarrollo@masoft.net' . ', '; // atención a la coma
    	$para .= 'manuel@masoft.net';
    	
    	// título
    	$título = 'Recordatorio de cumpleaños para Agosto';
    	
    	// mensaje
    	$mensaje_cabeza = '
				<html>
				<head>
				  <title>Recordatorio de cumpleaños para Agosto</title>
				</head>
				<body>
				  <p>¡Estos son los cumpleaños para Agosto!</p>
				  <table>
				    <tr>
				      <th>Número Carton</th>
				    </tr>';
    	
    	$mensaje_detalle = "";
    		for ($i=0;$i<count($listaCartones);$i++)
			
              {
	    		  $mensaje_detalle .=  '<tr> <td>'. $listaCartones[$i] .'   </td></tr>' ;
              }
				  
		$mensaje_pie =  '</table>
				</body>
				</html>
				';
    	$mensaje = $mensaje_cabeza . $mensaje_detalle . $mensaje_pie;
    	// Para enviar un corre=o HTML, debe establecerse la cabecera Content-type
    	$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
    	$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
    	
    	// Cabeceras adicionales
    	$cabeceras .= 'To: Manuel <desarrollo@masoft.net>, Kelly <manuel@masoft.net>' . "\r\n";
    	$cabeceras .= 'From: aDocument <info@masoft.net>' . "\r\n";
    	
    	// Enviarlo
    	mail($para, $título, $mensaje, $cabeceras );
    	
    	
    	
    }
    
    function getRealIP() {
    	if (!empty($_SERVER['HTTP_CLIENT_IP']))
    		return $_SERVER['HTTP_CLIENT_IP'];
    	 
    	if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
    		return $_SERVER['HTTP_X_FORWARDED_FOR'];
    	 
    	return $_SERVER['REMOTE_ADDR'];
    }
    
    
    
    
    public function ActualizaFichaService($resultActual)
    {
    
    
    $fichas_laboratorios= new FichasLaboratoriosModel();
	$fichas = new FichasModel();
	$direcciones = new DireccionesModel();
	$fichas_composiciones = new FichasComposicionesModel();
	$fichas_dosificacion = new FichasDosificacionModel();
	
	$fichas_especies = new FichasEspeciesModel();
	$fichas_formas_administracion = new FichasFormasAdministracionModel();
	$fichas_distribuidores = new FichasDistribuidoresModel();
	
	
	$fichas_service = new FichaServiceModel();
	
	$nombre_distribuidores='';
	$nombre_laboratorios='';
    
    	if(!empty($resultActual)){
    		foreach($resultActual as $res)
    		{
    			$_id_fichas=$res->id_fichas;
    			$_nombre_fichas=$res->nombre_fichas;
    			$_encabezado_tabla_fichas=$res->encabezado_tabla_fichas;
    			$_accion_terapeutica_fichas=$res->accion_terapeutica_fichas;
    			$_clasificacion_farmacologica_fichas=$res->clasificacion_farmacologica_fichas;
    			$_forma_terapeutica_fichas=$res->forma_terapeutica_fichas;
    			$_indicaciones_uso_fichas=$res->indicaciones_uso_fichas;
    			$_interacciones_fichas=$res->interacciones_fichas;
    			$_contraindicaciones_fichas=$res->contraindicaciones_fichas;
    			$_periodo_retiro_fichas=$res->periodo_retiro_fichas;
    			$_advertencias_fichas=$res->advertencias_fichas;
    			$_presentacion_fichas=$res->presentacion_fichas;
    			$_registro_sanitario_fichas=$res->registro_sanitario_fichas;
    			$_id_fichas_fotos=$res->id_fichas_fotos;
    			$_consultas_fichas=$res->consultas_fichas;
    			$_buscador=$res->buscador;
    			$_mecanismo_accion_fichas=$res->mecanismo_accion_fichas;
    			$_efectos_colaterales_fichas=$res->efectos_colaterales_fichas;
    			$_conservacion_fichas=$res->conservacion_fichas;
    			$_encabezado_dosificacion_fichas=$res->encabezado_dosificacion_fichas;
    			$_tipo_ficha=$res->tipo_ficha;
    			
    			$tablaLab="";
    			$tablaDis="";
    			$tablaAdministracion="";
    			$tablaComp="";
    			$tablaDosi="";
    			$_buscador_final="";
    			
    			
    			$advertencias_html = "";
    			try{
    				$arrayAdvertencias = explode(".",$_advertencias_fichas);
    				if(!empty($arrayAdvertencias))
    				{
    					for($i=0; $i<count($arrayAdvertencias)-1; $i++)
    					{
    						$advertencias_html.="&nbsp;";
    						$advertencias_html.=trim($arrayAdvertencias[$i]).".";
    						$advertencias_html.="<br>";
    					}
    						
    				}
    			}catch(Execption $e)
    			{
    				$advertencias_html="";
    			}
    				
    			
    			$_periodo_retiro_fichas_html = "";
    			try{
    				$arrayPeriodo_Retiro = explode(".",$_periodo_retiro_fichas);
    				if(!empty($arrayPeriodo_Retiro))
    				{
    					for($i=0; $i<count($arrayPeriodo_Retiro)-1; $i++)
    					{
    						$_periodo_retiro_fichas_html.="&nbsp;";
    						$_periodo_retiro_fichas_html.=trim($arrayPeriodo_Retiro[$i]).".";
    						$_periodo_retiro_fichas_html.="<br>";
    					}
    			
    				}
    			}catch(Execption $e)
    			{
    				$_periodo_retiro_fichas_html="";
    			}
    			
    			
    			$presentaciones_html = "";
    			try{
    				$arrayPres = explode(".",$_presentacion_fichas);
    				if(!empty($arrayPres))
    				{
    					for($i=0; $i<count($arrayPres)-1; $i++)
    					{
    						$presentaciones_html.="&nbsp;";
    						$presentaciones_html.=trim($arrayPres[$i]).".";
    						$presentaciones_html.="<br>";
    					}
    			
    				}
    			}catch(Execption $e)
    			{
    				$presentaciones_html="";
    			}
    				
    			
    			
    			
    			
    			$columnasLab = "fichas_laboratorios.id_laboratorios,
					  laboratorios.nombre_laboratorios,
					  	 laboratorios.telefono_persona_contacto_laboratorios,
  							 laboratorios.email_laboratorios,
  							 laboratorios.web_laboratorios";
    			$tablasLab   = "public.laboratorios, public.fichas_laboratorios";
    			$whereLab    = "fichas_laboratorios.id_laboratorios = laboratorios.id_laboratorios
    			AND fichas_laboratorios.id_fichas = '$_id_fichas'";
    			$idlab = "fichas_laboratorios.id_laboratorios";
    			$resultLab=$fichas_laboratorios->getCondiciones($columnasLab, $tablasLab, $whereLab, $idlab);
    			 
    			
    			if(!empty($resultLab))
    			{
    						
    				foreach($resultLab as $res)
    				{
    					$id_laboratorios =$res->id_laboratorios;
    					$nombre_laboratorios =$res->nombre_laboratorios;
    			
    					$columnaslabDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
    			
    					$tablaslabDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
    			
    					$wherelabDir    = "d.id_laboratorios = '$id_laboratorios'";
    					$idlabDir = "d.id_direcciones";
    			
    					$dtLabDireccion=$direcciones->getCondiciones($columnaslabDir, $tablaslabDir, $wherelabDir, $idlabDir);
    			
    			
    					if(!empty($dtLabDireccion)){
    			
    						$tablaLab="<table>";
    						$tablaLab.="<tr>";
    						$tablaLab.="<td><font size=2>";
    						$tablaLab.="";
    			
    						foreach($dtLabDireccion as $resd)
    						{
    							$tablaLab.="<b>CIUDAD: </b>";
    							$tablaLab.=$resd->nombre_canton;
    							$tablaLab.="<br>";
    							$tablaLab.="";
    							$tablaLab.="<b>DIRECCIÓN: </b>";
    							$tablaLab.=$resd->direccion_direcciones;
    							$tablaLab.="<br>";
    							$tablaLab.="";
    							$tablaLab.="<b>TELÉFONO: </b> (593-2)&nbsp;";
    							$tablaLab.=$resd->cod_telefono;
    							$tablaLab.=$resd->telefono_direcciones;
    							$tablaLab.="<br>";
    							$tablaLab.="";
    							$tablaLab.="<b>CELULAR: </b> (593-2)&nbsp;";
    							$tablaLab.=$resd->celular_direcciones;
    							$tablaLab.="<br>";
    							$tablaLab.="<br>";
    			
    						}
    						$tablaLab.="</font></td>";
    						$tablaLab.="</tr>";
    						$tablaLab.="</table>";
    			
    					}
    			
    				}
    					
    			}
    			
    			
    			$columnas_dis = "fichas_distribuidores.id_distribuidores,
					  distribuidores.nombre_distribuidores,
					  	 distribuidores.telefono_persona_contacto_distribuidores,
  							 distribuidores.email_distribuidores,
  							 distribuidores.web_distribuidores";
    			$tablas_dis   = "public.distribuidores,
  							 public.fichas_distribuidores";
    			$where_dis    = "fichas_distribuidores.id_distribuidores = distribuidores.id_distribuidores
    			AND fichas_distribuidores.id_fichas = '$_id_fichas'	";
    			$id_dis = "fichas_distribuidores.id_distribuidores";
    			
    			$resultDistri = $fichas_distribuidores->getCondiciones($columnas_dis, $tablas_dis, $where_dis, $id_dis);
    			 
    			if(!empty($resultDistri))
    			{	
    				foreach($resultDistri as $res)
    				{
    					$id_distribuidores =$res->id_distribuidores;
    					$nombre_distribuidores =$res->nombre_distribuidores;
    					 
    					$columnaslabDir = "d.direccion_direcciones,d.telefono_direcciones,d.celular_direcciones,
						           ca.nombre_canton,pr.cod_telefono";
    			
    					$tablaslabDir   = "public.direcciones d		INNER JOIN public.canton ca
								ON d.id_canton = ca.id_canton INNER JOIN public.codigos_provincias pr
								ON pr.id_provincia = ca.id_provincias";
    			
    					$wherelabDir    = "d.id_distribuidores = '$id_distribuidores'";
    					$idlabDir = "d.id_direcciones";
    			
    					$dtLabDireccion=$direcciones->getCondiciones($columnaslabDir, $tablaslabDir, $wherelabDir, $idlabDir);
    			
    			
    					if(!empty($dtLabDireccion)){
    			
    						$tablaDis="<table>";
    						$tablaDis.="<tr>";
    						$tablaDis.="<td><font size=2>";
    						$tablaDis.="";
    			
    						foreach($dtLabDireccion as $resd)
    						{
    							$tablaDis.="<b>CIUDAD: </b>";
    							$tablaDis.=$resd->nombre_canton;
    							$tablaDis.="<br>";
    							$tablaLab.="";
    							$tablaDis.="<b>DIRECCIÓN: </b>";
    							$tablaDis.=$resd->direccion_direcciones;
    							$tablaDis.="<br>";
    							$tablaDis.="";
    							$tablaDis.="<b>TELÉFONO: </b> (593-2)&nbsp;";
    							$tablaDis.=$resd->cod_telefono;
    							$tablaDis.=$resd->telefono_direcciones;
    							$tablaDis.="<br>";
    							$tablaDis.="";
    							$tablaDis.="<b>CELULAR: </b> (593-2)&nbsp;";
    							$tablaDis.=$resd->celular_direcciones;
    							$tablaDis.="<br>";
    							$tablaDis.="<br>";
    				    
    						}
    						$tablaDis.="</font></td>";
    						$tablaDis.="</tr>";
    						$tablaDis.="</table>";
    				   
    					}
    				}
    				 
    			}
    			
    			
    			
    			$columnasAdm =  "fia.id_fichas_formas_administracion,
   					fa.nombre_formas_administracion";
    			$tablasAdm = "public.fichas_formas_administracion fia INNER JOIN public.formas_administracion fa
   					ON fia.id_formas_administracion = fa.id_formas_administracion";
    			$whereAdm  = "fia.id_fichas = '$_id_fichas'";
    			$id_adm     = "fia.id_fichas_formas_administracion";
    			
    			
    			$dtAdministracion=$fichas_formas_administracion->getCondiciones($columnasAdm, $tablasAdm, $whereAdm, $id_adm);
    			$nombre_formas_administracion="";
    			if(!empty($dtAdministracion))
    			{
    				$nombre_formas_administracion="";
    				foreach($dtAdministracion as $res)
    				{
    					
    					$nombre_formas_administracion .=$res->nombre_formas_administracion;
    					
    					$tablaAdministracion.=" &nbsp;&nbsp;&nbsp;- &nbsp;";
    					$tablaAdministracion.=$res->nombre_formas_administracion;
    					$tablaAdministracion.="<br>";
    				}
    			}
    			
    			$columnasComp = "co.nombre_composiciones,
  							fc.cantidad_fichas_composiciones, um.nombre_unidades_medida";
    			$tablasComp   = "public.fichas_composiciones fc
				INNER JOIN public.composiciones co
				ON co.id_composiciones = fc.id_composiciones
				INNER JOIN public.unidades_medida um
			    ON  fc.id_unidades_medida = um.id_unidades_medida";
    			
    			$whereComp    = "fc.id_fichas = '$_id_fichas'";
    			$idComp	  = "fc.id_fichas_composiciones";
    			
    			
    			
    			$dtComposicion = $fichas_composiciones->getCondiciones($columnasComp, $tablasComp, $whereComp, $idComp);
    			$nombre_composiciones="";
    			if (!empty($dtComposicion))
    			{
    				$tablaComp ="<table border=1>";
    				$tablaComp.="<tr>";
    				$tablaComp.="<th><font size=2>";
    				$tablaComp.="<b>Principio Activo</b>";
    				$tablaComp.="</font></th>";
    				$tablaComp.="<th><font size=2>";
    				$tablaComp.="<b>Dosis</b>";
    				$tablaComp.="</font></th>";
    				$tablaComp.="<th><font size=2>";
    				$tablaComp.="<b>U/M</b>";
    				$tablaComp.="</font></th>";
    				$tablaComp.="</tr>";
    					
    				$nombre_composiciones="";
    				
    				foreach($dtComposicion as $res)
    				{
    					$nombre_composiciones .=$res->nombre_composiciones.' ';
    					
    					$tablaComp.="<tr>";
    					$tablaComp.="<td><font size=2>";
    					$tablaComp.=$res->nombre_composiciones;
    					$tablaComp.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>";
    					$tablaComp.="<td><font size=2>";
    					$tablaComp.=$res->cantidad_fichas_composiciones;
    					$tablaComp.="</font></td>";
    					$tablaComp.="<td><font size=2>";
    					$tablaComp.=$res->nombre_unidades_medida;
    					$tablaComp.="</font></td>";
    					$tablaComp.="</tr>";
    					
    					
    				}
    				$tablaComp.="</table>";
    					
    			}
    			
    			
    			$columnasDosi="e.nombre_especies, d.dosis_fichas_dosificacion,d.id_fichas, d.id_especies";
    			$tablasDosi = " public.fichas_dosificacion d INNER JOIN public.especies e ON d.id_especies = e.id_especies";
    			$whereDosi = "d.id_especies = e.id_especies
    			AND  d.id_fichas = '$_id_fichas'";
    			$idDosi=" d.id_fichas_dosificacion";
    			
    		$dtDosificacion = $fichas_dosificacion->getCondiciones($columnasDosi, $tablasDosi, $whereDosi, $idDosi);
   			
   			if (!empty($dtDosificacion))
   			{
   				$tablaDosi = "<table border=1>";
   				$tablaDosi.= "<tr>";
   				$tablaDosi.="<th><font size=2>";
   				$tablaDosi.="<b>Nombre Especie</b>";
   				$tablaDosi.="</font></th>";
   				$tablaDosi.="<th><font size=2>";
   				$tablaDosi.="<b>Dosis</b>";
   				$tablaDosi.="</font></th>";
   				$tablaDosi.="</tr>";
   					
   				foreach($dtDosificacion as $resdo)
   				{
   					$tablaDosi.="<tr>";
   					$tablaDosi.="<td><font size=2>";
   					$tablaDosi.=$resdo->nombre_especies;
   					$tablaDosi.="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>";
   					$tablaDosi.="<td><font size=2>";
   					$tablaDosi.=$resdo->dosis_fichas_dosificacion;
   					$tablaDosi.="</font></td>";
   					$tablaDosi.="</tr>";
   				}
   				
   				$tablaDosi.="</table>";
   			}
    			
   			
   			$_buscador_final= $_buscador.' '.$nombre_laboratorios.' '.$nombre_distribuidores.' '.$nombre_formas_administracion.' '.$nombre_composiciones;
   			
   			
    			$funcion = "ins_fichas_service";
    			$parametros = " '$_id_fichas', '$_nombre_fichas', '$_encabezado_tabla_fichas',
    			'$_accion_terapeutica_fichas',
    			'$_clasificacion_farmacologica_fichas', '$_forma_terapeutica_fichas',
    			'$_indicaciones_uso_fichas',
    			'$_interacciones_fichas', '$_contraindicaciones_fichas',
    			'$_periodo_retiro_fichas_html', '$advertencias_html',
    			'$presentaciones_html', '$_registro_sanitario_fichas',
    			'$_id_fichas_fotos',
    			'$_consultas_fichas',
    			'$_buscador_final',
    			'$_mecanismo_accion_fichas',
    			'$_efectos_colaterales_fichas',
    			'$_conservacion_fichas',
    			'$_encabezado_dosificacion_fichas','$_tipo_ficha', '$tablaLab',
    			'$tablaDis', '$tablaAdministracion',
    			'$tablaComp', '$tablaDosi', '$nombre_laboratorios', '$nombre_distribuidores'";
    			$fichas_service->setFuncion($funcion);
    			$fichas_service->setParametros($parametros);
    			$resultado=$fichas_service->Insert();
    			
    			
    			$tablaLab="";
    			$tablaDis="";
    			$tablaAdministracion="";
    			$tablaComp="";
    			$tablaDosi="";
    		}
    		$tablaLab="";
    		$tablaDis="";
    		$tablaAdministracion="";
    		$tablaComp="";
    		$tablaDosi="";
    	}
    	
    }
    
    
    
    
    
}
?>
