<?php

@include 'connection.php';


if(isset($_SESSION['name'])){
   header('location: login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="register.css">

</head>
<body>
   
<div class="container">

   <div class="content">
      <h3>hi, <span>Admin</span></h3>
      <h1>welcome</h1>
      <p>this is an admin page</p>
     
      <a href="run.php" class="btn">Dashboard</a>
      <a href="logout.php" class="btn">logout</a>
   </div>

</div>

</body>
</html>