<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Qr Gen</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
 	include "qrlib.php";
 	include "config.php";
 	if(isset($_POST['create']))
 	{
 		$em =  $_POST['email'];
 		$name = $_POST['name'];
 		if($em=="" && $name=="")
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
 		$dev = "NK";
 		$final = $em.$dev;
 			QRcode::png($final,"new.png","H","3","3");
 		$insQr = $meravi->insertQr($name,$final);
 		if($insQr==true)
 		{
 			echo "<script>alert('Thank You $qrUname. Success Create Your QR Code');</script>";
 			header("location:generate.php?success");
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
  	<img src="new.png" alt="">
  	<a href="generate.php">Go Back To Gnerate Again</a>
  	<a href="logout.php" class="btn btn-primary">Logout</a>
  	
  <?php
}
else
{
	?>
		<form method="post">
			<label for="UserName">Your Name:</label>
		<input type="text" name="name" value="<?php if(isset($_POST['create'])){ echo $_POST['name']; } ?>">
		<br><br>
		<label for="QRCon">QR Code Msg</label>
		<input type="text" name="email" value="<?php if(isset($_POST['create'])){ echo $_POST['email']; } ?>">
		<br><br>
		<input type="submit" name="create" value="Generate Now">
	</form>
	<?php 
}
	 ?>
	


</body>
</html>