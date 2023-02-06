<?php
include('connection.php');
include('blog.php');

if(isset($_POST['title'],$_POST['contents'],$_POST['category'])){
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
    
    if(empty($title)){
     $errors[] = 'You need to supply a title';
    }
    else if(strlen($title)>255){
     $errors[] = 'The title can not be longer than 255 characters';   
    }
    
    if(empty($contents)){
     $errors[] = 'You need to supply some text';   
    }
    if(!category_exists('id',$_POST['category'])){
    $errors[] = 'That category does not exists';   
    }
    
    if(empty($errors)){
        add_post($title,$contents,$_POST['category']);
        
        $id = mysql_insert_id();
        
        header("Location:edit_and_delete.php?id={$id}");
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
.container .ism-slider { width: 100%;height:300px;margin-left: auto; margin-right: auto;margin-bottom:auto;}
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
		        <li><a href='add_category.php' ><span>Add broad Category</span></a></li>
                <li><a href='add_post.php' ><span>Add  Requests</span></a></li>
                <li><a href='edit_and_delete.php' ><span>Edit Requested item</span></a></li>
				 <li><a href="slogout.php"><span>Logout</span></a></li>
				
		      </ul>
</div>
</div>

<div id="p3" style="height:300px">
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
  
  
  
  
  
<div  style="color:#1f7898;height:400px;font-weight:bold">

      <?php
		
        if(isset($errors) && !empty($errors)){
            echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?>
        
        <form action='' method='post'><P>	
			<table height="399px" width="100%">
 
	 <tr>
	 <td colspan="2" align="center">Add Requests</td></tr>
		
          <tr>
        <div id="inputt">
	
         <td>Enter Title:</td>
		 <td><input type='text' name='title' class="textbox" value='<?php if(isset($_POST['title'])) echo $_POST['title']; ?>' /></div></td></tr>
         <tr>
		 <td>Description:</td
		 ><td><div id="textareaa"><textarea name='contents' cols=80 rows=6><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
          </div></td></tr>
        <tr>
		<td>select:</td>
		<td><div id="selectcate"></div>
       <select name='category'>
        <?php
        foreach(get_categories() as $category)
		{
        ?>
        <option value='<?php echo $category['id'] ?>'><?php echo $category['name'] ?></option>
        <?php
        }
        ?>
       </select></div></td>
	   </tr>
     <tr><td colspan="2">
     <p><input type='submit' value='Add Requests' /> </p></P></td></tr></table>
     </form>
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
