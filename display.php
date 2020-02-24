<?php
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

$sql1 = "SELECT * FROM transaction";
$result = $conn->query($sql1);


?>
<link rel="stylesheet" href="table.css">
<div align="center">
	
    <table  border="5" cellspacing="30"align="center">
        <tr>
            <th colspan="45">
               <center> <font size="7">Company and Visitor Information</font></center></th></tr>

        <tr>
		  <th><u><h1>cid</h1></u></th>
            <th><h1>Company Name</h1></th>
            <th><h1>Email_Id</h1></th>
            <th><h1>Mobile_No</h1></th>
            <th><u><h1>vid</h1></u></th>
            <th><h1>Visitor Name</h1></th>
            <th><h1>Email_Id</h1></th>
            <th><h1>Mobile_No</h1></th>
            
        </tr>
<?php


    
    while($row = $result->fetch_assoc()) {

		
?>
       <td><font size="5"> <?php echo  $row["cid"]?></td></font>
        <td><font size="5"><?php echo  $row["cuname"]?></td></font> 
        <td><font size="5"><?php echo  $row["cemail"]?></td></font>
        <td><font size="5"><?php echo  $row["cmno"]?></td></font>
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