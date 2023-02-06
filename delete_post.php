<?php
include('connection.php');

if(!isset($_GET['id']))
{
    header("Location:edit_and_delete.php");
    die();
}
delete(request,$_GET['id']);

header("Location:edit_and_delete.php");
die();