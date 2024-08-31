
<!-- Recuer
1-get id 
2- delete data; -->


<?php
$id = $_GET['id'];
include('fun/connect.php');
// echo $id ;

$deldte = "DELETE FROM  products WHERE id = '$id' ";
$conn->query($deldte);
header("location:product.php");
