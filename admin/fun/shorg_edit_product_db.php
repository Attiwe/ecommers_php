
    <!-- 
    Reuer
    1-shor update in database
    2-dirctor into page product.php -->

<?php
//      echo '<pre>';
//      print_r($_FILES);
//      echo '</pre>';
// exit();
   include("connect.php");
   @$id = $_GET['id'];
 
     
     $userName  = $_POST['name'] ;
     $price     = $_POST['price'];
    //   $image     = $_POST['image'];
     $cat       = $_POST['cat'];
     $brand     = $_POST['brand'];
     $count     = $_POST['count'];
     $descr     = $_POST['descr'];
 
          if($_FILES['image']['error'] === 0){
                   
            $name_image= $_FILES['image']['name']; 
            $name_temp = $_FILES['image']['tmp_name']; 
            $name_sive = $_FILES['image']['size']; 
            $name_sive = $_FILES['image']['error']; 

            $image_exp = explode('.', $name_image );
            
            $image_ext = end($image_exp);

            $allow_ext = ['jpg','jpeg','gif','bmb','png'];

            if(!in_array( $image_ext,$allow_ext )){
                echo"the extan not foud ";
                exit();
            };

            $new_image = time() ."_". round(1 , 1000)."_".$name_image;

            move_uploaded_file($name_temp,"../image/$new_image");

            $updata = "UPDATE  products  
            SET name ='$userName', price ='$price', image ='$new_image ', cat ='$cat', brand ='$brand', count ='$count', descr ='$descr' WHERE id = '$id'";
        

          }else{
            $updata = "UPDATE  products  
            SET name ='$userName', price ='$price',cat ='$cat', brand ='$brand', count ='$count', descr ='$descr' WHERE id = '$id'";
        
          }
 
     
   
    $conn->query( $updata);
    header("location:../product.php");


