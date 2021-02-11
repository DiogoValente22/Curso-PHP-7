<?php 

$conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "1234");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 1;

$stmt->bindParam(":ID", $id);

$stmt->execute(array($id));

//$conn->rollback(); //voltar o que voce fez
$conn->commit();

echo "Delete OK";

 ?>