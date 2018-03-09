
<?php
$id_valor = 0;
$id_nombre = 0;
$tabla = "";
$campo = "";

if (isset ($_GET["tabla"]))
{
	$tabla = $_GET["tabla"];

}
if (isset ($_GET["campo"]))
{
	$campo = $_GET["campo"];

}
if (isset ($_GET["id_nombre"]))
{
	$id_nombre = $_GET["id_nombre"];

}
if (isset ($_GET["id_valor"]))
{
	$id_valor = $_GET["id_valor"];

}
$image = "";
$conn  = pg_connect("user=postgres port=5432 password=.Vademano.2018 dbname=vademano host=13.58.185.239");
if(!$conn)
{
	echo  "No se pudo conectar";
	
}
else 
{

		
		$res = pg_query($conn, "SELECT ".$campo." FROM ".$tabla." WHERE ".$id_nombre." = '$id_valor' ");
		
		
		if ($res)
		{
				$raw = pg_fetch_result($res, $campo );
				
				if($raw)
				{
					header('Content-type: application/pdf');
					echo pg_unescape_bytea($raw);
				}else 
				{
					$archivo=$_SERVER['DOCUMENT_ROOT'].'/Vademano/view/images/'.'Sin_catalogo.pdf';
					header("Content-type: application/pdf");
					header("Content-length: ".filesize($archivo));
					header("Content-Disposition: inline; filename=$archivo");
					readfile($archivo);
				}
				
			
		}else 
		{
			$archivo=$_SERVER['DOCUMENT_ROOT'].'/Vademano/view/images/'.'Sin_catalogo.pdf';
			header("Content-type: application/pdf");
			header("Content-length: ".filesize($archivo));
			header("Content-Disposition: inline; filename=$archivo");
			readfile($archivo);
		}
	
	pg_close($conn);
	
}



?>