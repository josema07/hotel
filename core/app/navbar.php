<section>
	    <div class="container">
	      <div class="navbarDesk">
	        <div class="img">
	          <a href="./?view=index"><img src="static/images/logo.png" alt=""></a>
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
	          						<a href="./?view=register">Afiliarse</a>';
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
  	        	<div class="cellphone">
               
	            <i class="fas fa-bars"></i>
	        	</div>
	        	<div class="modal-cell">
		          <a href="./?view=index">Inicio</a>
		          <a href="./?view=associates">Asociados</a>
		          <a href="./?view=service">Servicios</a>
		          <a href="./?view=notice">Noticias</a>
		          <a href="">Ranking</a>
		          <a href="#"><img src="static/images/spain.png" width="15px"> Español</a>
			  		 <a href="#"><img src="static/images/usa.png" width="15px"> Ingles</a>
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
				</div>
	      </div>
	    </div>
	  </section>