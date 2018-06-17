<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$response=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$roomno=$_POST['roomno'];

if($result =$conn->query("SELECT rollno cc FROM hostelform WHERE rollno LIKE '15csr217'"))
{   
	$row=$result->fetch_assoc();
	printf("total:%s",$row['cc']);
	$result->close();
}
else{
	echo "count not";
}
?>