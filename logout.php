<?php

session_start();
// ---
// la tarea de este archivo es eliminar todo rastro de cookie

// -- eliminamos el usuario
if(isset($_SESSION['assegurate'])){
	unset($_SESSION['assegurate']);
}

setcookie("bienvenido","true",time()-60000);
session_destroy();

//estemos donde estemos nos redirije al index
print "<script>window.location='./';</script>";

?>