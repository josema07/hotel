<?php 

	if(!empty($_POST)){
		if($_POST["clave"] === $_POST["clave2"]):
			
			$query = new usersData();
			$query->user = htmlentities(addslashes($_POST["user"]));
			$querys = $query->getAllByUser(); 

			var_dump($querys);

			if (count($querys) == 0) {
				
				$query = new usersData();
				$query->email = htmlentities(addslashes($_POST["email"]));
				$querys_email = $query->getAllByEmail(); 

				if (count($querys_email) == 0) {

					$query = new usersData();
					$query->nombre_e = htmlentities(addslashes($_POST["nombre_e"]));
					$querys_nombre_e = $query->getAllByEmpresa();

					if (count($querys_nombre_e) == 0) {

						$query = new usersData();
						$query->rif = htmlentities(addslashes($_POST["rif"]));
						$querys_rif = $query->getAllByRif();

						if (count($querys_rif) == 0) {

							$query = new usersData();
							$query->nit = htmlentities(addslashes($_POST["nit"]));
							$querys_nit = $query->getAllByNit();

							if (count($querys_nit) == 0) {
								
								//AGREGAR REGISTRO
								$insert = new usersData();
								foreach ($_POST as $k => $v) {
									$insert->$k = htmlentities(addslashes($v));
								}
								$insert->clave = password_hash($_POST["clave"], PASSWORD_DEFAULT);
								$insert->clave2 = htmlentities(addslashes($_POST["clave"]));
								$insert->insert(); 

								$_SESSION["client_id"] = htmlentities(addslashes($_POST["user"]));

								header("Location: ./?action=session");

							}else{
								//ERROR EL VALOR DE NIT YA EXISTE
								header("location: ./?view=register&error=NIT");
							}

						}else{
							//ERROR EL NUMERO DE RIF YA EXISTE
							header("Location: ./?view=register&error=RIF");
						}
					}else{
						//ERROR EL NOMBRE DE ESTA EMPRESA YA ESTA REGISTRADA
						header("Location: ./?view=register&error=Nombre_Empresa");
					} 
				}else{
					//ERROR, EL CORREO NO EXISTE
					header("Location: ./?view=register&error=email");
				}

			}else{
				//EL NOMBRE DE USUARIO ESTA SIENDO USADO 
				header("Location: ./?view=register&error=user");
			}
		else:{
				//ERROR, LAS CONTRASEÑAS NO COINCIDEN
				header("Location: ./?view=register&error=no_password");
			}
		endif;
	}

?>