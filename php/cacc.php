<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cdetails';
$connection = mysqli_connect($db_server,$db_user,$db_pass);
if($connection)
{
$db = mysqli_select_db($connection,$db_name);
$name=$_POST['name'];
$gender=$_POST['gender'];

$password=$_POST['pwd1'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$city=$_POST['city'];

$pin=$_POST['pin'];

$query="insert into users(name,email,phone,password,city,pin,gender)values('$name','$email','$phone','$password','$city','$pin','$gender')";
$result = mysqli_query($connection,$query);
if($result)
{
include("e-farms1.html");
}
else
{
	echo "not inserted";
}
}
else{
	echo"no conn";
}
	
?>