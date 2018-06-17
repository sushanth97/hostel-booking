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
$name=$_POST['username'];
$pass=$_POST['password'];
$conn = new mysqli($db_server,$db_user,$db_pass, $db_name);
if($result =$conn->query("SELECT count(*) cc FROM `count` WHERE rollno LIKE '$name' ;"))
{   
	$row=$result->fetch_assoc();
		if($row['cc'] == 1)
		{
if($result =$conn->query("SELECT count(*) cc FROM `count` WHERE rollno LIKE '$name' and logflag LIKE '';"))
{   
	$row=$result->fetch_assoc();
	
if($row['cc'] == 1)
{
$query = mysqli_query($connection,"UPDATE `count` SET password='$pass' ,logflag='1' WHERE rollno LIKE '$name'");
if($query )
{
	/*$result = mysql_fetch_assoc($query);
	$response['rollno'] = $result['rollno'];
	echo $response['rollno'];*/
	//echo"executed";
	echo "<script>alert('Register Success')</script>";
	include("..\html\login.html");
	
}
else
{
	echo "Query";
}
}
else{
	echo "<script>alert('U Have already Registered')</script>";
	include("..\html\login.html");
	/*echo "<p style='text-align:center;color:blue;font-size:20'>U Have already Registered</p>";
	echo "<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";*/
}
}
else{
	echo "<script>alert('U ARE NOT A VALID USER')</script>";
	include("..\html\register.html");
	
	/*echo "<p style='text-align:center;color:blue;font-size:20'>U ARE NOT A VALID USER </p>";
	echo "<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";*/
}
}
else
{
	echo "<script>alert('U ARE NOT A VALID USER')</script>";
	include("..\html\login.html");
	/*echo "<p style='text-align:center;color:blue;font-size:20'>U ARE NOT A VALID USER </p>";
	echo "<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";*/
}
}}
else{
	echo "server";
}

?>