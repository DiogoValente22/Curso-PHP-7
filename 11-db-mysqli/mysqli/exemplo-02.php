<?php 
//conectando com o banco
//$conn = new mysqli("localhost", "SEU LOGIN", "SUA SENHA", "NOME DO BANCO");

//verificando se vai dar algum erro
if ($conn->connect_error) {

	echo "Error: " . $conn->connect_error;

}

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();//variavel para eu transformar tudo em json

while ($row = $result->fetch_assoc()) { //retorna um dado caso ele exista

	array_push($data, $row);

}

echo json_encode($data);

 ?>