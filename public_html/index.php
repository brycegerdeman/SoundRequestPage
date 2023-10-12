<html>

<head>

</head>

<body>

<form enctype="multipart/form-data" method="post" action="submitted.php">
	
	<label for="banner">Banner ID:</label>
	<input type="text" name="banner">
	<label for="">Upload your sound:<br>(Accepted filetype: mp3)</label>
	<input type="hidden" name="MAX_FILE_SIZE" value="500000">
	<input type="file" name="soundreq" accept=".mp3">
	<input type="submit">

</form>

</body>

</html>
