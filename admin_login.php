<?php include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="register.css">

</head>
<body>

   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>

      <input type="email" name="email" required placeholder="enter your email">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">


   </form>

</div>

</body>
</html>



<?php
 if(isset($_POST['submit']))
{
   $email = $_POST['email'];
   $password = $_POST['password'];

   $query = "SELECT * FROM registerform WHERE email = '$email' && password = '$password' ";
   $data = mysqli_query($conn, $query);

   $total = mysqli_num_rows($data);

   ///echo $total;

   if($total == 1)
   {
   $email = $_POST['email'];
   $password = $_POST['password'];        
   $image = $_POST['image'];



      header('location:admin_page.php');
   }


 }
?>


