<?php
include('connection.php');
include('blog.php');
$request = get_posts((isset($_GET['id']))? $_GET['id'] : null); 
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
				<li><a href="s_download.php"><span>Download Documents</span></a></li>
				<li><a href="requestcourse.php"><span>Add Request</span></a></li> 
		        <li><a href="slogout.php"><span>Logout</span></a></li>
				<li><a href="nextlogin.php"><span>uploader</span></a></li>
		      </ul>
</div>
</div>

<div style="height:700px;width:100%;overflow:scroll;">



	
	  <?php
     foreach($request as $post)
	 {
      ?>
       <h4>-----------------------------------------------------------------</h4>
	   <p>
	   Broad topic name: &nbsp;<span?id=<?php echo $post['category_id']; ?>' ><?php echo $post['name']; ?></span><br>
       Sub topic name:<span id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></span></h2><br>
       Requested on: <?php echo date('d-m-y h:i:s',strtotime($post['date_posted'])); ?><br>
       Description:<span class="db-cont"><?php echo nl2br($post['contents']); ?></p></span></p>
        <nav>
        <ul>
            <li><a href='delete_request.php?id=<?php echo $post['post_id']; ?>' >Delete This Request</a></li>
            <li><a href='edit_post.php?id=<?php echo $post['post_id']; ?>' >Edit This Request</a></li>
        </ul></nav>
  
     <?php   
     }
     ?>





	
	
	
</div>




















<div id="p11">
<div class="p44">
<ul>
		         
		     
			  
			   <li><a href="about.php"><font color="#FFFFFF">CONTACT</font></a></li>
				 <li><a href="bca.php"><font color="#FFFFFF">FEEDBACK</font></a></li>
				  <li><a href="about.php"><font color="#FFFFFF">FAQ</font></a></li></ul>
				  </div>
			  
			  <div class="p55">
			  
			 
			  
			  </div></div>
</body>
</html>







