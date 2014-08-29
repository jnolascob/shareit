<?php
require_once '../model/Imagenes.php';
$I = new Imagenes();
// Where the file is going to be placed
$target_path = "/home/siont/public_html/ws/static/videos/";

$new_video_name = "_".rand()."_".rand()."video.3gp";
move_uploaded_file($_FILES["file"]["tmp_name"], "/home/siont/public_html/ws/static/videos/".$new_video_name);

$video_descripcion = "descripcion";
$video_nombre = $new_video_name;
$video_url = "http://www.siont.com.co/ws/static/videos/".$video_nombre;
$video_like = 0;
$usuario_id = $_POST['usuario_id'];

$result = $I->upload_video($video_nombre,$video_descripcion,$video_url,$video_like,$usuario_id);

print_r($result);
?>