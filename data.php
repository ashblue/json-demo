<?php
$images = get_images('images');
echo list_items($images);

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