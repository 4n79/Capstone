<?php
session_start();
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "peer";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");

$A=$_POST['rid'];
$B=$_POST['nam'];

$E=$_POST['topic'];
mysql_query("INSERT INTO tables(rid,nam,topic)VALUES('$A', '$B','$E')");
header("location:admin.php?remarks=success");
mysql_close($con);
?>