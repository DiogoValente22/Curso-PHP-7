<?php

$pessoas = array();

//criar um item no array
array_push($pessoas, array(
	'nome' =>'joão',
	'idade'=>20
));

array_push($pessoas, array(
	'nome' =>'Glaucio',
	'idade'=>25
));

echo json_encode($pessoas);

?>