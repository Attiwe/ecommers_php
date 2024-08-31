<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
// exit();

include('admin/fun/connect.php');

@$name = $_POST['name'];
 @$disc = $_POST['disc'];

 $insert =  "INSERT INTO  reviews (name , disc ) VALUES ( '$name ', '$disc')";
 $result = $conn->query($insert) ;
 header("location: admin/comment_admin.php");
 