<html>
<body>
<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'project';
$response = array();

$connection =new mysqli($db_server,$db_user,$db_pass);
$db = mysqli_select_db($connection,$db_name);
$roomno=$_POST['roomno'];
session_start();
$rollno=$_SESSION['value'];
if($_SERVER['REQUEST_METHOD']==='POST')
{
	
if($result =$connection->query("SELECT count(*) cc FROM count WHERE roomno LIKE '$roomno'"))
{   
	$row=$result->fetch_assoc();
	if($row['cc']==3)
	{
	//echo "ROOM IS FULL";
	echo "<script>alert('Room Is FULL')</script>";
	include("rooms.html");
	
	}
else
{	
//$query = mysqli_query($connection,"UPDATE `hostelform` SET roomno='$roomno' and flag='1' WHERE rollno LIKE '$rollno'");
$conn = mysqli_connect($db_server,$db_user,$db_pass, $db_name);

$sql = "SELECT DISTINCT department FROM `count` WHERE rollno LIKE '$rollno'";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);
//echo $row['department'];
if($row['department']=='CSE')
{
	if($roomno>=200&&$roomno<=220)
	{	

if($result2 =$connection->query("SELECT flag cc FROM `count` WHERE rollno LIKE '$rollno'"))
{
$row1=$result2->fetch_assoc();
if($row1['cc']==0)
{
//$result2=mysqli_fetch_assoc($query13);
//echo $result2[0];
//if($result2==1)
//{
	$query = mysqli_query($connection,"UPDATE `count` SET roomno='$roomno' , flag='1' WHERE rollno LIKE '$rollno'");
	if($query)
	{
	echo "<script>alert('Room has been Booked Successfully')</script>";
	include("..\html\prehostelbook.html");
	
	
	/*echo "Room has been Booked Successfully";
	echo"<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";
*/
}}
else{
	echo "<script>alert('U have already booked the room')</script>";
	include("..\html\prehostelbook.html");
	
/*	echo " U have already booked the room";
echo"<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";
*/
}
}
}
else{
	echo "<script>alert('select correct room')</script>";
	include("rooms.html");
}}
else if($row['department']=='ECE')
{
if($roomno>=300&&$roomno<=315)
	{	

if($result2 =$connection->query("SELECT flag cc FROM `count` WHERE rollno LIKE '$rollno'"))
{
$row1=$result2->fetch_assoc();
if($row1['cc']==0)
{
//$result2=mysqli_fetch_assoc($query13);
//echo $result2[0];
//if($result2==1)
//{
	$query = mysqli_query($connection,"UPDATE `count` SET roomno='$roomno' , flag='1' WHERE rollno LIKE '$rollno'");
	if($query)
	{
	echo "<script>alert('Room has been Booked Successfully')</script>";
	include("..\html\prehostelbook.html");
	/*echo "Room has been Booked Successfully";
	echo"<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";
*/
}}
else{
	echo "<script>alert('U have already booked the room')</script>";
	include("..\html\prehostelbook.html");
	/*echo " U have already booked the room";
echo"<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";
*/
}
}
}
else{
	//echo "select correct room";
	echo "<script>alert('select correct room')</script>";
	include("rooms.html");

}	
}
else {
	echo "department not working";
}}	
/*else
{
	echo "U have already Booked";
}*/
}}
else{echo "failed";}



?>
</body>
</html>