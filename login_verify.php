<?php
include('conn.php');



function SignIn($link)
{
session_start();   //starting the session for user profile page
if(!empty($_POST['cuname']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
    // echo "111";
    $query = mysqli_query($link,"SELECT *  FROM registration where cuname = '".$_POST['cuname']."' AND password = '".$_POST['password']."'") or die("error".mysqli_error($link));
     $row = mysqli_fetch_array($query);
    if(!empty($row['cuname']) AND !empty($row['password']))
    {
    
        $_SESSION['cuname'] = $row['cuname'];
        $_SESSION['cid'] = $row['cid'];
        $_SESSION['cemail'] = $row['cemail'];
        header("location:qrc/reports.php");

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

