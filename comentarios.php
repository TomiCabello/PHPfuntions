
  <link rel="stylesheet" href="estilos.css">
<div id="u3comentarios">
<?php 
if($_POST) {
    $nombre_pers = $_POST ['name'];
    $mail_pers = $_POST ['mail'];
    $coment_pers = $_POST ['coment'];



date_default_timezone_set('America/Argentina/Buenos_Aires');
$cargado= fopen("comentarios.txt", "a+");
$fecha = date("d-m-y G:i");
$contenido= "<div id='texto'<p> Nombre: ".$_POST['name']."</p><p> Email: ".$_POST['mail']."</p><p> Comentario: ".$_POST['coment']."</p> <p>Fecha: $fecha </p></div>";
fputs($cargado, $contenido);
echo $contenido;
fpassthru($cargado);
fclose($cargado);

}

?>
</div>
