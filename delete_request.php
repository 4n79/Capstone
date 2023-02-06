<?php
include('connection.php');
include('blog.php');

if(!isset($_GET['id'])){
    header("Location:edit_and_delete.php");
    die();
}
delete(request,$_GET['id']);

header("Location:edit_and_delete.php");
die();