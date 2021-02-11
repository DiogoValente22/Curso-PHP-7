<?php

$condicao = true;

while ($condicao) {

	//rand sorteia um numero (de x até y);
	$numero = rand(1, 10);

	if($numero === 3){

		echo "TRES!!!!!!";
		$condicao = false;
	}

	echo $numero . " ";
}


?>