<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['targetAction']))
	{
		$errorMessage .= "<li>Please choose an action!</li>";
	}
	$varActChosen = $_POST['targetAction'];
	echo $varActChosen;
	if(empty($errorMessage)) 
	{
		if($varActChosen == "slideshow")
		{
			header("Location: slidesModify.html");
		}
		elseif($varActChosen == "refresh")
		{
			header("Location: pgmRefresh.html");
		}
		elseif($varActChosen == "omxplayer")
		{
			header("Location: videoModify.html");
		}
		elseif($varActChosen == "display")
		{
			header("Location: displayPwrCtrl.php");
		}
		exit;
	}
}
?>

