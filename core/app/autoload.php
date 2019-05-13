<?php

$directorio = "core/app/model/";

$ficheros = scandir($directorio, 1);

foreach ($ficheros as $modelname  => $value) {
	if(!in_array($value,array(".",".."))){
	if(Model::exists($value)){
		include Model::getFullPath($value);
	} 
  }

}






?>