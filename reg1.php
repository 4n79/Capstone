 <?php 
error_reporting(0);   
    
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
				 <li><a href="bca.php"><span>About Us</span></a>
				 <li><a href="choosecourse.php"><span>Course</span></a></li>
				
		        <li><a href="contact.php"><span>Contact</span></a></li>
		      </ul>
</div>
		      
		    

</div>





<div id="p3">
<div class="p4">

<form name="reg" action="c.php"  onSubmit="return myFunction()" method="post">
<fieldset>
						 <legend>Registration form of student</legend>
					<table height="200" align="left" cellpadding="2" cellspacing="0">
  <tr>
  <td colspan="2">
		<center> <?php 
		$remarks=$_GET['remarks'];
		if ($remarks==null and $remarks=="")
		{
		echo 'Register Here';
		}
		if ($remarks=='success')
		{
		echo 'Registration Success';
		}
		?>	</center>
		 </td>
      </tr>
	   <tr>
    <td><div align="right">REGISTRATION ID:</div></td>
    <td><div style="width:200%;">
						  <?php
include 'connection.php' ;
$tbl_name="tables";
 $query = mysql_query("SELECT rid FROM $tbl_name");

 

 

if($query === FALSE) {
die(mysql_error());  
}
?>
 


 
<?php
 echo '<select style="width:200px;" name="RID">';
 while ($rows = mysql_fetch_array($query))
  {
 
echo '<option value="'. $rows['rid'] .'">';
echo $rows['rid'];
echo '</option>';
}
echo "</select>";
?>
 

</div></td>
  </tr>
  
  
  
   <tr>
    <td><div align="right">NAME:</div></td>
    <td><input type="text" name="nam" placeholder="name" class="form-control" /></td>
  </tr>
    <tr>
    <td><div align="right">PASSWORD:</div></td>
    <td><input id="pass1" type="text" name="PASSWD" placeholder="Password" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right">CONFIRM PASSWORD:</div></td>
    <td><input id="pass2" type="text" name="CPASSWD" placeholder="Confirm Password" class="form-control" /></td>
  </tr>
   <td><div align="right">EMAIL-ID:</div></td>
    <td><input type="text" name="email" placeholder="email-id" class="form-control" /></td>
  </tr>
   <tr>
    <td><div align="right">CONTACT:</div></td>
    <td><input type="text" name="contact" placeholder="contact" class="form-control" /></td>
  </tr>
 

    <tr>
    <td><div align="right"></div></td>
    <div class="p7"><td><input name="submit" type="submit" value="submit" /></td></div>
  </tr>
</table>
</form>

</div>



<div class="p5"> 


  
			 <div style="height:250px;width:100%;float:right;background-color:#1f7898;"><marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();"><ul style="font-weight:bold;font-size:15px;color:#fff;">
			 
			 <h1>NOTIFICATION</h1> 
			 <li>peer support</li>
			 <li>peer support</li>
			 
			 
			 <li>peer support</li>
			 <li>peer support</li>
			 <li>peer support</li>
			 
			 
			 <li>peer support</li>
			 <li>peer support</li>
			 <li>peer support</li>
			 </ul>
			 </marquee>	 
	

</div></div></div>


<div id="p01">
<h2>WELCOME TO PEER SUPPORT</h2>
<p>

Double rotations are slightly complex version of already explained versions of rotations. To
understand them better, we should take note of each action performed while rotation. Let's first
check how to perform Left-Right rotation. A left-right rotation is combination of left rotation
followed by right rotation.</p>

</div>






			  
<div id="p11"  >

<ul id="navlist"> 
 <li><a href="studentlogin1.php"><font color="#FFFFFF">STUDENT LOGIN</font></a></li>
<li><a href="uploaderreg1.php"><font color="#FFFFFF">UPLOADER SINUP</font></a></li>
<li><a href="bca.php"><font color="#FFFFFF">FEEDBACK</font></a></li>
		        
 <li><a href="contact.php"><font color="#FFFFFF">CONTACT</font></a></li>
				
				 <li><a href="about.php"><font color="#FFFFFF">FAQ</font></a></li>
		      </ul>
			  </div>
			  
</body>
</html>




