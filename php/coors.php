<!DOCTYPE html>
<html>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";
$response=array();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$roomno=$_POST['roomno'];

$connection = new mysqli($servername, $username, $password, $dbname);
$roomno=$_POST['roomno'];
if($result =$connection->query("SELECT count(*) cc FROM count WHERE roomno LIKE '$roomno'"))
{   
	$row=$result->fetch_assoc();
	if($row['cc']==3)
	{
		echo "ROOM IS FULL";
		
		//		echo "<script>alert('ROOM IS FULL')</script>";
			//	include ("rooms.html");
	}
	else
	{
	
$sql = "SELECT distinct name, rollno FROM `hostelform` WHERE roomno LIKE '$roomno'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
<tr>
<th>student name</th>
<th>rollno</th>

</tr>";
    while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['rollno'] . "</td>";
         echo "</tr>";
       // echo  $row["sno"].  $row["studname"].  $row["regnumber"]. $row["sem"].  $row["company"].$["mobile"]. $row["bus"]. "<br><br><br><br>";
    }
}
 else {
    echo "ROOM IS EMPTY";
}

mysqli_close($conn);

	}
	
	$result->close();
}
else{
	echo "count not";
}


?> 

</body>
</html>