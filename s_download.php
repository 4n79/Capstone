 <?php 
error_reporting(0); 
include_once 'connection.php';
 ?>

<!DOCTYPE HTML>
<html>
<head>

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/div.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div id="p9" style="height:auto;">
<div id="p2">Peer Suport</div>
  <div id="p6"  >
  <div id='cssmenu' >
<ul>
		         <li class='active'><a href="home1.php"><span>Home</span></a></li>
				 <li><a href="fsdownloader1.php"><span>Download Documents</span></a>
				<li><a href="add_category.php"><span>Add Request</span></a></li>
				<li><a href="nextlogin.php"><span>uploader</span></a></li>
		        <li><a href="slogout.php"><span>Logout</span></a></li>
				
		      </ul>
</div>
<div  style="height:600px;width:auto;overflow:scroll;">
 

	<table width="100%" border="1">
    <tr>
    <th colspan="4" style="color:#1f7898">UPLOADED FILES <label></th>
    </tr>
    <tr style="color:#1f7898;">
    <td>File Name & (ID Of Student)</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    </tr>
    <?php
	$sql="SELECT * FROM studentupload";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="suploader/<?php echo $row['file'] ?>" target="_blank">download your files</a></td>
        </tr>
        <?php
	}
	?>
    </table>
</div>
	
	  <div id="p11"  >

<ul id="navlist">
 <li><a href="uploaderreg1.php"><font color="#FFFFFF">UPLOADER SINUP</font></a></li> <li><a href="bca.php"><font color="#FFFFFF">FEEDBACK</font></a></li>
		        
 <li><a href="contact.php"><font color="#FFFFFF">CONTACT</font></a></li>
				
				 <li><a href="about.php"><font color="#FFFFFF">FAQ</font></a></li>
		      </ul>
			  </div>
			  


	
	
	




</body>
</html>




