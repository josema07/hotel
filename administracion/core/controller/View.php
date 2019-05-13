<?php

class View{

	function loadUrl(){


	  $exists=file_exists("core/app/view/".  $this->url   ."-view.php");


      if($exists){
      	
        require "core/app/view/".  $this->url   ."-view.php";

      }else{

      	$exists=file_exists("core/app/action/".  $this->url   ."-action.php");

      	      if($exists){

       require "core/app/action/".  $this->url   ."-action.php";
       
      	      }else{

        echo "ERROR 404 EL ARCHIVO NO SE HA ENCONTRADO PONGASE EN CONTACTO CON ACSOFTEAM";


      	      }


      }

	}


}




?>