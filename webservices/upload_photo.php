<?php
print_r($_FILES);
$response = array();

$new_image_name = "_".rand()."_".rand()."images.jpg";
if(move_uploaded_file($_FILES["file"]["tmp_name"], "/static/images/".$new_image_name)){
	$response['status'] = 200;
	$response['success'] = 1;
	$response['message'] = "Se guardo";
	$response['route'] = "http://104.131.36.201/static/images/"+$new_image_name;
	echo json_encode($response);
}
?>