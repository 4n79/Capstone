 <?php 
error_reporting(0);   
	
	session_start();
	extract($_REQUEST);
	if($submit){
		include('connection.php');
		$r="select * from reg_stu where PASSWD='$PASSWD' ";
	
		$result=mysql_query($r);
		
		
		if($row=mysql_fetch_array($result)){
			header("location:s_home1.php");
			$_SESSION['S_NO']=$row[0];
		
		}else{
		  ?>
		<script>
		alert('Incorrect password');
		</script>
       
        <?php
		}
	}       
?>


<!DOCTYPE HTML>
<html>
<head>

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/div.css" rel='stylesheet' type='text/css' />
</head>
<body>

<div style="background-color:#f2f2f2;">
<div id="p2">Peer Suport</div>
  <div id="p6"  >
  <div id='cssmenu' >
<ul>
		         <li class='active'><a href="home1.php"><span>Home</span></a></li>
				 <li><a href="fsdownloader1.php"><span>Download Documents</span></a>
				<li><a href="service.php"><span>Add Request</span></a></li>
		        <li><a href="slogout.php"><span>Logout</span></a></li>
				
		      </ul>
</div>
</div>



<div style="height:400px;width:100%;">
<h1><center>PEER SUPPORT MANAGEMENT</center></h1>
<center>
					     <form action="" method="post" name="reg"  onSubmit="return validateForm()" >
						
						
						 login form of uploader<br><br>
						  
						 
		
						    	<span>passsword</span>
						    	<span><input type="text" class="form-control" name="PASSWD" placeholder="Password"></span><br><br>
						    
						   
						   
						   		<center><input type="submit" value="LOGIN" name="submit"></center><br>
								
								
								
						  
					    </form>
						<center><a href="uploaderreg1.php"><button>NEW REGISTRATION</button></a></center>
</center>
</div>

 
<div id="p11" style="margin-top:0px;margin-bottom:auto">

	  

<ul id="navlist">
<li><a href="bca.php"><font color="#FFFFFF">FEEDBACK</font></a></li>
		        
 <li><a href="contact.php"><font color="#FFFFFF">CONTACT</font></a></li>
				
				 <li><a href="about.php"><font color="#FFFFFF">FAQ</font></a></li>
		      </ul>
			  </div>
</body>
</html>

