<?php

$id = $_GET['id'];
include('fun/connect.php');


$deldte = "DELETE FROM user where id = '$id' ";
$conn->query($deldte );



header("location:user.php");


 