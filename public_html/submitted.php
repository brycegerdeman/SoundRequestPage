<?php

// get the submitted banner id
$banner = $_POST['banner'];
// get the submitted sound URL
$snd_url = $_POST['snd_url'];

// if post data is missing fail and die
if (!$banner || !$snd_url) {
	echo "Request failed. Try resubmitting the form.";
	die();
}

// test - echos the posted data
echo $banner;
echo $snd_url;

?>
