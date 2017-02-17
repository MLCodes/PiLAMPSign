<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formLink']))
	{
		$errorMessage .= "<li>You need to enter a link!</li>";
	}
		
	$varLink = $_POST['formLink'];
	if(empty($errorMessage)) 
	{
		$fs = fopen("WebVarFiles/newLinkTmp.txt","w");
		fwrite($fs,$varLink . "\n");
		fclose($fs);
		
		header("Location: linkCheck.php");
		exit;
	}
}
?>
