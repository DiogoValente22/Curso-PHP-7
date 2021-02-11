<?php 

header("Content-Type: image/jpeg");

$file = "wallpaper.jpg";

$new_width = 255;
$new_height = 255;

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

/*PARAMETROS DA FUNÇÃO imagecopyresampled();
1) Imagem destino, no meu caso $new_image
2) Imagem de Origem, no meu caso $old_image
3 e 4) É onde vou cortar da imagem, 0 e 0 n acontece nada
5 e 6) msm coisa
7 e 8) largura e altura da imagem destino
9 e 10) largura e altura da imagem de origem
*/

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($old_image);
imagedestroy($new_image);

 ?>