<?php 

	/**
	 * 
	 */
	class Estatus
	{
	public static $tablename  = "users";

	public function getInfoUser(){
		$sql = "SELECT * FROM ". self::$tablename ." ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Estatus());
	}

	public function getIdUser($id_user){
		$sql = "SELECT * FROM ". self::$tablename ."  WHERE id = '$id_user'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Estatus());
	}
	}

 ?>