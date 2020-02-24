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


$cname = "";
$cuname = "";
$password = "";
$cemail = "";
$cmno = "";
$addr = "";



if(isset($_POST['cname'])){
$cname=$_POST["cname"];
}
if(isset($_POST['cuname'])){
$cuname=$_POST["cuname"];
}
if(isset($_POST['password'])){
$password=$_POST["password"];
}
if(isset($_POST['cemail'])){
$cemail=$_POST["cemail"];
}

if(isset($_POST['cmno'])){
$cmno=$_POST["cmno"];
}
if(isset($_POST['addr'])){
$addr=$_POST["addr"];
}

$success=0;
$status="Active";
$sql = "INSERT INTO  `registration` (`cname`, `cuname`, `password`, `cemail` ,`cmno`,`addr`) 
VALUES ('$cname','$cuname','$password','$cemail','$cmno','$addr')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
