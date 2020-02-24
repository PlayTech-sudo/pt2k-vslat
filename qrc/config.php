<?php 
class RaviKoQr
{
  public $server = "127.0.0.1";
  public $user = "root";
  public $pass = "";
  public $dbname = "vlog";
	public $conn;
  public function __construct()
  {
  	$this->conn= new mysqli($this->server,$this->user,$this->pass,$this->dbname);
  	if($this->conn->connect_error)
  	{
  		die("connection failed");
  	}
  }
 	public function insertQr($name,$final,$qrimage,$qrlink)
 	{
 			$sql = "INSERT INTO qrcodes(name,email,qrImg,qrlink) VALUES('$name','$final','$qrimage','$qrlink')";
 			$query = $this->conn->query($sql);
 			return $query;

 	
 	}
 	public function displayImg()
 	{
 		$sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";

 	}
}
$meravi = new RaviKoQr();