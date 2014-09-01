<?php
print_r($_FILES);
$response = array();

/*paths*/
$uploaddir = '/var/www/html/static/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

$new_image_name = "_".rand()."_".rand()."images.jpg";
//move_uploaded_file($_FILES["file"]["tmp_name"], "/static/images/");
if(move_uploaded_file($_FILES["file"]["tmp_name"], $uploadfile)){
	echo "successfully uploaded";
}
else{
	echo "Upload failed";
}
$response['status'] = 200;
$response['success'] = 1;
$response['message'] = "Se guardo";
$response['route'] = $uploadfile;
echo json_encode($response);

?>