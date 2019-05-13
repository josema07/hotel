<?php

/**
* @author ACSofteam - Carlos Cárdenas
**/

//FECHA CREACIÓN: 02/05/2018 17:26


//Si quiere observar posibles errores en programa coloque la variable en estado false
$debug = false;

if($debug){
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
}


require 'core/autoload.php';


ob_start();
session_start();



//SEGURIDAD DEL DIRECTORIO 
if(isset($_SESSION["client_pen"])){

	header("Location: ../preapp");

}
if(!isset($_SESSION["client_id"])){

	header("Location: ../");

}

$lb = new Lib();
$lb->start();




?>