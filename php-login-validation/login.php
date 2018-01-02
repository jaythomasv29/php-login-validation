<?php
//Store the posted data into variables
// The form data is sent with the HTTP POST method
$userID = $_POST["userID"]; //POST method for sensitive data from  index.php
$passwd = $_POST["passwd"]; //POST method for sensitive data from  index.php
//Ex. 1
//Most efficient coding method
//	######### $userID and $passwd are all hardcoded ##########

//validation of $userID and $passwd
if(($userID=="page1") && ($passwd=="alpha"))
	header("Location:page1.php");	//redirect to page1
else if(($userID=="page2") && ($passwd=="beta"))
	header("Location:page2.php"); //redirect to page2
else if(($userID=="page3") && ($passwd=="gamma"))
	header("Location:page3.php");	//redirect to page3
else
	header("Location:error.php");
?>
