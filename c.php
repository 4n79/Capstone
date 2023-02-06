
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
$B=$_POST['PASSWD'];
$C=$_POST['contact'];
$D=$_POST['email'];
$E=$_POST['nam'];


mysql_query("INSERT INTO stu(RID,PASSWD,contact,email,nam)VALUES('$A', '$B','$C','$D','$E')");
header("location:reg1.php?remarks=success");
mysql_close($con);
?>