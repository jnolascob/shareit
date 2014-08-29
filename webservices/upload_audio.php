<?php
require_once '../model/Imagenes.php';
$I = new Imagenes();
// Where the file is going to be placed
$target_path = "/home/siont/public_html/ws/static/audios/";
 
/* Add the original filename to our target path.
Result is "uploads/filename.extension" */
$target_path = $target_path . basename( $_FILES['file']['name']);

$new_audio_name = "_".rand()."_".rand()."audio.3gpp";
move_uploaded_file($_FILES["file"]["tmp_name"], "/home/siont/public_html/ws/static/audios/".$new_audio_name);
//move_uploaded_file($_FILES['file']['tmp_name'], $target_path);

$audio_descripcion = "descripcion";
$audio_nombre = $new_audio_name;
$audio_url = "http://www.siont.com.co/ws/static/audio/".$audio_nombre;
$audio_like = 0;
$usuario_id = $_POST['usuario_id'];

$result = $I->upload_audio($audio_nombre,$audio_descripcion,$audio_url,$audio_like,$usuario_id);

print_r($result);
/*
if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo "The file ".  basename( $_FILES['file']['name']).
    " has been uploaded";
} else{
    echo "There was an error uploading the file, please try again!";
    echo "filename: " .  basename( $_FILES['file']['name']);
    echo "target_path: " .$target_path;
}*/
?>