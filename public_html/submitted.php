<?php

// grab file upload (from POST)
$soundreq = $_FILES["soundreq"];
// grab banner id from POST
$banner = $_POST["banner"];

// if file or banner are missing, fail and die
if (!$soundreq || !$banner) {
	echo "Request failed. Try resubmitting the form.";
	die();
}

// check for errors with the file upload
$error = $soundreq["error"];
if ($error == 2) {
	echo "Request failed. Filesize was too large.";
	die();
}

// the filename to store the uploaded sound
$target_dir = $banner . ".mp3";

// store the file upload into the target directory
move_uploaded_file($_FILES["soundreq"]["tmp_name"], $target_dir);

// debugging - output the file temporary system name (gen by PHP) and error
echo $soundreq["tmp_name"];
echo $soundreq["error"];
echo $banner;

?>
