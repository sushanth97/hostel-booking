<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'project';
//$response = array();

$connection = mysqli_connect($db_server,$db_user,$db_pass);
$db = mysqli_select_db($connection,$db_name);

//if($_SERVER['REQUEST_METHOD']==='POST')
	if($connection)
{
//$name=$_POST['name'];
//$programme=$_POST['programme'];
//$department=$_POST['department'];
session_start();
$rollno=$_SESSION['value'];




/*echo $name;
echo $programme;
echo $department;
echo $phoneno;*/
//$query="insert into c(sno,name,programme,department,phoneno)values('1','$name','$programme','$department','$phoneno')";
$result = mysqli_query($connection,"UPDATE `count` SET regflag='1' WHERE rollno LIKE '$rollno'");
//$result = mysqli_query($connection,$query);

if ($result)
{
	/*$result = mysql_fetch_assoc($query);
	$response['rollno'] = $result['rollno'];
	echo $response['rollno'];*/
	echo "<script>alert('U have pre-registered successfully')</script>";
	include("..\html\login.html");
	/*echo "<p style='text-align:center;color:blue;font-size:20'>U have pre-registered successfully</p>";
	echo "<form method='post' action='..\html\login.html'><table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</td></tr>
</table>
</form>";*/
}
else
{
	echo"U have already registered";
}
}
else{
	echo 'server';
}

?>