<?php 

$cep = "01310100";
$link = "https://viacep.com.br/ws/$cep/json/";

$ch = curl_init($link);

//configuração
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //0 pq n precisa validar

//executa o curl
$response = curl_exec($ch); //vai vir um json de retorno

curl_close($ch);

$data = json_decode($response, true);

print_r($data); // como $data é um array, eu posso colocar qualquer chave, como localidade para filtrar informações. Sem as chaves, apenas $data, irá aparecer todas as informações.

 ?>