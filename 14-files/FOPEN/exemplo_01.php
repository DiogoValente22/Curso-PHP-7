<?php 

//w+ o conteudo sera resetado e escreverá
//a+ o conteudo será preservado e o ponteiro irá para o final do arquivo
//checar a documentação onde tem tudo
$file = fopen("log.txt", "a+");

fwrite($file, date("Y-m-d H:i:s") . "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";

 ?>

