<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vlog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo $_SESSION['cid'];
$sql1 = "SELECT * FROM transaction where cid ='".$_SESSION['cid']."'";
$result1 = $conn->query($sql1);
// $row = $result1->fetch_assoc();
?>
<link rel="stylesheet" href="../table.css">
<div align="center">
	
    <table  border="5" cellspacing="30"align="center">
        <tr>
            <th colspan="45">
               <center> <font size="7">Visitors Information</font></center></th></tr>

        <tr>
		  <th><u><h1>vid</h1></u></th>
            <th><h1>Visitor Name</h1></th>
            <th><h1>Email_Id</h1></th>
			<th><h1>Mobile_No</h1></th>
			
            
        </tr>
<?php


    
    while($row = $result1->fetch_assoc()) {
		
?>
       <td><font size="5"> <?php echo  $row["vid"]?></td></font>
		<td><font size="5"><?php echo  $row["vuname"]?></td></font> 
		<td><font size="5"><?php echo  $row["vemail"]?></td></font>
		<td><font size="5"><?php echo  $row["vmno"]?></td></font>
        
		

     </tr>

<?php
    }


$conn->close();
?> 
</body>
<?php
if(isset ($_GET['msg']))
            {

            echo $_GET['msg'];

            }
?>