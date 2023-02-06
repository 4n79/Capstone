<?php
include_once('resources/init.php');
$post = get_request($_GET['id']);
if(isset($_POST['title'],$_POST['contents'],$_POST['Topics Category']))
{
    
    $errors = array();
    
    $title      = trim($_POST['title']);
    $contents   = trim($_POST['contents']);
    
    if(empty($title))
	{
     $errors[] = 'You need to supply a title';
    }
    else if(strlen($title)>255)
	{
     $errors[] = 'The title can not be longer than 255 characters';   
    }
    
    if(empty($contents))
	{
     $errors[] = 'You need to supply some text';   
    }
    if(!category_exists('id',$_POST['Topics Category']))
	{
    $errors[] = 'That Topics Category does not exists';   
    }
    
    if(empty($errors))
	{
        edit_post($_GET['id'],$title,$contents,$_POST['Topics Category']);
       
        header("Location:index.php?id={$post[0]['post_id']}");
        die();
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Edit Requests</title>
		       <style>
            ul{list-style: none;}
            li{display: inline; margin-right: 20px;}
        </style>
    </head>
    <body>
	<nav>
        <ul>
            <li><a href='index.php' >Requested Items</a></li>
            <li><a href='add_category.php' >Add Topics Category</a></li>
            <li><a href='add_request.php' >Add Requests</a></li>
             <li><a href='category_list.php' >All The Topic Category List</a></li>
           
        </ul>
     </nav>

             <h2>Edit Requests</h2>
        <?php
        if(isset($errors) && !empty($errors)){
            echo"<ul><li>",implode("</li><li>",$errors),"</li></ul>";
        }
        ?>
        <form action='' method='post'>
     <div>
        <label for='title'>Title</label>
         <input type='text' name='title' value='<?php echo $post[0]['title']; ?>' />
     </div>
     <div>
         <label for='contents'>Content</label>
         <textarea name='contents' cols=20 rows=10><?php echo $post[0]['contents']; ?></textarea>
      </div>
     <div>
       <label for='Topics Category'>Topics Category</label>
       <select name='Topics Category'>
        <?php
        foreach(get_categories() as $Topics Category)
		{
         $selected = ($Topics Category['name'] == $post[0]['name']) ? 'selected' : '';   
         ?>
         <option value='<?php echo $Topics Category['id'] ?>' <?php echo $selected; ?> ><?php echo $Topics Category['name'] ?></option>
         <?php
        }
        ?>
       </select>
     </div>
     <p><input type='submit' value='Add Request' /></p>
     </form>
    </body>
</html>