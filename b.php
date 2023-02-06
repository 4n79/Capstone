
<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "peer";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$A=$_POST['RID'];

$C=$_POST['PASSWD'];
$F=$_POST['TOPIC'];



mysql_query("INSERT INTO reg_stu(RID,nam,PASSWD,contact,email,TOPIC)VALUES('$A', '$B', '$C','$D','$E','$F')");
header("location:uploaderreg1.php?remarks=success");
mysql_close($con);
?>