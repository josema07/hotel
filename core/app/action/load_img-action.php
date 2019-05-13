<?php 
	$idHotel = $_POST['idHotel'];

	$imagen = $_FILES['imagen']['name'];
	
	$permitidos = array('image/gif','image/png','image/jpg','image/jpeg');
	$limit_kb = 2000;

	if (in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limit_kb * 1024) {

		$ruta = 'static/images/';
		$fecha = getdate();
		$archivo = $ruta.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$imagen;
		$imgDB = 'static/images/'.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$imagen;

		$resultado = @move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo);

		$sql = new Slider();
		$sql->insertImg($idHotel, $imgDB);
		if ($sql != '') {
			echo 'imagen agregada con exito';
		}else{
			echo 'error al agregar la imagen';
		}

		// header('Location: ./?view=admin');
		
	}else{
		echo "Error, el tipo o tamaño de archivo no son permitidos";
	}

 ?>