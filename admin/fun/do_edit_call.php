<?php

// echo'<pre>';
// print_r($_POST);
// echo'</pre>';

include('connect.php');
$userName =$_POST['userName']; 
$email =$_POST['email']; 
$gender =$_POST['gender']; 
 $prem =$_POST['pr']; 
 $prives =$_POST['prives']; 

 
$insert = "INSERT INTO  user  (userName , email ,  gender ,  pr ,  prives )
 VALUES ( '$userName ',  '$email ' ,  '$gender ' , '$prem ', '$prives ' )";

 $conn->query($insert);
 header("location:../user.php");/////////////////////////////////////////