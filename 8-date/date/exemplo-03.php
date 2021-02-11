<?php 

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

//exibir oq vc quiser: olhar php.net para ver o que pode usar
//ucwords deixar a 1 letra maiuscula de cada string
echo ucwords (strftime("%A %B"));
//Deessa linha para baixo são meus testes/////////////////////////////////
echo "<br><br>";

echo strftime("Data: Dia %d de %B de %G"). date(" H:i:s");
 ?>