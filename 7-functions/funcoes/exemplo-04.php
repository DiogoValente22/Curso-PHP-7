<?php 

function ola(){

	//essa funcao recupera e retorna em 1 array todos argumentos que foram passados como parametro
	$argumentos = func_get_args();

	return $argumentos;

}

var_dump(ola("Bom dia",10));

 ?>