<?php

$total = 100;
$desconto = 0.9;

do {

	$total += $desconto;

} while($total > 150);

echo $total;

?>