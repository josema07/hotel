<?php 

	/**
	 *
	 */
	class RegisterAct
	{
		public static $tablename = 'users';
		public function actRegister($id, $estatus, $hotel_edit, $email_edit, $rif_edit, $nit_edit, $dir_edit, $cel_edit, $imgDB){

		$sql = "UPDATE ". self::$tablename ." SET estatus = '$estatus', nombre_e = '$hotel_edit', email = '$email_edit', rif = '$rif_edit', nit = '$nit_edit', direccion = '$dir_edit', telefono_assis = '$cel_edit', logo = '$imgDB' WHERE id = $id ";
		$query = Executor::doit($sql);
		echo $sql;
		}

		public function actRegisterCont($id, $estatus, $hotel_edit, $email_edit, $rif_edit, $nit_edit, $dir_edit, $cel_edit){

		$sql = "UPDATE ". self::$tablename ." SET estatus = '$estatus', nombre_e = '$hotel_edit', email = '$email_edit', rif = '$rif_edit', nit = '$nit_edit', direccion = '$dir_edit', telefono_assis = '$cel_edit' WHERE id = $id ";
		$query = Executor::doit($sql);
		echo $sql;
		}
	}

 ?>