<?php 
$image = "imagenes/oficina.jpg";
$marca_agua = "imagenes/marca.png";

$img = imagecreatefrompng($marca_agua);
$ext = substr($image, -3);
$ext = strtolower($ext);

switch ($ext) {
    case 'gif':
        $img2 = imagecreatefromgif($image);
        break; 
    
    case 'jpg':
        $img2 = imagecreatefromjpeg($image);
        break;

    case 'png':
        $img2 = imagecreatefrompng($image);
        break;
}
imagecopy($img2, $img, (imagesx($img2)/4), (imagesy($img2)/4), (imagesx($img)/300), (imagesy($img)/300), imagesx($img), imagesy($img));

header("Contente-type: image/jpeg");
imagejpeg($img2);
imagedestroy($img);
imagedestroy($img2);
?>