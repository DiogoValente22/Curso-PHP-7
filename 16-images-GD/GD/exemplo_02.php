<?php 

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ".date("d/m/y")), $titleColor);


header("Content-type: image/jpeg");
/*1º parametro: $image gera no localgost
  2º parametro cria 1 arquivo no diretorio
  3º parametro qualidade da imagem 0-100*/ 
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 100);
imagedestroy($image);
 ?>