<?php
$statFile = fopen("WebVarFiles/disPwrTorF.txt", "r");
$readCurStat = fgets($statFile);
$readError = "Error: The display status file could not be read.";
if($readCurStat == "true")
{
	$disCurStat = 1;
	$reportStat = "The display is currently <b>ON</b>";
}
elseif($readCurStat == "false")
{
	$disCurStat = 0;
	$reportStat = "The display is currently <b>OFF</b>";
}
else
{
	$reportStat = $readError;
}
fclose($statFile);
?>
<html>
<head>
	<title>Control Display Power</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<p>
		Current display power state:<br>
	</p>	
	<p>
		<?php echo "$reportStat"?>
	</p>
	<p>
		Control display power state:<br>
	</p>
	<p>
	<form action="disPwrConfirm.php" method="post">
		<input type="radio" name="pwrTarget" value="pwrOn">Turn the display <b>ON</b><br>
		<input type="radio" name="pwrTarget" value="pwrOff">Turn the display <b>OFF</b><br>
		<input type="submit" name="formSubmit" value="Submit" />
		<p><b><i>*Note: The selection specified above will execute immediately after you click the 'Submit' button above.</i></b></p>
	</form>
	</p>
</body>
</html>