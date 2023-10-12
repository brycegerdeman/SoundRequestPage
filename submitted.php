<?php

$soundreq = $_FILES["soundreq"];
$banner = $_POST["banner"];
if (!$soundreq || !$banner) {
	echo "Request failed. Try resubmitting the form.";
	die();
}
$error = $soundreq["error"];
if ($error == 2) {
	echo "Request failed. Filesize was too large."
	die();
}

//move_uploaded_file($_FILES["soundreq"]["tmp_name"], $banner);

echo $soundreq["tmp_name"];
echo $soundreq["error"];

?>
