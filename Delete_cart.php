<?php

include('admin/fun/connect.php');
 $id = $_GET['id'];
  

$delete  = "DELETE FROM cart WHERE id_product = '$id' ";
$result  = $conn->query($delete);
 

header('Location: cart.php');
 