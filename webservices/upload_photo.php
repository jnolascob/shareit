<?php
require_once '../model/Imagenes.php';
$I = new Imagenes();
//header("access-control-allow-origin: *");
//echo(getcwd());
print_r($_FILES);
$new_image_name = "_".rand()."_".rand()."images.jpg";
move_uploaded_file($_FILES["file"]["tmp_name"], "/home/siont/public_html/ws/static/images/".$new_image_name);

$imagen_descripcion = "descripcion";
$imagen_nombre = $new_image_name;
$imagen_url = "http://www.siont.com.co/ws/static/images/".$new_image_name;
$imagen_like = 0;
$usuario_id = $_POST['usuario_id'];

$result = $I->upload_image($imagen_nombre,$imagen_descripcion,$imagen_url,$imagen_like,$usuario_id);
print_r($result);
?>