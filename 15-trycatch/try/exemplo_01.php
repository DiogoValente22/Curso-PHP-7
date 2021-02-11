<?php 

try {

	throw new Exception("Houve um erro.", 400);
	

} catch (Exception $e) {

	//esses get (message, line, code) já existem do proprio php, então não preciso criar.
	echo json_encode(array(
		"message"=>$e->getMessage(),
		"line"=>$e->getLine(),
		"code"=>$e->getCode()
	));

}

 ?>