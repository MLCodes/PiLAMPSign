<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['formLink']))
	{
		$errorMessage .= "<li>You need to enter a link!</li>";
	}
		
	$varVidLink = $_POST['formLink'];
	if(empty($errorMessage)) 
	{
		$fs = fopen("WebVarFiles/newVidLinkTmp.txt","w");
		fwrite($fs,$varVidLink . "\n");
		fclose($fs);
		
		header("Location: vidLinkCheck.php");
		exit;
	}
}
?>
