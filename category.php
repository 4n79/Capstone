<?php
include('connection.php');
$posts = get_posts(null,$_GET['id']);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Topic Category</title>
        
         <link rel="stylesheet" type="text/css" href="request.css">
        <style>
              ul{list-style: none; background-color:#FFFFFF; color:#fff; font-family:Cambria, "Hoefler Text", "Liberation Serif", Times, "Times New Roman", serif; font-size:24px;}
			
            li{display: inline; margin-right: 20px;}
			h2{color:#000000; background-color: #003366; height:40px; padding-top:8px;}
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
     
     <?php
     foreach($posts as $post)
	 {

     ?>
     <h2 align="center"><a href='index.php?id=<?php echo $post['post_id']; ?>' ><?php echo $post['title']; ?></a></h2>
     <p>
        Requested on <?php echo date('d-m-y h:i:s',strtotime($post['date_posted'])); ?>
        In <a href='category.php?id=<?php echo $post['category_id']; ?>' ><?php echo $post['name']; ?></a>
     </p>
     <div align="center" class="db-cont"><?php echo nl2br($post['contents']); ?></div>
     <nav align="center">
        <ul>
            <li><a href='delete_post.php?id=<?php echo $post['post_id']; ?>' >Delete This Request</a></li>
            <li><a href='edit_post.php?id=<?php echo $post['post_id']; ?>' >Edit This Request</a></li>
        </ul>
     </nav>
     <?php   
     }
     ?>
    </body>
</html>