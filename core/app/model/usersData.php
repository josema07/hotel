<?php 


class usersData{


	public static $tablename  = "users";

	public function insert(){
		$sql = "INSERT INTO " . self::$tablename ." (`user`, `email`, `clave`, `nombre_e`, `rif`, `nit`, `n_empleados`, `n_habitaciones`, `nombre_r`, `cargo`, `direccion_oficina`, `direccion`, `estado`, `codigo_postal`, `pais`, `nombre_assis`, `telefono_assis`, `fax`, `pag_web`, `email_assis`, `razon`, `nombre_a`, `telefono_a`) 
		VALUES (\"$this->user\", \"$this->email\", \"$this->clave\",
		\"$this->nombre_e\", \"$this->rif\", \"$this->nit\", \"$this->n_empleados\", \"$this->n_habitaciones\", 
		\"$this->nombre_r\", \"$this->cargo\", \"$this->direccion_oficina\", \"$this->direccion\", \"$this->estado\", \"$this->codigo_postal\", \"$this->pais\", 
		\"$this->nombre_assis\", \"$this->telefono_assis\", \"$this->fax\", \"$this->pag_web\", \"$this->email_assis\", \"$this->razon\", 
		\"$this->nombre_a\", \"$this->telefono_a\") ";

		Executor::doit($sql);
	}

	public function getAllByUser(){

		$sql = "SELECT * FROM ". self::$tablename ." WHERE user=\"$this->user\" ";

		$query = Executor::doit($sql);
		return Model::one($query[0],new usersData());
	}

	public function getAllByEmail(){

		$sql = "SELECT * FROM ". self::$tablename ." WHERE email=\"$this->email\" ";
		$query = Executor::doit($sql);
		return Model::one($query[0],new usersData());
	}

	public function getAllByRif(){

		$sql = "SELECT * FROM ". self::$tablename ." WHERE rif=\"$this->rif\" ";
		$query = Executor::doit($sql);
		return Model::one($query[0],new usersData());

	}

	public function getAllByNit(){

		$sql = "SELECT * FROM ". self::$tablename ." WHERE nit=\"$this->nit\" ";
		$query = Executor::doit($sql);
		return Model::one($query[0],new usersData());

	}

	public function getAllByEmpresa(){

		$sql = "SELECT * FROM ". self::$tablename ." WHERE nombre_e=\"$this->nombre_e\" ";
		$query = Executor::doit($sql);
		return Model::one($query[0],new usersData());

	}
	

	public function updateUlt(){
       
       $sql = "UPDATE ".  self::$tablename ." SET ult=NOW() WHERE user=\"$this->user\" ";
       Executor::doit($sql);
   }
}


 ?>