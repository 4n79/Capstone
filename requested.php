<?php
include('connection.php');
include('blog.php');
$request = get_posts((isset($_GET['id']))? $_GET['id'] : null); 
?>
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
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
.container { width: 100%; margin: auto; margin-bottom:auto; }
.container .ism-slider { width: 100%;height:300px;margin-left: auto; margin-right: auto;margin-bottom:auto;}
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
				<li><a href="s_download.php"><span>Download Documents</span></a></li>
				<li><a href="requestcourse.php"><span>Add Request</span></a></li> 
				<li><a href="nextlogin.php"><span>uploader</span></a></li>
		        <li><a href="slogout.php"><span>Logout</span></a></li>
				
		      </ul>
</div>
</div>


<div id="p3" style="height:300px;">
<div class="p4" style="width:21%;">


<form action="" method="post" >
<div style="height:230px;width:100px;"> 
				  <TABLE BORDER='2' BGCOLOR='#f2f2f2' cellpadding=4 cellspacing=5 height="230" width="100">
				  <tr style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				  <TD rowspan=5>
				  <img src="images/p-4.jpg" alt="" class="blog_img img-responsive"  height='160' width='160'/>
				  </TD>
				   <td rowspan=5> WELCOME:<BR><?php echo $a['RID']; ?></td>
				  </TR>
				  <tr></tr>
				  <tr></tr>
				 <tr></tr>
				 <tr></tr>
				  <TR style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				  <TD colspan=2>NAME: <?php echo $a['nam']; ?></TD>
				  </TR>
				   <tr style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				  <TD colspan=2>course:<?php echo $a['contact']; ?></td>
				  </tr>
				  <TR style="background-color:#1f7898;font-weight:bold;font-size:15px;color:#fff;">
				  <TD  colspan=2 >Email:<?php echo $a['email']; ?></td>
				  </TR>
				  
				  
				  
				  </TABLE></div>
				  </form>
				  
				  

</div>
<div class="p5" style="width:79%;"> 



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


  </div></div>

<div id="p01" style="height:400px;">
<div class="pp1" style="height:400px;overflow:scroll;">
 <button style="color:#1f7898;"><a href="requested.php">REQUESTED NOTICE</a></button>
			
			 <button style="color:#1f7898;"><a href="general.php">GENERAL NOTICE </a></button>



  <?php
     foreach($request as $post)
	 {
      ?>
       <h4>-------------------------------------------------------------------------------------------------------------------------</h4>
	    <p>
		  	 <span style="color:#1f7898">Broad topic name:</span> <span ?id=<?php echo $post['category_id']; ?>' ><?php echo $post['name']; ?></span><br>
     
       <span style="color:#1f7898">Sub topic name:</span><span?id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></span></h2><br>
    
       
     
        <span style="color:#1f7898">Description: :</span> <span class="db-cont"><?php echo nl2br($post['contents']); ?></p></span>
		
      </p>
     <?php   
     }
     ?>
	

</div>
<div class="pp2" style="height:400px;overflow:scroll;">


<h3 style="color:#1f7898">UPLOADER CONTENTS</h3>

	<?php


                    $query = mysql_query("SELECT * FROM `reg_stu`");

                    while ($rows = mysql_fetch_array($query))
                        { 
   
   
   
   $a=$rows['RID'];
	  $b=$rows['TOPIC'];
	 echo"$a-$b<br>";	
} 
   $query = mysql_query("SELECT * FROM `add`");

                    while ($rows = mysql_fetch_array($query))
                        { 
   
   
   
   $a=$rows['RID'];
	  $b=$rows['topic'];
	 echo"$a-$b<br>";	
} 


?>



	
</div>


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









<?php
}
?>	
