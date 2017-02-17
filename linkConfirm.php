<?php
//$myfile = fopen("newLink.txt", "r");
//echo fgets($myfile);
//fclose($myfile);

if($_POST['formSubmit'] == "Submit")
{
	$file1 = file_get_contents("WebVarFiles/newLinkTmp.txt");
	$path2 = "WebVarFiles/newLink.txt";
	$file2 = file_get_contents($path2);
	if ($file1 !== $file2)
	{
    	file_put_contents($path2, $file1);
		header("Location: linkUpdated.html");
		exit;	
//		exit;
	}
}
?>
