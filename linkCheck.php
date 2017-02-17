
<?php
$myfile = fopen("WebVarFiles/newLinkTmp.txt", "r");
$txtContent = fgets($myfile);
fclose($myfile);
?>
<html>
<head>
	<title>Confirm New Content Link</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<p>
		Please confirm that this is the correct link:<br>
	</p>
	
	<p>
	 <code>
		<b><?php echo "$txtContent"?></b>
	 </code>
	</p>

	<p>
	<form action="linkConfirm.php" method="post">
		<input type="submit" name="formSubmit" value="Submit" />
		<p><b><i>*Note: The content at the URL specified above will load immediately after you click the 'Submit' button above.</i></b></p>
	</form>
	</p>
</body>
</html>