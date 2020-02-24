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


$vname = "";
$vuname = "";
$password = "";
$vemail = "";
$dob = "";
$gender = "";
$vmno = "";
$addr = "";



if(isset($_POST['vname'])){
$vname=$_POST["vname"];
}
if(isset($_POST['vuname'])){
$vuname=$_POST["vuname"];
}
if(isset($_POST['password'])){
$password=$_POST["password"];
}
if(isset($_POST['vemail'])){
$vemail=$_POST["vemail"];
}
if(isset($_POST['dob'])){
$dob=$_POST["dob"];
}
if(isset($_POST['gender'])){
$gender=$_POST["gender"];
}
if(isset($_POST['vmno'])){
$vmno=$_POST["vmno"];
}
if(isset($_POST['addr'])){
$addr=$_POST["addr"];
}

$success=0;
$status="Active";
$sql = "INSERT INTO  `registration1` (`vname`, `vuname`, `password`, `vemail` ,`dob`,`gender`,`vmno`,`addr`) 
VALUES ('$vname','$vuname','$password','$vemail','$dob','$gender','$vmno','$addr')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
