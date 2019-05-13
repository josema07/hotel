<?php if (isset($_SESSION["rol"]) == "admin"): ?>

<section>
	    <div class="container">
	      <div class="navbarDesk">
	        <div class="img">
	          <img src="static/images/logo.png" alt="">
	        </div>
	        <div class="option">

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
	<br><br>	
	<div class="container-edit">
		<div class="edit">

<!-- ====================SECCION PARA INSERTAR IMAGENES AL SLIDER==================== -->
		 	<section>
		 		<div>
				  <h2>Seccion del Slider</h2>
				  <div>
				  	<form method="post" action="./?action=load_img" enctype="multipart/form-data">
			   	 	<select name="idHotel" class="form-control">
					    	<option selected disabled requiere>--Seleccionar Hotel--</option>
					      <?php 
					        $query = new Hoteles();
					        $querys = $query->selectHotel();
					        foreach ($querys as $data): ?>
					      	<option value="<?php echo $data->id; ?>"><?php echo $data->nombre_e; ?></option>
					    <?php endforeach; ?>
					    <input type="file" name="imagen" size="20">
					    <input class="dropbtn" type="submit" value="Enviar imagen">
				    	</select>	
				    </form>
				  </div>
				</div>
			</section>
	    	<br><br>   
    		<hr style="width:100%;">

<section>
	<div>
		<h2>Estatus de usuarios</h2>
		<?php 

			$sql_user = new Estatus();
			$query_user = $sql_user->getInfoUser();
			$count = 1;
						$users = '<div class = "modal_header_admin">';
							$users .= '<h5>Usuarios</h5>';
							$users .= '<h5>Hoteles</h5>';
							$users .= '<h5>Estatus</h5>';
							$users .= '<h5>Acciones</h5>';
						$users .= '</div>';
						foreach ($query_user as $data_user) {
							$users .= '<div class = "modal_header_admin">';
							
								$users .= '<p>'.$data_user->user.'</p>';
								$users .= '<p>'.$data_user->nombre_e.'</p>';
								if ($data_user->estatus == 0) {
									$users .= '<p>Inactivo</p>';
								}else{
									$users .= '<p>Activo</p>';
								}
								$users .= '<button id = "abrir" class="dropbtn abrir"><span><i class="fas fa-edit"></i></span></button>';
							$users .= '</div>';
						}
						foreach ($query_user as $data_user) {
							
			$users .= '<div id="miModal" class = "modal">';
				$users .= '<div id="flex" class = "flex_admin">'; 
					$users .= '<div class = "contain_modal">';
							$users .= '<div class = "modal_body_admin">';
								$users .= '<div class = "modal_header_admin flex">';
									$users .= '<h5>'.$data_user->user.'</h5>';
									$users .= '<span class = "close" id = "close">&times;</span>';
								$users .= '</div>';
								$users .= '<form class="grid_center" method = "post" action="./?action=./?action=act_user" >';
									$users .= '<div><img src="'.$data_user->logo.'" style = "width:70px; height:60px;"></div>';
									$users .= '<label for="logo'.$count.'">Cambiar logo</label>';
									$users .= '<input type="hidden" id="logo'.$count.'" name="id-user" value="'.$data_user->id.'">';	
									$users .= '<input type="file" style="display:none;" name="logo" id="logo">';
									$users .= '<input type="text" name="empresa-edit" value="'.$data_user->nombre_e.'">';
									$users .= '<input type="text" name="email-edit" value="'.$data_user->email.'">';
									$users .= '<input type="text" name="rif-edit" value="'.$data_user->rif.'">';
									$users .= '<input type="text" name="nit-edit" value="'.$data_user->nit.'">';
									$users .= '<input type="text" name="dir-edit" value="'.$data_user->direccion.'">';
									$users .= '<input type="text" name="cel-edit" value="'.$data_user->telefono_assis.'">';
									if ($data_user->estatus == 0) {
										$users .= '<div><input type="radio" name="estatus-edit" value="1">Habilitar</div>';
										$users .= '<div><input type="radio" name="estatus-edit" value="0" checked>Deshabilitar</div>';
									}else{
										$users .= '<div><input type="radio" name="estatus-edit" value="1" checked>Habilitar</div>';
										$users .= '<div><input type="radio" name="estatus-edit" value="0">Deshabilitar</div>';
									}
									$users .= '<button type="submit" class="dropbtn" value="actualizar">Actualizar</button>';
								$users .= '</form>';
							$users .= '</div>';
							$count++;
						}
					$users .= '</div>';
				$users .= '</div>';
			$users .= '</div>';
			echo $users;

		 ?>
	</div>
</section>
		</div>
	</div>
	<script src="core/js/modal.js"></script>
<?php else: 
			header('Location: ./?view=index');
		endif
	?>
