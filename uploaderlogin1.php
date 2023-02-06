 <?php 
error_reporting(0);   
	
	session_start();
	extract($_REQUEST);
	if($submit){
		include('connection.php');
		$r="select * from reg_stu where RID='$RID' and PASSWD='$PASSWD' ";
	
		$result=mysql_query($r);
		
		
		if($row=mysql_fetch_array($result)){
			header("location:s_home1.php");
			$_SESSION['S_NO']=$row[0];
		
		}else{
			echo "Failed";
		}
	}       
?>
<!DOCTYPE HTML>
<html>
<head>

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
<div id="p9">
<div id="p2">Peer Suport</div>
  <div id="p6"  >
  <div id='cssmenu' >
<ul>
		         <li class='active'><a href="home1.php"><span>Home</span></a></li>
				 <li><a href="bca.php"><span>About Us</span></a>
				 <li><a href="choosecourse.php"><span>Course</span></a></li>
				<li><a href="service.php"><span>Our Team</span></a></li>
		        <li><a href="contact.php"><span>Contact</span></a></li>
		      </ul>
</div>
		      
		    

</div>


<div id="p3">
<div class="p4">
<div class='container'>

<div class="ism-slider" id="my-slider">
  <ol>
    <li>
      <img src="ism/image/slides/flower-729514_1280.jpg">
      <div class="ism-caption ism-caption-0">peer review</div>
    </li>
    <li>
      <img src="ism/image/slides/beautiful-701678_1280.jpg">
      <div class="ism-caption ism-caption-0">peer review</div>
    </li>
    <li>
      <img src="ism/image/slides/summer-192179_1280.jpg">
      <div class="ism-caption ism-caption-0">peer review</div>
    </li>
  </ol>
</div>
</div>


</div>
<div class="p5"> 


  
			 <div style="height:250px;width:100%;float:right;background-color:#1f7898;"><marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();"><ul style="font-weight:bold;font-size:15px;color:#fff;">
			 
			 <h1>NOTIFICATION</h1> 
			 <li>peer support
			 
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




<div id="p06">
<h1><center>PEER SUPPORT MANAGEMENT</center></h1>
<center>
					     <form action="" method="post" name="reg"  onSubmit="return validateForm()">
						
						 <fieldset>
						 <legend>login form of uploader</legend>
						  <div style="background-color:#616161;">
						 
		
					    
						    	<span>Registration ID</span>
						    	<span><input type="text" class="form-control" name="RID" placeholder="Reg id"></span>
						    
						    
						    	<span>passsword</span>
						    	<span><input type="text" class="form-control" name="PASSWD" placeholder="Password"></span><br><br>
						    
						   
						   
						   		<center><input type="submit" value="LOGIN" name="submit"></center></div>
								</fieldset>
								
						  
					    </form>
</center>
</div>


<div id="p11">
<div class="p44">
<ul>
		         <li><a href="studentlogin1.php"><font color="#FFFFFF">STUDENT LOGIN</font></a></li>
				 <li><a href="reg1.php"><font color="#FFFFFF">STUDENT SINUP</font></a></li>
				 <li><a href="uploaderreg1.php"><font color="#FFFFFF">UPLOADER SINUP</font></a></li>

		      </ul>
			  </div>
			  
			  
			  <div class="p55">
			  <ul id="ppp">
		         <li><a href="about.php"><font color="#FFFFFF">CONTACT</font></a></li>
				 <li><a href="bca.php"><font color="#FFFFFF">FEEDBACK</font></a></li>
				 <li><a href="about.php"><font color="#FFFFFF">FAQ</font></a></li>
				 
		      </ul>
			  </div>
			  
			  </div></div>
</body>
</html>




