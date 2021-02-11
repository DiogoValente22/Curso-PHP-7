<?php 

//$conn = new mysqli("localhost", "SEU LOGIN", "SUA SENHA", "NOME DO BANCO"); 

if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;

}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)");

$stmt->bind_param("ss", $login, $pass);//tipos de dados das  ?? na linha 11, s de string

$login = "user";
$pass = "12345";

$stmt->execute(); //executar o comando de inserir da linha 11

//inserir mais usuarios

$login ="root";
$pass = "!#$%";
$stmt->execute();

 ?>