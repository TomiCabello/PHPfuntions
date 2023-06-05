<?php 
$src_img = imagecreatefromjpeg("imagenes/unidad4.jpg");
$alto = 150;
$ancho = 150;
$dst_img = imagecreatetruecolor($ancho, $alto);
$imagen = imagecreate($ancho, $alto);
imagecopyresized($dst_img, $src_img, 0, 0, 0, 0, $ancho, $alto, imagesx($src_img), imagesy($src_img));
imagejpeg($dst_img, "imagenes/unidad4_thumb.jpg");
imagedestroy($dst_img);
?>