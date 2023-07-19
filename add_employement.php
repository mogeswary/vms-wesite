<?php include ('connection.php');?>




<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>
   <link rel="stylesheet" type="text/css" href="register.css">
</head>

<body>
   <div class="form-container">
      
      <form action="" method="post">
         <h3>Register now</h3>
         <?php
         if (isset($message)) 
         {
            foreach ($message as $message) {
               echo '<div class="message">'.$message.'</div>';
            }
            }
         

         ?>
      



         <input type="text" name="name" required placeholder="enter your name">
         <input type="email" name="email" required placeholder="enter your email">
         <input type="password" name="password" required placeholder=" enter your password">
         <input type="cpassword" name="cpassword" required placeholder="confirm your password">
         <input type="tel" name="phonenumber" required placeholder="enter your phonenumber">
         <input type="text" name="address" required placeholder="enter your houseaddress">


         <input type="submit" name="submit" value="Register" class="form-btn">

      </form>
   </div>




</body>
</html>



<?php
if(isset($_POST['submit']))
{
   $name = $_POST['name'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $cpassword = $_POST['cpassword'];
   $phonenumber = $_POST['phonenumber'];
   $address = $_POST['address'];
   $image = $_POST['image'];

   $query = "INSERT INTO  userform (name , email , password , phonenumber , address, image) VALUES ('$name','$email', '$password' , '$phonenumber', '$address', '$image' ) ";



   $data = mysqli_query($conn,$query );

   if(($data)>0){
      header('location:cover_page.php');

 }
};

?>









