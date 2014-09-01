<?php
print_r($_FILES);
$response = array();

/*paths*/
$success = 0;
$message = "Pendiente";
$uploaddir = '/var/www/html/static/images/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

$new_image_name = "_".rand()."_".rand()."images.jpg";
//move_uploaded_file($_FILES["file"]["tmp_name"], "/static/images/");
if(move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)){
	echo "successfully uploaded";
	$success = 1;
	$message = "Uploaded";
}
else{
	echo "Upload failed";
	$success = 0;
	$message = "Upload failed";
}
$response['status'] = 200;
$response['success'] = $success;
$response['message'] = $message;
$response['route'] = $uploadfile;
echo json_encode($response);

?>