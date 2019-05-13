<?php

class Executor{


	public static function doit($sql){

		$base = new Database();
		$con = $base->connect();

		return array($con->query($sql),$con->insert_id);

}







}








?>