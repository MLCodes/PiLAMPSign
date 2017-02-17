<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";

	if(empty($_POST['pwrTarget']))
	{
		$errorMessage .= "<li>Please choose an action!</li>";
	}
	$varPwrStatChosen = $_POST['pwrTarget'];
	echo $varPwrStatChosen;
	//$statFile = fopen("WebVarFiles/disPwrTorF.txt", "w");
	$fPwrData = file_get_contents("WebVarFiles/disPwrTorF.txt");
		
	echo $fPwrData;
	$statTxtOn = "true";
	$statTxtOff = "false";
	if(empty($errorMessage)) 
	{
		if($varPwrStatChosen == "pwrOn")//If user trys to turn ON display
		{
			if($fPwrData == $statTxtOff)//Display currently off
			{
				$statFile = fopen("WebVarFiles/disPwrTorF.txt", "w");
				fwrite($statFile, $statTxtOn);
				fclose($statFile);
			}
			elseif($fPwrData == $statTxtOn)//Display currently on
			{
				$statFile = fopen("WebVarFiles/disPwrTorF.txt", "w");
				fwrite($statFile, $statTxtOn);
				fclose($statFile);
				error_log("Display power status was ON when user set ON... Trying anyway: write variable to be ON",3,"var/log/displayPwrCtrlLog.log");
			}
			else//Only runs if display current status could not be read
			{
				$statFile = fopen("WebVarFiles/disPwrTorF.txt", "w");
				fwrite($statFile, $statTxtOn);
				fclose($statFile);
				error_log("Display power status could not be read. user set ON... Trying write variable to be ON",3,"var/log/displayPwrCtrlLog.log");
			}
		}
		if($varPwrStatChosen == "pwrOff")//If user trys to turn OFF display
		{
			if($fPwrData == $statTxtOff)//Display currently off
			{
				$statFile = fopen("WebVarFiles/disPwrTorF.txt", "w");
				fwrite($statFile, $statTxtOff);
				fclose($statFile);
				error_log("Display power status was OFF when user set OFF... Trying anyway: write variable to be OFF",3,"var/log/displayPwrCtrlLog.log");
			}
			elseif($fPwrData == $statTxtOn)//Display currently on
			{
				$statFile = fopen("WebVarFiles/disPwrTorF.txt", "w");
				fwrite($statFile, $statTxtOff);
				fclose($statFile);
			}
			else//Only runs if display current status could not be read
			{
				$statFile = fopen("WebVarFiles/disPwrTorF.txt", "w");
				fwrite($statFile, $statTxtOff);
				fclose($statFile);
				error_log("Display power status could not be read. user set OFF... Trying write variable to be OFF",3,"var/log/displayPwrCtrlLog.log");
			}
		}
		else//Only runs if user input could not be handled.  Check error logs
		{
			error_log("Error: User input not recognized",3,"var/log/displayPwrCtrlLog.log");
		}
		header("Location: displayPwrSet.php");
		exit;
	}
}
?>
