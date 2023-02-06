<?php
include_once('resources/init.php');
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

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="request.css">
        <title>Add Topic Category</title>
		<style>
		ul{list-style: none; background-color:#FFFFFF; color:#fff; font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; font-size:24px;}
			
            li{display: inline; margin-right: 20px;}
			h2{color:#fff; background-color: #003366; height:40px; padding-top:8px;}
			.label{background-color: #660099; font-size:24px;color:#fff; height:35px;}
		   
			p
			{margin-left:25em; font-size:20px; font-style:normal; color:#660099;}
			.db-cont
			{
				color:#FF6600;
				font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif;
				font-size:20px;
				font-style:normal;
			}
			echo
			{
				color:#fff;
			}
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
        </ul>
     </nav>
    
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
    </body>
</html>