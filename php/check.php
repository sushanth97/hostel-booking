<?php
$db_server='localhost';
$db_user='root';
$db_pass='';
$db_name='project';
$response=array();

$connection=mysqli_connect($db_server,$db_user,$db_pass);
if($connection)
{
	//echo "conn";
}
else{
	//echo "No conn";
}
$db=mysqli_select_db($connection,$db_name);
if($db)
{
	//echo "database";
}
else{
	//echo "No db";
}
session_start();
$_SESSION['value']=$_POST['username'];
$username=$_SESSION['value'];
$password=$_POST['password'];

if($_SERVER['REQUEST_METHOD']==='POST')
{
$query12=mysqli_query($connection,"SELECT * FROM `count` WHERE rollno LIKE '$username' and password LIKE '$password';");	

if($query12)
{
		$result=mysqli_fetch_assoc($query12);
		//echo $result;	
		$response['rollno']=$result['rollno'];
		$response['password']=$result['password'];
		if($response['rollno'])
		{
		include("..\html\prehostelbook.html");
		}
		else
		{
		echo "enter valid number or register";
		}
}
else
{
	echo "enter valid";
}
	
}
else
{
	echo 'server';
	
}
?>