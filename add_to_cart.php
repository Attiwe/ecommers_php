<?php
session_start();
include('admin/fun/connect.php');

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if (!isset($_SESSION['id'])) {
    header('Location: login.php');
    exit();
}

$user_id = $_SESSION['id'];
 
$sql = "SELECT quantity FROM cart WHERE id_user = '$user_id' AND id_product = '$id'";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $quantity = $row['quantity'] + 1;

    $update_sql = "UPDATE cart SET quantity = '$quantity' WHERE id_user = '$user_id' AND id_product = '$id'";
    mysqli_query($conn, $update_sql);
}else {
    $quantity = 1;

    $insert_sql = "INSERT INTO cart (id_user, id_product, quantity) VALUES( '$user_id', '$id', '$quantity')";
    $ins = $conn->query($insert_sql);



}


header('Location: cart.php');
exit();
