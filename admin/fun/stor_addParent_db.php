<?php 
 
 
 include('connect.php');
 

 $name = $_POST['name'];
 $parent = $_POST['parent'];

 $insert = "INSERT INTO  catagory ( name ,  parent ) VALUES (' $name ','$parent')";
 
 
$conn->query($insert);

header("location:../show_cat_parent.php");