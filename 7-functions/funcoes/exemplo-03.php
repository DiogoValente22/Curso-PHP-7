<?php 

function ola($texto = "mundo", $periodo="bom dia"){

	return "Olá $texto! $periodo<br>";

}

echo ola("Mundo", "bom dia");
echo ola("", "Boa noite");
echo ola("Glaucio", "Boa Tarde");
echo ola("João", "");

 ?>