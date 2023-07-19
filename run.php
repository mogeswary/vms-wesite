<?php 
include('connection.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Boxicons -->
   <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
   <!-- My CSS -->
   <link rel="stylesheet" href="run.css">
   <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

   <title>Vms</title>
</head>
<body>


   <!-- SIDEBAR -->
   <section id="sidebar">
      <a href="#" class="brand">
         <i class='bx bxs-smile'></i>
         <span class="text">Vms</span>
      </a>
      <ul class="side-menu top">
         <li class="active">
            <a href="run.php">
               <i class='bx bxs-dashboard' ></i>
               <span class="text">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="admin_profile.php">
               <i class="material-icons">admin_panel_settings</i>
               <span class="text">Admin Profile</span>
            </a>
         </li>
         <li>
            <a href="user.details.php">
                 <i class="material-icons">groups</i>
               <span class="text">User Details</span>
            </a>
         </li>
         <li>
            <a href="guard_details.php">
            <i class="material-icons">assured_workload</i>
               <span class="text">Guard</span>
            </a>
         </li>
      </ul>
      <ul class="side-menu">

         <li>
            <a href="logout.php" class="logout">
               <i class='bx bxs-log-out-circle' ></i>
               <span class="text">Logout</span>
            </a>
         </li>
      </ul>
   </section>
   <!-- SIDEBAR -->



   <!-- CONTENT -->
   <section id="content">
      <!-- NAVBAR -->

      <nav>
         <i class='bx bx-menu' ></i>
         <a href="run.php" class="nav-link">Categories</a>
         <form action="#">
            <div class="form-input">
               <input type="search" placeholder="Search...">
               <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
            </div>
         </form>
         <input type="checkbox" id="switch-mode" hidden>
         <label for="switch-mode" class="switch-mode"></label>
         <a href="#" class="notification">
            <i class='bx bxs-bell' ></i>
            <span class="num">8</span>
         </a>
         <button ></button>

            
         </a>
      </nav>
      <!-- NAVBAR -->

      <!-- MAIN -->
      <main>
         <div class="head-title">
            <div class="left">
               <h1>Dashboard</h1>
               <ul class="breadcrumb">
                  <li>
                     <a href="#">Dashboard</a>
                  </li>
                  <li><i class='bx bx-chevron-right' ></i></li>
                  <li>
                     <a class="active" href="#">Home</a>
                  </li>
               </ul>
            </div>

         </div>

         <ul class="box-info">



         <div class="table-data">
            <div class="order">
               <div class="head">
                  <h3>Weekly Reports </h3>
                  <i class='bx bx-search' ></i>
                  <i class='bx bx-filter' ></i>
               </div>
               <div class="card-body">
            <div class="table-responsive">

            <?php
               $query = "SELECT * FROM qrcode";
               $data = mysqli_query($conn, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" border="1">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <br>
                            <th> Information </th>
                            <th>Time in </th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($data) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($data))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['qrtext']; ?></td>
                                <td><?php  echo $row['timein']; ?></td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            //echo "No Record Found";
                        }
                        ?>
   
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</ul>
          <ul class="box-info">



         <div class="table-data">
            <div class="order">
               <div class="head">

                  <h3>To Do List</h3>
                  <p>Call Or Email List</p>
                  <i class='bx bx-search' ></i>
                  <i class='bx bx-filter' ></i>
               </div>
               <div class="card-body">
            <div class="table-responsive">

            <?php
               $query = "SELECT * FROM contact";
               $data = mysqli_query($conn, $query);
            ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="2" border="3">
                
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>messages</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($data) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($data))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['name']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['phone']; ?></td>
                                <td><?php  echo $row['messages']; ?></td>                  
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            //echo "No Record Found";
                        }
                        ?>
   
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </main>
      <!-- MAIN -->
   </section>
   <!-- CONTENT -->
   

   <script src="script.js"></script>
</body>
</html>