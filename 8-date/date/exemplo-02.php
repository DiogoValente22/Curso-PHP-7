<?php 

//$ts = strtotime("2001-09-11");
//pode escrever expressoes como: now, +1 week etc etc pode ser usado em e-commerce
$ts = strtotime("now");

echo date ("l, d/m/y", $ts);

 ?>