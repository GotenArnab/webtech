<?php
session_start();

$cookie_name = "admin";
$cookie_value = "AdminLogin";
setcookie($cookie_name, $cookie_value, time() + (60*60), "/");


$valMsg="";
$valMsg2="";
$error="";
$flag2="";

$adminEmail="Arnob01@gmail.com";
$adminPass="12345678";

if(isset($_POST['submit']))
{
	$emailVal = $_POST['email'];
	$passVal = $_POST['password'];

	if((empty($_POST['email'])) || (strlen($_POST['email'])<4) || !preg_match("[@]",$emailVal))
	{
		$valMsg="*Enter your mail correctly";
		$flag2=1;
	}

	if((empty($_POST['password'])))
	{
		$valMsg2="*Enter your password correctly";
		$flag2=1;
	}

	if($flag2 !=1)
	{   
		if( $adminEmail == $emailVal && $adminPass == $passVal)
		{
		$_SESSION['email'] = $adminEmail;
		header("location: adminprofile.php");
	    }
	    else
	    {
	    	$error="Invalid Email or Password";
	    }
	}

}
?>