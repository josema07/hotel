<script type="text/javascript">
	

	$("title").html("Asociados - Cotelco");

</script>

	<section>
	    <div class="container">
	      <div class="navbarDesk">
	        <div class="img">
	          <img src="static/images/logo.png" alt="">
	        </div>
	        <div class="option">

	          <a href="./?view=index">Inicio</a>
	          <a href="./?view=associates">Asociados</a>
	          <a href="./?view=service">Servicios</a>
	          <a href="./?view=notice">Noticias</a>
	          <a href="">Ranking</a>
	          <?php 
                           if (isset($_SESSION["client_id"])) {
                              if($_SESSION['rol'] == "admin"){

                                 echo 
                                 '<div class="dropdown">
											  <button class="dropbtn">'. $_SESSION['client_id'] .'</button>
											  <div class="dropdown-content">
												  <a href="./?view=admin">Administrador</a>
												  <a href="./?action=session_destroy">Cerrar Sesion</a>
											 </div>
											</div>';
                                 
                              }else{
                                 if(isset($_SESSION["client_id"])) {
                                  echo 
                                	'<div class="dropdown">
											  <button class="dropbtn">'. $_SESSION['client_id'] .'</button>
											  <div class="dropdown-content">./?
												  <a href="./?action=session_destroy">Cerrar Sesion</a>
											 </div>
											</div>';
                                 } 
                              }          
                           }else{
                              echo 
                              '<a href="./?view=login">Ingresar</a>
	          						<a href="register-view.php">Afiliarse</a>';
                           } 
                        ?>
	          
	          <div class="dropdown">
				  <button class="dropbtn">Idioma</button>
				  <div class="dropdown-content">
				  <a href="#"><img src="static/images/spain.png" width="15px"> Español</a>
				  <a href="#"><img src="static/images/usa.png" width="15px"> Ingles</a>
				 </div>
				</div>
	        </div>
	      </div>
	    </div>
	  </section>

    <hr style="width:100%;">
		<br>
		<h2>LISTADO DE HOTELES</h2>
		<br>
    <hr style="width:100%;">

    <div class="searchlist">
    	<input type="text" name="hotel" placeholder="Hotel..." />
    	<input type="text" name="location" placeholder="Estado o Ciudad" />
        <button><i class="fas fa-search"></i></button>
    </div>
		
			<?php 
				$sql = new Hoteles();
				$query = $sql->selectNotice();
				
				$mostrar = '<div class="rowhotel">';
				foreach ($query as $data) {
				if ($data->estatus != 0) {
					$mostrar .= '<div class="hotel">';
					$mostrar .= '<img src="'.$data->logo.'">';
					$mostrar .= '<h5> '. $data->nombre_e .' </h5>';
					$mostrar .= '<i class="fas fa-map-marker-alt"></i><p> '.$data->direccion.'</p>';
					$mostrar .= '<i class="fas fa-phone"></i><p>  '.$data->telefono_assis.'</p>';
					$mostrar .= '<i class="fas fa-envelope"></i><p> '.$data->email.'</p>';
					$mostrar .= '<i class="fas fa-globe-americas"></i><p><a href="'.$data->pag_web.'">   '.$data->pag_web.'</a></p>';
					$mostrar.= '</div>';
				}
				}
					$mostrar .= '</div>';
					$mostrar .= '<hr style="width:100%;"><br><br>';
				echo $mostrar;

		 	?>
