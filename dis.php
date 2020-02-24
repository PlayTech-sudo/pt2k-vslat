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



$sql = "SELECT id,fname,uname,email,mno  FROM  registration1";
$result = $conn->query($sql);
?>
<link rel="stylesheet" href="table.css">
<div align="center">
	
    <table  border="5" cellspacing="30"align="center">
        <tr>
            <th colspan="45">
               <center> <font size="7">Visitors Information</font></center></th></tr>

        <tr>
		  <th><u><h1>id</h1></u></th>
            <th><h1>fname</h1></th>
            <th><h1>User_Name</h1></th>
			<th><h1>Email_id</h1></th>
			
            
        </tr>
<?php


    
    while($row = $result->fetch_assoc()) {
		
?>
       <td><font size="5"> <?php echo  $row["id"]?></td></font>
		<td><font size="5"><?php echo  $row["fname"]?></td></font> 
		<td><font size="5"><?php echo  $row["uname"]?></td></font>
		<td><font size="5"><?php echo  $row["email"]?></td></font>
        
		

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