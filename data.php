<?php

$arr = array ('a'=>1,'b'=>2,'c'=>3,'d'=>4,'e'=>5);
$data = get_images('images');
echo list_items($data);

function get_images($dir) {
	// Get image data
	$images = scandir($dir);
	
	// Cycle through images and create an array of valid images
	$data = array();
	foreach($images as $image) {
		if ( strpos($image, '.png') ||
		strpos($image,'.jpg') ||
		strpos($image, '.gif')):
			array_push($data, $image);
		endif;
	}

	return $data;
}

function list_items($array) {
	$json = json_encode($array);
	return $json;
}
?>