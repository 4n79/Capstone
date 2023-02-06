<?php
include_once('resources/init.php');

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
        
        header("Location:index.php?id={$id}");
        die();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Add Requests</title>
       <link rel="stylesheet" type="text/css" href="request.css">
        <style>
              ul{list-style: none; background-color:#FFFFFF; color:#fff; font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; font-size:24px;}
			
            li{display: inline; margin-right: 20px;}
			h2{color:#fff; background-color: #003366; height:40px; padding-top:8px;}
			.label{background-color: #660099; font-size:24px;color:#fff; height:35px;}
       
        </style>
    </head>
    <body>
    
    <div id="upmost_header">
    <img src="../Images/upper_header1.jpg" onMouseOver="this.src='../Images/upper-header2.jpg'" onMouseOut="this.src='../Images/upper_header1.jpg'" height="200" width="1333" alt="h1">
    </div>
    
	<nav align="center">
    
        <ul>
            <li><a href='add_category.php' >Add Title Category</a></li>
           <li><a href='add_post.php' >Add  Requests</a></li>
            <li><a href='index.php' >Requested Items</a></li>
             <li><a href='category_list.php' >All The Topic Category List</a></li>
        </ul></td></tr></table>
     </nav>
    
        <h2 align="center">Add Requests</h2>
        <?php
        if(isset($errors) && !empty($errors)){
            echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?>
        
        <form action='' method='post'>
     <div align="center">
     <div class="titlee">
        <label for='title'>Title</label><br></div>
        
        <div id="inputt">
         <input type='text' name='title' class="textbox" value='<?php if(isset($_POST['title'])) echo $_POST['title']; ?>' /></div>
     </div>
     
     
     <div align="center">
     <div class="contentt">
         <label for='contents'>What is Your Content Expectation</label></div>
         
         <div id="textareaa">
         <textarea name='contents' cols=100 rows=12><?php if(isset($_POST['contents'])) echo $_POST['contents']; ?></textarea>
      </div></div>
      
     <div align="center">
     <div class="categoryy">
       <label for='category'>Please! Choose One Topic Category</label></div>
       <div id="selectcate">
       <select name='category'>
        <?php
        foreach(get_categories() as $category)
		{
         ?>
         <option value='<?php echo $category['id'] ?>'><?php echo $category['name'] ?></option>
         <?php
        }
        ?>
       </select></div>
     </div>
     <br>
     <p><input type='submit' value='Add Requests' /></p>
     </form>
    </body>
</html>