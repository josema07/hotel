<?php 

	$id = htmlentities(addslashes($_POST['id_user']));
	$hotel_edit = htmlentities(addslashes($_POST['hotel_edit']));
	$email_edit = htmlentities(addslashes($_POST['email_edit']));
	$rif_edit = htmlentities(addslashes($_POST['rif_edit']));
	$nit_edit = htmlentities(addslashes($_POST['nit_edit']));
	$dir_edit = htmlentities(addslashes($_POST['dir_edit']));
	$cel_edit = htmlentities(addslashes($_POST['cel_edit']));
	$estatus = htmlentities(addslashes($_POST['estatus']));
	var_dump($id);


	$logo = $_FILES['logo']['name'];

	$permitidos = array('image/gif','image/png','image/jpg','image/jpeg');
	$limit_kb = 2000;

	if ($logo != "") {
		
		
		if (in_array($_FILES['logo']['type'], $permitidos) && $_FILES['logo']['size'] <= $limit_kb * 1024) {

			$ruta = '../../../static/logo/';
			$fecha = getdate();
			$archivo = $ruta.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$logo;
			$imgDB = 'static/logo/'.$fecha['hours'].$fecha['minutes'].$fecha['seconds'].$logo;

			$resultado = move_uploaded_file($_FILES['logo']['tmp_name'], $archivo);

			$sql = new RegisterAct();
			$sql->actRegister($id, $estatus, $hotel_edit, $email_edit, $rif_edit, $nit_edit, $dir_edit, $cel_edit, $imgDB); 
			header('Location: ./?view=admin_user');
		}else{
		 echo "Error, Algunos de los elementos no son Validos";
		}

	}else{
		$sql = new RegisterAct();
		$sql->actRegisterCont($id, $estatus, $hotel_edit, $email_edit, $rif_edit, $nit_edit, $dir_edit, $cel_edit);
		header('Location: ./?view=admin');
	}

 ?>