<?php
require_once __DIR__ . '/../inc/bootstrap.php';

$postTitle = request()->get('title');
$postDescription = request()->get('description');
//$postFeatured = request()->get('featured');


//File upload
if(isset($_FILES['file'])) {
	$file = $_FILES['file'];

	$file_name = $file['name'];
	$file_temp = $file['tmp_name'];
	$file_size = $file['size'];
	$file_error = $file['error'];

	//allowed file extenstions
	$file_ext = explode('.', $file_name);
	$file_ext = strtolower(end($file_ext));

	//get file name
	$file_first = explode('.', $file_name);
	$file_first = $file_first[0];

	$allowed = array('jpg', 'png');

	if(in_array($file_ext, $allowed)) {
		if($file_error === 0) {
			if($file_size <= 52428800) {
				//create random number to append to the end of the filename
				$random = rand(10, 1000);
				$file_name_new = $file_first . '-' . $random . '.' . $file_ext;

				//upload location
				$file_upload_destinatiion = ROOT_PATH . 'static/uploads/' . $file_name_new;
				
				//string for database
				$fileLocation = BASE_URL . 'static/uploads/' . $file_name_new;
				
				//Used for debuging purpose 
				//echo $fileLocation;
				move_uploaded_file($file_temp, $file_upload_destinatiion);

				
			}
		}
	}

}


try {
	$newPost = addPost($postTitle, $postDescription, $postFeatured, $fileLocation);

	$response = \Symfony\Component\HttpFoundation\Response::create(null, 
		\Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' =>  BASE_URL]);
	$response->send();
	exit;
} catch (Exception $e) {
	$response = \Symfony\Component\HttpFoundation\Response::create(null, 
		\Symfony\Component\HttpFoundation\Response::HTTP_FOUND, ['Location' =>  BASE_URL . '/admin/add.php']);
	$response->send();
	exit;
}
