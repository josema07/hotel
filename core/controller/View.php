<?php

class View{

  function loadUrl(){


    $exists=file_exists("core/app/view/".  $this->url   ."-view.php");


      if($exists){
        
        require "core/app/view/".  $this->url   ."-view.php";

      }else{

        echo "ERROR 404 EL ARCHIVO NO SE HA ENCONTRADO PONGASE EN CONTACTO CON ACSOFTEAM";

      }

  }


}
