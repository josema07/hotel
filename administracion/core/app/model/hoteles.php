<?php 
	class Hoteles
	{

		public static $tablename = 'users';
		public function selectHotel(){

		$sql = "SELECT * FROM ". self::$tablename ." ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new Hoteles());
		}
	}

 ?>