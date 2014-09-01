<?php
//print_r($_FILES);
$response = array();

/*paths*/
$success = 0;
$message = "Pendiente";
$uploaddir = '/var/www/html/static/images/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

$new_image_name = "_".rand()."_".rand()."images.jpg";
//move_uploaded_file($_FILES["file"]["tmp_name"], "/static/images/");
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
$response['name'] = $uploadfile;
echo json_encode($response);
echo date('Y-m-d H:i:s');
echo "<br>";
echo date('Ymd');
echo "<br>";
echo date('Y_m_d_H_i_s');

?>