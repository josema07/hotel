<?php

class action{


	public static function load($action){

if(!isset($_GET['action'])){

			include "core/app/action/".$action."-action.php";

		}else{

		if(action::isValid()){;

			include "core/app/action/".  $_GET['action']   ."-action.php";
		}

	}

	}

	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/app/action/".$_GET['action']."-action.php")){
			$valid = true;
		}


		return $valid;

	}


}








?>