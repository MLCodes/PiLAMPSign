<?php
$statFile = fopen("WebVarFiles/disPwrTorF.txt", "r");
$readCurStat = fgets($statFile);
$readError = "Error: The display status file could not be read.";
if($readCurStat == "true"){
	$reportStat = "The display is currently <b>ON</b>";
}
elseif($readCurStat == "false"){
	$reportStat = "The display is currently <b>OFF</b>";
}else{
	$reportStat = $readError;
}
fclose($statFile);
?>
<html>
<head>
	<title>Power Control Results</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<p>
	Display power control sent!<br>
	</p>
	<p>
	Power!<br>
	</p>
	<p>
	<?php echo "$reportStat"?>
	</p>
	<p>
	<a href="index.html">Return to main control page.</a>
	</p>
</body>
</html>
