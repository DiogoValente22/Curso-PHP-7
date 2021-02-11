<?php 

require_once("config.php");

//serve para finalizar a sessão
unset($_SESSION['nome']);

echo $_SESSION['nome'];

//limpa var
session_destroy()

//unset limpa variaveis de sessão mas eu sou a msm pessoa pro site
//o session destroy limpa a variavel e remove o usuario, ex: vc da f5 e é como vc tivesse outro acesso ao servidor
 ?>