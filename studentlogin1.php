

 <?php 
error_reporting(0);   
	
	session_start();
	extract($_REQUEST);
	if($submit){
		include('connection.php');
		$r="select * from stu where RID='$RID' and PASSWD='$PASSWD' ";
	
		$result=mysql_query($r);
		
		
		if($row=mysql_fetch_array($result)){
			header("location:s_homepage1.php");
			$_SESSION['s_n']=$row[0];
		
		}else{
			 ?>
		<script>
		alert('enter correct reg and passsword');
		</script>
       
        <?php
		}
	}       
?>
<!DOCTYPE HTML>
<html>
<head>
<script type="text/javascript">
function validateForm()
{
var a=document.forms["reg"]["RID"].value;
var b=document.forms["reg"]["PASSWD"].value;
if ((a==null || a=="") && (b==null || b==""))
 {
  alert("All Field must be filled out");
  return false;
  }
if (a==null || a=="")
  {
  alert("registration id  must be filled out");
  return false;
  }
if (b==null || b=="")
  {
  alert("password must be filled out");
  return false;
  }
  }
  </script>

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/div.css" rel='stylesheet' type='text/css' />
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
.container { width: 100%; margin: auto; margin-bottom:auto; }
.container .ism-slider { width: 100%;height:250px;margin-left: auto; margin-right: auto;margin-bottom:auto;}
</style>
<link rel='stylesheet' href='css/my-slider.css' />
<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.1.js"></script>

</head>
<body>
<div id="p9" style="height:auto;">
<div id="p2">Peer Support</div>
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
<fieldset style="margin-top:30px;color:#1f7898;">
<legend style="color:#1f7898">Peer Support Management</legend>
<center>
					     <form action="" method="post" name="reg" onSubmit="return validateForm()">
						 <center style="color:#1f7898">Login</center>
		
					    
						    	<span style="color:#1f7898">Registration ID</span>
						    	<span><input type="text" class="form-control" name="RID" placeholder="Reg_NO"></span><br><br>
						    
						    
						    	<span style="color:#1f7898">password</span>
						    	<span><input type="text" class="form-control" name="PASSWD" placeholder="Password"></span><br><br>
						    
						   
						   
						   		<center><input type="submit" value="LOGIN" name="submit"></center>
								</fieldset>
						  
					    </form>


</center></fieldset>
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
			 </ul>
			 </marquee>	 
	

</div></div></div>


<div id="p01">
<h2 style="color:#1f7898;">WELCOME TO PEER SUPPORT</h2>
<p>
Double rotations are slightly complex version of already explained versions of rotations. To
understand them better, we should take note of each action performed while rotation. Let's first
check how to perform Left-Right rotation. A left-right rotation is combination of left rotation
followed by right rotation.</p>

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




