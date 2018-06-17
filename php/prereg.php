<html>
<head>
<!--<p style="font-size:40;text-align:center;color:red;background-color:green">KONGU HOSTEL</p>-->
<style>
.button{
font-size:1.2em;
background-color:orange;	
}
.xx{ background-color:darkgreen;
width:1800px;
line-height:0px;
height:165px;
color:white;
text-align:center;
float:left;
font-size:20px;
position:relative;
right:180px;
margin:-10px;
}
.xx h4{
color:yellow;
}
.bgimg1{position:absolute;
top:30px;
left:70px;
}
.bgimg2{position:absolute;
top:125px;
left:665px;
}

.bgimg3{position:absolute;
top:30px;
left:1350px;
}

</style>
</head>
<body>


<?php
$db_server = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'project';
$response = array();
//$conn = new mysqli($db_server,$db_user,$db_pass);

$conn = mysqli_connect($db_server,$db_user,$db_pass);
$db = mysqli_select_db($conn,$db_name);
session_start();
$rollno=$_SESSION['value'];


$sql = "SELECT distinct name, rollno,department,programme FROM `count` WHERE rollno LIKE '$rollno' and regflag=''";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
	echo"<pre class='xx'><h1>KONGU ENGINEERING COLLEGE</h1>
(Autonomous)
<h4>AFFLIATED By NAAC WITH 'A' GRADE</h4>
Perundurai Erode-638060</pre>
<img src='new1.png' width='100' height='100' class='bgimg1'></img>
<img src='new2.png' width='100' height='100' class='bgimg3'></img>
<img src='..\images\logo2.jpg' width='100' height='30' class='bgimg2'></img>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
";
    echo "<table align='center' border='1'>
<tr>
<th>student name</th>
<th>rollno</th>
<th>department</th>
<th>programme</th>

</tr>";
    while($row = mysqli_fetch_assoc($result)) {
	    echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
		echo "<td>" . $row['rollno'] . "</td>";
		echo "<td>" . $row['department'] . "</td>";
		echo "<td>" . $row['programme'] . "</td>";
         echo "</tr>";
       // echo  $row["sno"].  $row["studname"].  $row["regnumber"]. $row["sem"].  $row["company"].$["mobile"]. $row["bus"]. "<br><br><br><br>";
    }
	echo "<form method='post' action='..\php\count.php'><table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>Proceed</td></tr>
</table>
</form>";
}
else {
    //echo "<p style='text-align:center;color:blue;font-size:20'>U Have already Registered</p>";
	echo "<script>alert('U Have already Registered')</script>";
	include("..\html\prehostelbook.html");
	/*echo"<form method='post' action='..\html\prehostelbook.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>OK</button></td></tr>
</table>
</form>";
*/
}

mysqli_close($conn);


	
	$result->close();
?>
<form method='post' action='..\html\prehostelbook.html'>
<table align='center'>
<tr></tr><tr></tr>
<tr></tr><tr><td><button class=button type='submit'>BACK</button></td></tr>
</table>
</form>

</body>
</html>
