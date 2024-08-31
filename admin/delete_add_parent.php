<?php

$id = $_GET['id'];
 
include('fun/connect.php');


$deldte = "DELETE FROM `catagory` WHERE id = '$id' ";
$conn->query($deldte);
 
 

header("location:show_cat_parent.php");

 