<?php
$myfile = fopen("WebVarFiles/newVidLinkTmp.txt", "r");
$txtContent = fgets($myfile);
fclose($myfile);
?>
<html>
<head>
	<title>Confirm New Video Link</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<p>
		Please confirm that this is the correct link:<br>
	</p>
	
	<p>
	  <code>
		<?php echo "$txtContent"?>
	  </code>
	</p>

	<p>
	<form action="vidLinkConfirm.php" method="post">
		<input type="submit" name="formSubmit" value="Submit" />
		<p><b><i>*Note: The video specified above will begin playing immediately after you click the 'Submit' button above.</i></b></p>
	</form>
	</p>
</body>
</html>