
<?php
require_once 'config/global.php';
class QrController extends ControladorBase{
    
    public function __construct() {
        parent::__construct();
    }
    
public function index(){
		
	session_start();
	
			$usuarios = new UsuariosModel();
			$resultSet = "";
			
			$this->view("GeneraQr",array(
					"resultSet"=>$resultSet
			));
		
		
		
	}
	
		
}
?>
</body>
</html>




