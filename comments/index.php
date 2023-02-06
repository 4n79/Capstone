<?php
include("db.php");
$select=mysql_query("select * from comments");
while($row=mysql_fetch_array($select))
{
	echo "<div id='cmt_current'>";
	echo "<div id='name_id'>".$row['name']."</div>";
	echo "<div id='msg_id'>".$row['message']."</div>";
	echo "</div><br />";
}
?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Comments</title>
<link rel="stylesheet" type="text/css" href="cmt.css">
<script type="text/javascript" src="cmt.js"></script>
</head>

<body bgcolor="#FFFFFF">
<form name="comment" method="post" action="comment.php" onSubmit="return validation()">

<table width="1000" border="0" cellspacing="3" cellpadding="3"class="table" >
  <tr>
    <td align="right" id="tags">Name :</td>
    <td><input type="text" name="name" id="name_id" placeholder="Name"></td>
  </tr>
  <tr>
    <td align="right" id="tags">Designation :</td>
    <td><input type="text" name="designation" id="designation_id" placeholder="Designation"></td>
  </tr>
  <tr>
    <td align="right" id="tags"></td>
    <td><textarea name="message" id="message_id" placeholder="Write Your Comments"></textarea></td>
  </tr>
  <tr>
  <td align="right" id="tags"></td>
  <td><input type="submit" name="submit" id="submit" value="Submit this Comment"></td>
  </tr>
</table>
</form>
</body>
</html>