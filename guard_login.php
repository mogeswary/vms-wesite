<?php include ('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="guard2.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>login now</h3>

      <input type="text" name="username" required placeholder="enter your username">
      <input type="password" name="password" required placeholder="enter your password">
      <input type="submit" name="submit" value="login now" class="form-btn">

   </form>

</div>

</body>
</html>

<?php
 if(isset($_POST['submit']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = "SELECT * FROM guard WHERE username = '$username' && password = '$password' ";
   $data = mysqli_query($conn, $query);

      if($data == 1)
   {
      header('location:guard.php');
   }
  
};
 ?>  
