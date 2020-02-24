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
echo "<h3>Welcome</h3>";
$sql = "SELECT cid,cname,cuname,cemail,cmno  FROM  registration Where cid = '".$_GET['cid']."'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();
printf("%d\n%s\n%s\n%s\n%d\n",$row["cid"],$row["cname"],$row["cuname"],$row["cemail"],$row["cmno"]);
echo "<br>";


$vid = $_SESSION['vid'];
//echo $vname = $_SESSION['vname'];
$vuname = $_SESSION['vuname'];
//echo $vemail = $_SESSION['vemail'];


$sql1 = "SELECT vid,vname,vuname,vemail,vmno FROM  registration1 Where vid = '".$vid."'";
$result1 = $conn->query($sql1);

$row1 = $result1->fetch_assoc();
printf("\n%d\n%s\n%s\n%s\n%d\n",$row1["vid"],$row1["vname"],$row1["vuname"],$row1["vemail"],$row1["vmno"]);
echo "<br>";

date_default_timezone_set("Asia/Kolkata");
echo date("M,d,Y h:i:s A") . "\n";
echo "<br>";

$sql3 = "INSERT INTO `transaction` ( `cid`, `cuname`, `cemail`, `cmno`, `vid`, `vuname`, `vemail`, `vmno`) VALUES ( '".$row['cid']."','".$row['cuname']."','".$row['cemail']."','".$row['cmno']."','".$row1['vid']."','".$row1['vuname']."','".$row1['vemail']."','".$row1['vmno']."')";

$result2 = $conn->query($sql3);
$conn->close();

?>


	
   