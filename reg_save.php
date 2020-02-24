<?php
include('db_conn.php');


if(isset($_POST['submit']))
  {
$fname=$_POST['fname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mno=$_POST['mno'];
$addr=$_POST['addr'];
$image=$_POST['image'];
$query=mysqli_query($conn,"insert into reg(fname,mname,lname,email,dob,gender,mno,addr,image) value('$fname','$mname,lname,email,dob,gender,mno,addr,image)");

    if ($query) {
    $msg="Visitors Detail has been added.";
  }
  else
    {
      $msg="Something Went Wrong. Please try again";
    }

  
}
