<?php
print_r($_FILES);
$response = array();

$new_image_name = "_".rand()."_".rand()."images.jpg";
$uri = "/var/www/html/static/images/".$new_image_name;
move_uploaded_file($_FILES["file"]["tmp_name"], uri);

$response['status'] = 200;
$response['success'] = 1;
$response['message'] = "Se guardó";
$response['route'] = "http://104.131.36.201"+$uri;
echo json_encode($response);
?>