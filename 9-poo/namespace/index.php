<?php 

require_once("config.php");

use Cliente\Cadastro; //

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("1234567");

$cad->registrarVenda();

 ?>