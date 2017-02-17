<?php
if($_POST['formSubmit'] == "Submit")
{
	$errorMessage = "";
	
	if(empty($_POST['refreshTarget']))
	{
		$errorMessage .= "<li>Please choose an action!</li>";
	}
	$varPgmChosen = $_POST['refreshTarget'];
	echo $varPgmChosen;
	if(empty($errorMessage)) 
	{
		if($varPgmChosen == "slidesRefresh")//Writes to the file so Watchdog calls refresh on Chromium
		{
			$file1 = fopen("WebVarFiles/refreshTorF.txt", "w");
			$fdata = fgets($file1);
			echo $fdata;
			$txt1 = "0";
			$txt2 = "1";
			if($fdata == $txt2)
			{
				fwrite($file1, $txt1);
				fclose($file1);
			}
			else
			{
				fwrite($file1, $txt2);
				fclose($file1);
			}
			//fclose($myfile);
			//header("Location: pgmRefresh.html");
		}
		//The code below will trigger a bash script that will kill any existing Chromium or omxPlayer instances
		//before starting a fresh chromium session.
		elseif($varPgmChosen == "chromeSwitchTo")//Writes to the file so Watchdog calls to start Chromium
		{
			$file2 = fopen("WebVarFiles/slidesStartTorF.txt", "w");
			$fdata = fgets($file2);
			echo $fdata;
			$txt1 = "0";
			$txt2 = "1";
			if($fdata == $txt2)
			{
				fwrite($file2, $txt1);
				fclose($file2);
			}
			else
			{
				fwrite($file2, $txt2);
				fclose($file2);
			}
			//fclose($myfile);
			//header("Location: pgmRefresh.html");
			//exec('/home/pi/refresh.sh');
		}
		//The code below will trigger a bash script that will kill any existing Chromium or omxPlayer instances
		//before starting a fresh omxPlayer session.
		elseif($varPgmChosen == "omxSwitchTo")
		{
			$file3 = fopen("WebVarFiles/playerStartTorF.txt", "w");//Writes to the file so Watchdog calls to start omxPlayer
			$fdata = fgets($file3);
			echo $fdata;
			$txt1 = "0";
			$txt2 = "1";
			if($fdata == $txt2)
			{
				fwrite($file3, $txt1);
				fclose($file3);
			}
			else
			{
				fwrite($file3, $txt2);
				fclose($file3);
			}
			//fclose($myfile);
			//header("Location: slidesModify.html");
			//exec('/home/pi/refresh.sh');
			//header("Location: pgmRefresh.html");
		}
		header("Location: index.html");
		exit;
	}
}
?>

