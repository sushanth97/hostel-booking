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

$connection = new mysqli($servername, $username, $password, $dbname);
if($result =$connection->query("SELECT count(*) cc FROM count WHERE department LIKE 'CSE' and regflag LIKE '1' "))
{   
	$row=$result->fetch_assoc();
	printf("CSE:%d",$row['cc']);
}	
echo "<br>";
echo "<br>";
if($result =$connection->query("SELECT count(*) cc FROM count WHERE department LIKE 'ECE' and regflag LIKE '1'"))
{   
	$row=$result->fetch_assoc();
	printf("ECE:%d",$row['cc']);
}	
echo "<br>";
echo "<br>";
if($result =$connection->query("SELECT count(*) cc FROM count WHERE department LIKE 'EEE' and regflag LIKE '1'"))
{   
	$row=$result->fetch_assoc();
	printf("EEE:%d",$row['cc']);
}	
	echo "<br>";
echo "<br>";
$sql = "SELECT distinct name, rollno,department FROM `count` WHERE regflag LIKE '1' order by department ";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
<tr>
<th>student name</th>
<th>rollno</th>
<th>department</th>

</tr>";
    while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['rollno'] . "</td>";
		echo "<td>" . $row['department'] . "</td>";
         echo "</tr>";
       // echo  $row["sno"].  $row["studname"].  $row["regnumber"]. $row["sem"].  $row["company"].$["mobile"]. $row["bus"]. "<br><br><br><br>";
    }


mysqli_close($conn);

	}
	
	$result->close();


?> 
<form method='post' action='..\html\adminchoice.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>
<form method='post' action='..\html\login.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>HOME</button></td></tr>
</table>
</form>

</body>
</html>