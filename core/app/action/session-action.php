<?php 

	if (isset($_POST)) {
		
		$session = new usersData();
		$session->user = htmlentities(addslashes($_POST['user']));
		$start = $session->getAllByUser();

		if (count($start) > 0) {
			
			if (password_verify($_POST["clave"], $start->clave)) {
				if ($start->rol == 1) {
					echo $start->rol;
					$_SESSION["client_id"] = htmlentities(addslashes($_POST["user"]));
					$_SESSION["rol"] = "admin";
					$session->updateUlt();
					header("Location: ./");
				}
				else{
					$_SESSION["client_id"] = htmlentities(addslashes($_POST["user"]));
						$_SESSION["rol"] = "user";
					header("Location: ./?view=index");
					
				}
			}else{
				header("Location: ./?view=login&error=none");
			}
		}else{
			header("Location: ./?view=login&error=none");
		}

		
	}else{
		header("Location: ./?view=login");
	}

 ?>