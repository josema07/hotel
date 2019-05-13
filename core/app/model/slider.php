<?php 

	/**
	 * 
	 */
	class Slider
	{
		public static $tablename = "slider";

		public function insertImg($idHotel, $imagen){
			$sql = "INSERT INTO " .self::$tablename. " ('id_hotel', 'url') VALUES ('$idHotel', '$imagen')";
			echo $sql;
			Executor::doit($sql);
		}
		
		public static function getImgSlider() 
		{
			$sql = "SELECT * FROM ". self::$tablename ." ORDER BY RAND() LIMIT 6";
        	$query = Executor::doit($sql);
        	return Model::many($query[0],new Slider());
		}
	}

 ?>