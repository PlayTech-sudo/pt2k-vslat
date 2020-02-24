<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'vlog');
define('DB_USER','');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
/*
$ID = $_POST['user'];
$Password = $_POST['pass'];
*/
function SignIn()
{
session_start();   //starting the session for user profile page
if(!empty($_POST['uname']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysql_query("SELECT *  FROM registration where uname = '$_POST[uname]' AND password = '$_POST[password]'") or die(mysql_error());
	 $row = mysql_fetch_array($query);
	if(!empty($row['uname']) AND !empty($row['password']))
	{
		$_SESSION['uname'] = $row['password'];
		header("location:dashbord.html");

	}
	else
	{
		echo "<script type='text/javascript'>alert('Wrong Password or userName!')</script>";
	}
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>

