<?php
$db_server ='localhost';
$db_user ='root';
$db_pass ='';
$db_name ='project';

$connection = mysqli_connect($db_server,$db_user,$db_pass);

if($connection)
{
echo("success");
}
else
{
echo("error");
}
?>