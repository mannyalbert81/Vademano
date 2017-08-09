<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Menu Administración</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php?controller=Usuarios&action=cerrar_sesion"><span class="glyphicon glyphicon-home" ><?php echo " Inicio" ;?></span> <span class="sr-only">(current)</span></a></li>
        
        <li class="dropdown" style="background-color: #ffffff;" >
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-modal-window" ><?php echo " Administración" ;?> </span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
        	<li><a href="index.php?controller=Usuarios&action=index"><span class="glyphicon glyphicon-user" aria-hidden="true"> Usuarios</span></a>
            </li>
		 </ul>
        </li>
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-file" ><?php echo " Gestión de Fichas" ;?> </span> <span class="caret"></span></a>
          <ul class="dropdown-menu">
          <li><a href="<?php echo $helper->url("Especies","index"); ?>"><span class="glyphicon glyphicon-piggy-bank" aria-hidden="true"> Especies</span></a>
		    </li>
			<li><a href="<?php echo $helper->url("PrincipiosActivos","index"); ?>"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"> Principios Activos</span></a>
			</li>
			<li><a href="<?php echo $helper->url("UnidadesMedida","index"); ?>"><span class="glyphicon glyphicon-glass" aria-hidden="true"> Unidades de Medida</span></a>
			</li>
			<li><a href="<?php echo $helper->url("Distribuidores","index"); ?>"><span class="glyphicon glyphicon-bed" aria-hidden="true"> Distribuidores</span></a>
			</li>
			<li><a href="<?php echo $helper->url("Laboratorios","index"); ?>"><span class="glyphicon glyphicon-compressed" aria-hidden="true"> Laboratorios</span></a>
			</li>
			
			<li role="separator" class="divider"></li>
		
			<li><a href="<?php echo $helper->url("FichasProductos","index"); ?>"><span class="glyphicon glyphicon-tasks" aria-hidden="true"> Fichas de Productos</span></a>
			</li>
	                <li><a href="<?php echo $helper->url("FichasAlimentos","index"); ?>"><span class="glyphicon glyphicon-knight" aria-hidden="true"> Fichas de Alimentos</span></a>
			</li>
          </ul>
        </li>
     
      
    
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>