<section>

	      <div class="navbarDesk">
	        <div class="img">
	          <a href="./?view=index"><img src="static/images/logo.png" alt=""></a>
	        </div>
	        <div class="option">
	        		<a href="./?view=admin">Inicio</a>
	        		<a href="./?view=admin_user">Clientes</a>
	        		<a href="./?view=admin_notice">Noticias</a>
	          <?php 
                           if (isset($_SESSION["client_id"])) {
                              if($_SESSION['rol'] == "admin"){

                                 echo 
                                 '<div class="dropdown">
											  <button class="dropbtn">'. $_SESSION['client_id'] .'</button>
											  <div class="dropdown-content">
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

				  <a href="#"><img src="static/images/spain.png" width="25px"></a>
				  <a href="#"><img src="static/images/usa.png" width="25px"></a>
	        </div>
	        	<div class="cellphone">
	            <i class="fas fa-bars"></i>
	        	</div>
	        	<div class="modal-cell">
	        		<a href="./?view=admin">Inicio</a>
	        		<a href="./?view=admin_user">Clientes</a>
	        		<a href="./?view=admin_notice">Noticias</a>			 
					<a href="./?action=session_destroy">Cerrar Sesion</a>
			  		<a href="#"><img src="static/images/spain.png" width="15px"> Español</a>
			  		<a href="#"><img src="static/images/usa.png" width="15px"> Ingles</a>
				</div>
	        </div>
	  </section>
	<br><br>	