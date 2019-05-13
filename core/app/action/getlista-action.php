<?php 
	$estado = $_GET['estado'];

	$mostrar = "<h3>LISTADO DE HOTELES</h3>";

	foreach($registro as $dato){
		$mostrar .= "<div class='objeto'>";
	 	$mostrar .= "<div class='imghotel' height='100px'>";
    	$mostrar .= "<img src='images/marriot.jpg' alt='marriot'>";
	 	$mostrar .= "</div>";
	 	$mostrar .=  "<div class='datohotel'>";
     	$mostrar .= "<h5>".$dato['user']."</h5>";
     	$mostrar .= "<p>".$dato['direccion']."</p>";
     	$mostrar .=  "</div>";
	 	$mostrar .= "<div class='linkhotel'>";
     	$mostrar .= "<button><a href='".$dato['pag_web']."'>IR </a></button>";
 		$mostrar .= "</div>";
		$mostrar .= "</div>";
	}

	echo $mostrar;

 ?>