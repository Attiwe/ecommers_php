<?php
include('connect.php');
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';
@$userName= $_POST['userName'];
@$Password= $_POST['password'];
@$email= $_POST['email'];
@$gender= $_POST['gender'];
@$prives= $_POST['prives'];
@$pr= $_POST['pr'];
 
$insert = "INSERT INTO user(  userName ,  Password ,  email ,  pr ,  gender ,  prives ) 
VALUES ('$userName','$Password','$email','$pr','$gender','$prives ')";

$conn->query($insert);
header("location:../user.php");

 