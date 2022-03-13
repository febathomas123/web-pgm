<?php
$mysql_host='localhost';
$mysql_user='root';
$mysql_password='';
$con=mysqli_connect($mysql_host,$mysql_user,$mysql_password);
if(mysqli_select_db($con,'database'))
{
 echo ' .';
}
else
{
 echo 'connection failed';
}
?>
