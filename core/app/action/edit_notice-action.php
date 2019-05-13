<?php 

	$id_notice = htmlentities(addslashes($_POST['id_notice']));
	$img_notice = $_FILES['img_notice']['name'];
	$titulo = htmlentities(addslashes($_POST['titulo']));
	$contenido = htmlentities(addslashes($_POST['contenido']));
	$estatus_notice = htmlentities(addslashes($_POST['estatus_notice']));

	$permitidos = array('image/gif','image/png','image/jpg','image/jpeg');
	$limit_kb = 2000;

	if ($img_notice != "") {
	
		if (in_array($_FILES['img_notice']['type'], $permitidos) && $_FILES['img_notice']['size'] <= $limit_kb * 1024) {

			$ruta = 'static/notice/';
			$fecha = getdate();
			$archivo = $ruta.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$img_notice;
			$imgDB = 'static/notice/'.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$img_notice;

			$resultado = @move_uploaded_file($_FILES['img_notice']['tmp_name'], $archivo);
			echo $resultado;
			echo $ruta;
			echo $archivo;

			$sql = new Notice();
			$sql->editNotice($id_notice, $imgDB, $titulo, $contenido, $estatus_notice);
			header('Location: ./?view=admin_notice');
		}else{
			echo "La imagen a subir excede la capacidad o no es un archivo permitido.";
		}
	}else{
		$sql = new Notice();
		$sql->editNoticeCont($id_notice, $titulo, $contenido, $estatus_notice);
		// header('Location: ./?view=admin-notice');
	}
 ?>