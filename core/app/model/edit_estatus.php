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
	}

 ?>