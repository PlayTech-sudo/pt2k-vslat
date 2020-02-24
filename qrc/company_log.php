<!DOCTYPE html>
<html>
<head>
  <title>QR CODE GENERATOR</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8">
<meta name="description" content="QR Code Generator ">

<meta name="keywords" content="qr code,QR CODE,QR,CODE,HTML, CSS, XML, JavaScript,php,mysql,bootstrap">

<meta name="author" content="Developer">

<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit]{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
    text-decoration: none;

}

input[type=submit]:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */
.modal {
     /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
#qrSucc
{
  width: 90%;
  margin:  auto;
  text-align: center;
}
#qrSucc a
{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    text-align: center;
    text-decoration: none;
}
</style>
</head>
<body>
    <?php 
  include "meRaviQr/qrlib.php";
  include "config.php";
  if(isset($_POST['create']))
  {
    $var1 =  $_POST['http://localhost'];
    $var2 = $_POST['visitor'];
    $var3 = $_POST['id=?']
    $qrImgName = "company".rand();
    if($var1=="" && $var2=="" && $var3=="")
    {
      echo "<script>alert('Please Enter Your Name And Msg For QR Code');</script>";
    }
    elseif($em=="")
    {
      echo "<script>alert('Please Enter QR Code Msg');</script>";
    }
    elseif($name=="")
    {
      echo "<script>alert('Please Enter Your Name');</script>";
    }
    else
    {
    $dev = " ...Developed";
    $final = $var1.$var2.$var3;
    $qrs = QRcode::png($final,"userQr/$qrImgName.png","H","3","3");
    $qrimage = $qrImgName.".png";
    $workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode".$qrImgName.".png";
    $insQr = $meravi->insertQr($name,$final,$qrimage,$qrlink);
    if($insQr==true)
    {
      echo "<script>alert('Thank You $name. Success Create Your QR Code'); window.location='index.php?success=$qrimage';</script>";

    }
    else
    {
      echo "<script>alert('cant create QR Code');</script>";
    }
  }
 }
  ?>
  <?php 
  if(isset($_GET['success']))
  {
  ?>
  <div id="qrSucc">
  <div class="modal-content animate container">
    <?php 
    ?>
 
    <img src="userQr/<?php echo $_GET['success']; ?>" alt="">
    <?php 
$workDir = $_SERVER['HTTP_HOST'];
    $qrlink = $workDir."/qrcode/userQr/".$_GET['success'];
    ?>
     
    <input type="text" value="<?php echo $qrlink; ?>" readonly>
    <br><br>
<a href="download.php?download=<?php echo $_GET['success']; ?>">Download Now</a>
<br>
 <br><br>
<a href="login.php?login=<?php echo $_GET['success']; ?>">Login</a>
    
     </div></div>
  <?php
}
else
{
  ?>
<div id="id01" class="modal">
  
  <form class="modal-content animate" method="post" enctype="multipart/form-data">
    <div class="container">
      <h2 align="center">You Are Welcome To QR Code Generator</h2>
      <label for="uname"><b>Your Name</b></label>
      <input type="text" name="name" value="<?php if(isset($_POST['create'])){ echo $_POST['name']; } ?>">

      <label for="psw"><b> Email Id</b></label>
      <input type="text" name="email" value="<?php if(isset($_POST['create'])){ echo $_POST['email']; } ?>">
        
      <input type="submit" value="Generate Your Own QR Code" name="create">
    
    </div>
  </form>
    <?php 
}
   ?>
</div>

</body>
</html>
