<?php

$conn = mysqli_connect('localhost' , 'root' , '' , 'vmsfyp');

if($conn->connect_error){
  die("connection failed" .conn->connect_error);
}

if(isset($_POST['text'])){
  $text = $_POST['text'];

  $query = "INSERT INTO qrcode (qrtext,timein) VALUES('$text', NOW())";


  
   $data = mysqli_query($conn,$query );

   if(($data)>0){
      header('location:guard.php');

 }
};
$conn->close();
 
?>