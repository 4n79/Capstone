<?php

function add_post($title,$contents,$category){
    $title      = mysql_real_escape_string($title);
    $contents   = mysql_real_escape_string($contents);
    $category   = (int)$category;
    
    mysql_query("INSERT INTO `request` SET
                `cat_id`     = {$category},
                `title`      = '{$title}',
                `contents`   = '{$contents}',
                `date_posted`= NOW()");
}

function edit_post($id,$title,$contents,$category){
    $id         = (int)$id;
    $title      = mysql_real_escape_string($title);
    $contents   = mysql_real_escape_string($contents);
    $category   = (int)$category;
    
    mysql_query("UPDATE `request` SET
                `cat_id`     = {$category},
                `title`      = '{$title}',
                `contents`   = '{$contents}'
                WHERE `id` = {$id}");  
}

function add_category($name){
  $name = mysql_real_escape_string($name);
  
  mysql_query("INSERT INTO `categories` SET `name` = '{$name}'");
}

function delete($table, $id){
    $table = mysql_real_escape_string($table);
    $id    = (int)$id;
    
    mysql_query("DELETE FROM `{$table}` WHERE `id`= {$id} ");
    
}

function get_posts($id = null, $cat_id = null){
    $request = array();
    $query = "SELECT
              `request`.`id` AS `post_id` ,
               `categories`.`id` AS `category_id`,
               `title`,`contents`,`date_posted`,
               `categories`.`name`
               FROM `request`
               INNER JOIN `categories` ON `categories`.`id` = `request`.`cat_id` " ;
    if(isset($id)){
        $id = (int)$id;
        $query .= " WHERE `request`.`id` = {$id} ";
             }
    if(isset($cat_id)){
        $cat_id = (int)$cat_id;
        $query .= " WHERE `cat_id` = {$cat_id} ";
             }         
        
    $query .= "ORDER BY `post_id` DESC";
    
    $query = mysql_query($query);
    
    while($row = mysql_fetch_assoc($query)){
    $request[] = $row;
   }
   return $request;
}

function get_categories($id = null){
   $categories = array();
   
   $query = mysql_query("SELECT `id`,`name` FROM `categories`");
   
   while($row = mysql_fetch_assoc($query)){
    $categories[] = $row;
   }
   
   return $categories;
}

function category_exists($field,$name){
    $name = mysql_real_escape_string($name);
    $field = mysql_real_escape_string($field);
    
    $query = mysql_query("SELECT COUNT(1) FROM categories WHERE `{$field}` = '{$name}'");
    
    return(mysql_result($query,0) == 0)?false : true;
}