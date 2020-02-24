<?php
include('conn.php');
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


$aname = "";
$auname = "";
$password = "";
$aemail = "";
$dob = "";
$amno = "";


if(isset($_POST['aname'])){
$aname=$_POST["aname"];
}
if(isset($_POST['auname'])){
$auname=$_POST["auname"];
}
if(isset($_POST['password'])){
$password=$_POST["password"];
}
if(isset($_POST['aemail'])){
$aemail=$_POST["aemail"];
}
if(isset($_POST['dob'])){
$dob=$_POST["dob"];
}

if(isset($_POST['amno'])){
$amno=$_POST["amno"];
}

$success=0;
$status="Active";
$sql = "INSERT INTO  `regadmin` (`aname`, `auname`, `password`, `aemail` ,`dob`,`amno`) 
VALUES ('$aname','$auname','$password','$aemail','$dob','$amno')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
