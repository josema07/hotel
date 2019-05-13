<?php 

	/**
	 * 
	 */
	class ListaEstado
	{
		
		public static $tablename = "estados";
		
		public static function getListaEstados() 
		{
			$sql = "SELECT * FROM ". self::$tablename ." ";
        	$query = Executor::doit($sql);
        	return Model::many($query[0],new ListaEstado());
		}

	}

 ?>