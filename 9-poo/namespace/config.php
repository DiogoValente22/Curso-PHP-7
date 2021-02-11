<?php 

spl_autoload_register(function($nameClass){

	$dirClass = "class";
	$filename = $dirClass . DIRECTORY_SEPARATOR . $nameClass . ".php";

	if (file_exists($filename)) { //se arquivo existir

		require_once($filename);
	}

});

 ?>