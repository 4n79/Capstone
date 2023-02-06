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
<style>
body { background-color: #fff; color: #000; padding: 0; margin: 0; }
.container { width: 98%; margin: auto; margin-bottom:auto; }
.container .ism-slider { width: 98%;height:250px;margin-left: auto; margin-right: auto;margin-bottom:auto;}
</style>
<link rel='stylesheet' href='css/my-slider.css' />
<link rel="stylesheet" href="ism/css/my-slider.css"/>
<script src="ism/js/ism-2.1.js"></script>
</head>
<body>
<div id="p9" style="height:auto;">
<div id="p2">Peer Suport</div>
  <div id="p6"  >
  <div id='cssmenu' >
<ul>
		         <li class='active'><a href="home1.php"><span>Home</span></a></li>
				 <li><a href="fsdownloader1.php"><span>Download Documents</span></a>
				 <li><a href="uploaderfiles1.php"><span>Upload Documeents</span></a></li>
				<li><a href="addwithdraw.php"><span>Add or withdraw</span></a></li>
		        <li><a href="contact.php"><span>Logout</span></a></li>
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
 
<h3 style="color:#1f7898">UPLOAD STUDY MATERIAL</h3>

<div class="p5">
	<form action="sfuploaderaccess.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  </label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>upload any files(PDF, DOC, EXE, ZIP,etc...)</label>
        <?php
	}
	?>
	</div></div>

 <div id="p11" style="margin-bottom:0px;" >

<ul id="navlist">
  <li><a href="bca.php"><font color="#FFFFFF">FEEDBACK</font></a></li>
		        
 <li><a href="contact.php"><font color="#FFFFFF">CONTACT</font></a></li>
				
				 <li><a href="about.php"><font color="#FFFFFF">FAQ</font></a></li>
		      </ul>
			  </div>
			  


	



</body>
</html>
