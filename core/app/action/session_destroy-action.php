<?php 

	$_SESSION["client_id"] = "";
	// session_start();
	session_destroy();

	header("Location: ./");

 ?>