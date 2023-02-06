<?php
include('connection.php');
include('blog.php');
if(isset($_POST['name']))
{
    $name = trim($_POST['name']);
    
    if(empty($name))
	{
        $error = 'You must submit the category name';
    }
    else if(category_exists('name',$name))
	{ 
        $error = 'That category already exists';
    } else if(strlen($name)> 24)
	{
        $error = 'The category name only be up to 24 characters only';
    }

    if(!isset($error))
	{
        add_category($name);
        header("Location:add_post.php");
        die();
    }
}

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
.container .ism-slider { width: 100%;height:250px;margin-left: auto; margin-right: auto;margin-bottom:auto;}
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
		        <li><a href='add_category.php' ><span>Add broad Category</span></a></li>
                <li><a href='add_post.php' ><span>Add  Requests</span></a></li>
                <li><a href='index.php' ><span>Requested Items</span></a></li>
                <li><a href='category_list.php' ><span>All The Topic Category List</span></a></li>
				 <li><a href="slogout.php"><span>Logout</span></a></li>
				
		      </ul>
</div>
</div>

<div id="p3">
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
  
  
  
  
  
<div id="p01">
<div class="pp1">

 
		 <h2 align="center">Add Topic Category</h2>
     <p>
        <?php if(isset($error))
		{
            echo $error;
            } ?>
     </p>
     <div align="center">
      <form action='' method='post'>
      <div class="label">
        <label for='name'>Name </label></div>
        <div id="inputt">
        <input type='text' name='name' class="textbox"/></div>
        <input type='submit' value='Add Category' align="right" />
      </form>
      </div>

</div>
<div class="pp2">



	
</div>


</div>






  
  
  

<div id="p11">
<div class="p44">
<ul>
		        <li><a href="about.php"><font color="#FFFFFF">CONTACT</font></a></li>
                <li><a href="bca.php"><font color="#FFFFFF">FEEDBACK</font></a></li>
				
		      </ul>
			  </div>
			  
			  
			  <div class="p55">
			  <ul id="ppp">
			  <li><a href="about.php"><font color="#FFFFFF">FAQ</font></a></li>
		         
				
				 
		      </ul>
			  </div>
			  
			  </div></div>
</body>
</html>









<?php
}
?>	
