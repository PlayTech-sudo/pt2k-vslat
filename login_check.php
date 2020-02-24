<?php
include('conn.php');
session_start(); 
 

function SignIn($link)
{

  //starting the session for user profile page
if(!empty($_POST['vuname']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
    $query = mysqli_query($link,"SELECT *  FROM registration1 where vuname = '".$_POST['vuname']."' AND password = '".$_POST['password']."'") or die("error".mysqli_error($link));
     $row = mysqli_fetch_array($query);
    if(!empty($row['vuname']) AND !empty($row['password']))
    {
        $_SESSION['vuname'] = $row['vuname'];
        $_SESSION['vid'] = $row['vid'];
        $_SESSION['vemail'] = $row['vemail'];
        header("location:index.php");



    }
    else
    {
        echo "<script type='text/javascript'>alert('Wrong Password or userName!')</script>";
    }
}
}
if(isset($_POST['submit']))
{
    SignIn($link);
}

?>

