<?php 

$pasta = "arquivos";
$permissao = "0775"

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretório criado com sucesso!";

/*
0)Sem permissão
1)permissão de execução
2)permissão de gravação
3)permissão para executar e gravar
4)permissão para leitura
5)permissão para leitura e execução
6)permissão para leitura e gravação
7)permissão total: leitura, gravação e execução
*/

 ?>