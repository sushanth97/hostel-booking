<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'project';
$response = array();

$connection = mysqli_connect($db_server,$db_user,$db_pass);
$db = mysqli_select_db($connection,$db_name);

if($_SERVER['REQUEST_METHOD']==='POST')
{
	session_start();
$rollno=$_SESSION['value'];
//$pass=$_POST['password'];

$query = mysqli_query($connection,"UPDATE `count` SET roomno='',flag='' WHERE rollno LIKE '$rollno'");
if($query)
{
	/*$result = mysql_fetch_assoc($query);
	$response['rollno'] = $result['rollno'];
	echo $response['rollno'];*/
	//echo"Room has been Canceled Successfully";
	echo"<script>alert('Room has been Canceled Successfully')</script>";
	include("..\html\prehostelbook.html");
	
}
else
{
	echo "Failed";
}
}
else{
	echo 'server';
}

?>