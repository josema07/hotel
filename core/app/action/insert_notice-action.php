<?php 

	$insert_img = $_FILES['insert_img']['name'];
	$insert_titulo = htmlentities(addslashes($_POST['insert_titulo']));
	$insert_contenido = htmlentities(addslashes($_POST['insert_contenido']));

	$permitidos = array('image/gif','image/png','image/jpg','image/jpeg');
	$limit_kb = 2000;

	if ($insert_img != "") {
	
		if (in_array($_FILES['insert_img']['type'], $permitidos) && $_FILES['insert_img']['size'] <= $limit_kb * 1024) {

			$ruta = 'static/notice/';
			$fecha = getdate();
			$archivo = $ruta.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$insert_img;
			$imgDB = 'static/notice/'.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$insert_img;

			$resultado = @move_uploaded_file($_FILES['insert_img']['tmp_name'], $archivo);
			echo $resultado;
			echo $ruta;
			echo $archivo;

			$sql = new Notice();
			$sql->insertNotice($imgDB, $insert_titulo, $insert_contenido);
			header('Location: ./?view=admin_notice');
		}else{
			echo "La imagen a subir excede la capacidad o no es un archivo permitido.";
		}
	}else{
		$sql = new Notice();
		$sql->insertNoticeCont($insert_titulo, $insert_contenido);
		// header('Location: ./?view=admin_notice');
	}

 ?>