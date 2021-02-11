<?php 

session_id('28lkuinc20mc3p6btd58ph3pp9');

require_once("config.php");

//função pra gerar uma nova sessão
session_regenerate_id();

echo session_id();

echo ("<br>");

var_dump($_SESSION);

 ?>