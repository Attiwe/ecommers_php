
<?php
include("connect.php");

// echo'<pre>';

// print_r($_FILES);
// exit();
 
  
@$name = $_POST['name'];
@$price = $_POST['price'];
// @$image = $_POST['image'];
@$cat = $_POST['cat'];
@$count = $_POST['count']; 
@$brand = $_POST['brand'];
@$discra = $_POST['descr'];
$allow_ext = ['jpg','jpeg','gif','bmb','png'];
 $all = [];
for($i = 0; $i < count($_FILES['image']['name']); $i++){

    
 
$name_image= $_FILES['image']['name'][$i]; 
$name_temp = $_FILES['image']['tmp_name'][ $i]; 
$name_sive = $_FILES['image']['size'][ $i]; 
 

$image_exp = explode(".",$name_image);
 $image_ext = end($image_exp);


if(!in_array( $image_ext,$allow_ext )){
       echo"the extan not foud ";
       exit();
};

$new_image = time() ."_". rand(1 , 1000)."_". 'product' . "." . $image_ext;
array_push($all , $new_image);
move_uploaded_file($name_temp,"../image/$new_image");



}

$imgs =  implode(',' , $all);
 $insert = "INSERT INTO products( name, price, image, cat, count, brand, descr) 
VALUES ('$name','$price','$imgs','$cat','$count','$brand','$discra')";

$conn->query($insert);

 header("Location:../product.php");
 