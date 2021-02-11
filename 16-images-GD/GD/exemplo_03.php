<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Divanei Aparecido");
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ".date("d/m/y")), $titleColor);

header("Content-Type: image/jpeg");
/*1º parametro: $image gera no localgost
  2º parametro cria 1 arquivo no diretorio
  3º parametro qualidade da imagem 0-100*/ 
imagejpeg($image);
imagedestroy($image);
 ?>