<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$response=array();

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$roomno=$_POST['roomno'];

if($result =$conn->query("SELECT count(*) cc FROM hostelform WHERE roomno LIKE '$roomno'"))
{   
	$row=$result->fetch_assoc();
	printf("total:%d",$row['cc']);
	$result->close();
}
else{
	echo "count not";
}
?>