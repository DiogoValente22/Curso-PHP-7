<?php 

$images = scandir("images");

$data = array();

foreach ($images as $img) {
	//needle é onde vc ta procurando e haystack são as opcoes
	if (!in_array($img, array(".", ".."))) {

		$filename = "images" . DIRECTORY_SEPARATOR . $img;

		$info = pathinfo($filename);
		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://localhost/s14/DIR/".str_replace("\\", "/", $filename);

		array_push($data, $info);
	}
}

echo json_encode($data);

 ?>