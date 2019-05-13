<?php 

	class Notice
	{
		public static $tablename = 'noticia';
		
		public static function getInfoNotice() 
		{
			$sql = "SELECT * FROM ". self::$tablename ." ";
        	$query = Executor::doit($sql);
        	return Model::many($query[0],new Notice());
		}

		public function editNotice($id_notice, $imgDB, $titulo, $contenido, $estatus_notice){

		$sql = "UPDATE ". self::$tablename ." SET imagen = '$imgDB', titulo = '$titulo', contenido = '$contenido', estatus = '$estatus_notice' WHERE id =$id_notice ";
		$query = Executor::doit($sql);
		// echo $sql;
		}

		public function editNoticeCont($id_notice, $titulo, $contenido, $estatus_notice){

		$sql = "UPDATE ". self::$tablename ." SET 'titulo' = $titulo, 'contenido' = $contenido, 'estatus' = $estatus_notice WHERE 'id' = $id_notice ";
		$query = Executor::doit($sql);
		// echo $sql;
		}

		public function insertNotice($imgDB, $insert_titulo, $insert_contenido){
			$sql = "INSERT INTO " .self::$tablename. " (imagen, titulo, contenido) VALUES ('$imgDB', '$insert_titulo', '$insert_contenido')";
			echo $sql;
			Executor::doit($sql);
		}

		public function insertNoticeCont($insert_titulo, $insert_contenido){
			$sql = "INSERT INTO " .self::$tablename. " (titulo, contenido) VALUES ('$insert_titulo', '$insert_contenido')";
			echo $sql;
			Executor::doit($sql);
		}	
	}

 ?>