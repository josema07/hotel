<?php 

	include 'core/app/admin-navbar.php'

 ?>

<div class="container-edit">
	<div class="edit">
		<section>
 			<div>
				<h2>Agregar Noticia</h2>
<!-- ==================================INSERTAR NOTICIAS============================================ -->
					<div class="">
						<form class="center-form" method="post" action="./?action=insert_notice" enctype="multipart/form-data">
							<label for="img" class="dropbtn">Agregar Imagen</label>
							<input type="file" id="img" style="display:none;" name="insert_img">
							<input type="text" name="insert_titulo">
							<textarea type="text" name="insert_contenido"></textarea>
							<div><button type="submit" class="dropbtn" value="Agregar">Agregar</button></div>
						</form>
					</div>

<!-- ===================================EDITOR DE NOTICIAS========================================== -->
 				<h2>Editor de Noticias</h2>
 				<?php 

 					$sql_notice = new Notice();
 					$query_notice = $sql_notice->getInfoNotice();
 					$count1 = 1;

 					$mostrar = '<div class="colnoticia">';
			    	foreach ($query_notice as $data) {
			    		$mostrar .= '<form class="form-admin" method="post" action="./?action=edit_notice" enctype="multipart/form-data">';
			    		$mostrar .= '<input type="hidden" name="id_notice" value="'.$data->id.'">';
			    		$mostrar .= '<div class="noticia">';
				    		$mostrar .= '<label for="imagen'.$count1.'" class="dropbtn">Cambiar Imagen de Noticia</label>';
							$mostrar .= '<div><input type="file" style="display:none;"  id="imagen'.$count1.'" name="img_notice" size="20"></div>';
				    		$mostrar .= '<img src="'.$data->imagen.'">';
				    		$mostrar .= '<div>';
					    		$mostrar .= '<input type="text" name="titulo" value="'.$data->titulo.'">';
					    		$mostrar .= '<hr style="width:100%;">';
					    		$mostrar .= '<textarea type="text" name="contenido">'.$data->contenido.'</textarea>';
			    		if ($data->estatus === "1") {
							$mostrar .= '<div><input type="radio" name="estatus_notice" value="1" checked>Habilitar</div>';
							$mostrar .= '<div><input type="radio" name="estatus_notice" value="0">Desabilitar</div>';
						}else{
							$mostrar .= '<div><input type="radio" name="estatus_notice" value="1">Habilitar</div>';
							$mostrar .= '<div><input type="radio" name="estatus_notice" checked value="0">Desabilitar</div>';

						}
						$mostrar .= '<div><button type="submit" class="dropbtn" value="Atualizar">Atualizar</button></div>';
				    		$mostrar .= '</div><br>';
			    		$mostrar .= '</div>';
			    		$mostrar .= '</form>';
			    		$count1++;
			    	}
			    	$mostrar .= '</div>';
			    	echo $mostrar;

 				 ?>
 			</div>
 		</section>
	</div>
</div>