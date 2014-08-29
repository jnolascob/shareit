<?php
print_r($_FILES);
$new_image_name = "_".rand()."_".rand()."images.jpg";
move_uploaded_file($_FILES["file"]["tmp_name"], "/var/www/html/static/images/".$new_image_name);
?>