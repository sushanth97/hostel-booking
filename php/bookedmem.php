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


$sql = "SELECT DISTINCT name, department,rollno,roomno FROM `count` WHERE flag LIKE '1' order by roomno";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
<tr>
<th>student name</th>
<th>department</th>
<th>rollno</th>
<th>roomno</th>

</tr>";
    while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['department'] . "</td>";
		echo "<td>" . $row['rollno'] . "</td>";
		echo "<td>" . $row['roomno'] . "</td>";
         echo "</tr>";
       // echo  $row["sno"].  $row["studname"].  $row["regnumber"]. $row["sem"].  $row["company"].$["mobile"]. $row["bus"]. "<br><br><br><br>";
}}
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