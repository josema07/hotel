<section>
	<?php 
		$id_user = $_POST['id_user'];
		$sql_user = new Estatus();
		$query_user = $sql_user->getIdUser($id_user);
		echo $id_user;

		foreach ($query_user as $data_user) {
							
			$users = '<div id="miModal" class = "modal">';
				$users .= '<div id="flex" class = "flex_admin">'; 
					$users .= '<div class = "contain_modal">';
						$users .= '<div class = "modal_body_admin">';
							$users .= '<div class = "header_user">';
								$users .= '<h5>'.$data_user->user.'</h5>';
								$users .= '<a href="./?view=admin_user"><span class = "close" id = "close">&times;</span></a>';
							$users .= '</div><br>';
								$users .= '<form class="grid_center" method = "post" action="./?action=act_user" enctype="multipart/form-data">';
									$users .= '<div><img src="'.$data_user->logo.'" style = "width:70px; height:60px;"></div>';
									$users .= '<label for="logo">Cambiar logo</label>';
									$users .= '<input type="hidden" id="logo" name="id_user" value="'.$id_user.'">';	
									$users .= '<input type="file" style="display:none;" name="logo" id="logo">';
									$users .= '<input type="text" name="hotel_edit" value="'.$data_user->nombre_e.'">';
									$users .= '<input type="text" name="email_edit" value="'.$data_user->email.'">';
									$users .= '<input type="text" name="rif_edit" value="'.$data_user->rif.'">';
									$users .= '<input type="text" name="nit_edit" value="'.$data_user->nit.'">';
									$users .= '<input type="text" name="dir_edit" value="'.$data_user->direccion.'">';
									$users .= '<input type="text" name="cel_edit" value="'.$data_user->telefono_assis.'">';
									if ($data_user->estatus == 0) {
										$users .= '<div><input type="radio" name="estatus" value="1">Habilitar</div>';
										$users .= '<div><input type="radio" name="estatus" value="0" checked>Deshabilitar</div>';
									}else{
										$users .= '<div><input type="radio" name="estatus" value="1" checked>Habilitar</div>';
										$users .= '<div><input type="radio" name="estatus" value="0">Deshabilitar</div>';
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

		// header('Location: ./?view=admin_user');

	 ?>
</section>