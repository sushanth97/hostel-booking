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
$username=$_POST['username'];
$password=$_POST['password'];
//echo $username;
//echo $password;

if($_SERVER['REQUEST_METHOD']==='POST')
{
$query12=mysqli_query($connection,"SELECT * FROM `admin` WHERE username LIKE '$username' and password LIKE '$password';");	

if($query12)
{
		$result=mysqli_fetch_assoc($query12);
		//echo $result;	
		$response['username']=$result['username'];
		$response['password']=$result['password'];
		if($response['username'])
		{
		include("..\html\adminchoice.html");
		}
		else
		{
		echo "<script>alert('enter valid number or register')</script>";
		include("..\html\admin.html");
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