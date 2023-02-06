<?php
include('connection.php');
session_start();
$s_n=$_SESSION['s_n'];
if($s_n==""){
		header("location:studentlogin1.php");
	}else{
$sql="SELECT * FROM `stu` WHERE s_n = '$s_n'";
			 
		     $run=mysql_query($sql);
			 $a=mysql_fetch_array($run);
			 
?>

<!DOCTYPE HTML>
<html>
<head>

<link href="css/styles.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/div.css" rel='stylesheet' type='text/css' />
</head>
<body>
<div id="p9">
<div id="p2">Peer Suport</div>
  <div id="p6"  >
  <div id='cssmenu' >
<ul>
		        <li class='active'><a href="home1.php"><span>Home</span></a></li>
				<li><a href="s_download.php"><span>Download Documents</span></a></li>
				<li><a href="requestcourse.php"><span>Add Request</span></a></li> 
		        <li><a href="slogout.php"><span>Logout</span></a></li>
				<li><a href="nextlogin.php"><span>uploader</span></a></li>
		      </ul>
</div>
</div>


<div id="p3">
<div class="p4">


<form action="" method="post" >
<div style="height:230px;width:100px;"> 
				  <TABLE BORDER='2' BGCOLOR='#f2f2f2' cellpadding=4 cellspacing=5 height="230" width="100">
				  <tr style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				  <TD rowspan=5>
				  <img src="images/p-4.jpg" alt="" class="blog_img img-responsive"  height='160' width='160'/>
				  </TD>
				   <td rowspan=5> WELCOME:<BR><?php echo $a['RID']; ?></td>
				  </TR>
				  </TABLE></div>
				  </form>
				  
				  

</div>
<div class="p5"> 


  </div></div>

<div id="p01" style="height:400px;">
<div class="pp1" style="height:400px;overflow:scroll;">

 <button><a href="requested.php">Requested topic</a></button>
			
			 <button><a href="general.php">General notice </a></button>


  
			 <marquee behavior="scroll" direction="up" onMouseOver="this.stop();" onMouseOut="this.start();"><ul style="font-weight:bold;font-size:15px;color:#0f0f0f;">
			 
			 <h1>NOTIFICATION</h1> 
			 <li>peer support</li>
			  <li>peer support</li>
			 
			 <li>peer support</li>
			 <li>peer support</li>
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
	

</div>
<div class="pp2" style="height:400px;overflow:scroll;">

<h3>Uploader Notification</h3>


	<?php


                    $query = mysql_query("SELECT * FROM `reg_stu`");

                    while ($rows = mysql_fetch_array($query))
                        { 
   
   
   
   $a=$rows['RID'];
	  $b=$rows['TOPIC'];
	 echo"$a-$b<br>";	
} 

?>



	
</div>


</div>






<div id="p11" style="margin-top:0%;height:200px;">
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









<?php
}
?>	
