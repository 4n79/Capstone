<?php
include("db.php");
if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$designation=$_POST['designation'];
	$message=$_POST['message'];
	$insert=mysql_query("insert into comments(name,designation,message)values('$name','$designation','$message')")or die(mysql_error());
	header("Location:index.php");
	}
?>