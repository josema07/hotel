<?php if (isset($_SESSION["rol"]) == "admin"): ?>

<?php 

	include 'core/app/admin-navbar.php'

 ?>

<div class="container-edit">
	<div class="edit">
		<section>
			<div>
				<h2>Estatus de usuarios</h2>
				<?php 

					$sql_user = new Estatus();
					$query_user = $sql_user->getInfoUser();
					$count = 1;
					$users = '<div class = "contain_list">';
						$users .= '<div class = "modal_header_admin">';
							$users .= '<h5>Usuarios</h5>';
							$users .= '<h5>Hoteles</h5>';
							$users .= '<h5>Estatus</h5>';
							$users .= '<h5>Acciones</h5>';
						$users .= '</div>';
						foreach ($query_user as $data_user) {
						$users .= '<form method = "post" action="./?view=edit_user" >';
							$users .= '<div class = "modal_contain_admin">';
								$users .= '<input type="hidden" name="id_user" value="'.$data_user->id.'">';
								$users .= '<p>'.$data_user->user.'</p>';
								$users .= '<p>'.$data_user->nombre_e.'</p>';
								if ($data_user->estatus == 0) {
									$users .= '<p>Inactivo</p>';
								}else{
									$users .= '<p>Activo</p>';
								}
								$users .= '<button type="submit" id = "abrir" class="dropbtn abrir"><span><i class="fas fa-edit"></i></span></button>';
							$users .= '</div>';
						$users .= '</form>';
						}
					$users .= '</div>';
					echo $users;


				 ?>
			</div>
		</section>    
		<br><br>   
    	<hr style="width:100%;">	
	</div>
</div>

<?php else: 
			header('Location: ./?view=index');
		endif
	?>