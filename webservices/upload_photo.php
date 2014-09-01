<?php
//print_r($_FILES);
$path = $_FILES['file']['name'];
$ext = pathinfo($path, PATHINFO_EXTENSION);

$image_name = $_POST['image_name'];

$response = array();

/*paths*/
$success = 0;
$message = "Pendiente";
//$add_name = date('Ymd_His')."_".rand().".".$ext;
$add_name = $image_name.".".$ext;
$uploaddir = '/var/www/html/static/images/';
//$uploadfile = $uploaddir . basename($_FILES['file']['name']);
$uploadfile = $uploaddir.$add_name;

if(move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)){
	$success = 1;
	$message = "Upload success";
}
else{
	$success = 0;
	$message = "Upload failed";
}
$response['status'] = 200;
$response['success'] = $success;
$response['message'] = $message;
$response['route'] = $uploadfile;
$response['name'] = $add_name;
echo json_encode($response);
?>