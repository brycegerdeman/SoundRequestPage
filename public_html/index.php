<html>

<head>

	<link rel="stylesheet" href="style.css">

</head>

<body>

<div id="page">
		
	<form id="sndform" enctype="multipart/form-data" method="post" action="submitted.php">
		
		<div id="inputsblock">
			<div class="inputwrap">
				<label for="banner">Banner ID:</label><br>
				<input type="text" name="banner" placeholder="900...">
			</div>
			<div class="inputwrap">
				<label for="">Upload your sound:<br>
				<span id="hint">(Accepted filetype: mp3)</span></label>
				<br>
				<input type="hidden" name="MAX_FILE_SIZE" value="500000">
				<input id="fileupload" type="file" name="soundreq" accept=".mp3">
			</div>
			<input id="submit" type="submit">
		</div>

	</form>

</div>

</body>

</html>
