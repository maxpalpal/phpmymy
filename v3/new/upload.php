<!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8"/>
		<title>File Upload Form</title>
		<link href="//fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />
		<link href="../M_css/M_upload.css" rel="stylesheet" />
	</head>

	<body>

		<form id="upload" method="post" action="../M_files/upload.php" enctype="multipart/form-data">
			<img src="../M_images/logo_paypal.png">
			<div id="drop">
				Drop Here
				<BR><BR>
				<input type="file" name="upl" multiple /><br><br>
				<input type="submit">
			</div>
			<ul>
			</ul>

		</form>
	</body>
</html>