<?php 
include('connection.php');

?>
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
            <a href="user.php">
               <i class='bx bxs-dashboard' ></i>
               <span class="text">Dashboard</span>
            </a>
         </li>
      </ul>

            <ul class="side-menu">



<br>
<br>
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
         <a href="#" class="nav-link">Categories</a>
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

         <a href="gen2" class="profile">
         <input type="submit" name="Submit" value="Invite a Visitor!">

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

            <li>
               <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Digital Clock With Date</title>
    <style>

.datetime{
  color: #333;
  font-family: "Segoe UI", sans-serif;
  width: 340px;
  padding: 15px 10px;
  border: 3px solid #2E94E3;
  
  transition: 0.5s;
  transition-property: background, box-shadow;
}

.datetime:hover{
  background: #2E94E3;
  box-shadow: 0 0 30px #2E94E3;
}
.date{
  font-size: 20px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 3px;
}
.time{
  font-size: 60px;
  display: flex;
  justify-content: center;
  align-items: center;
}
.time span:not(:last-child){
  position: relative;
  margin: 0 6px;
  font-weight: 600;
  text-align: center;
  letter-spacing: 3px;
}
.time span:last-child{
  background: #2E94E3;
  font-size: 30px;
  font-weight: 600;
  text-transform: uppercase;
  margin-top: 10px;
  padding: 0 5px;
  border-radius: 3px;
}
      

       
    </style>
  </head>
  <body onload="initClock()">

    <!--digital clock start-->
    <div class="datetime">
      <div class="date">
        <span id="dayname">Day</span>,
        <span id="month">Month</span>
        <span id="daynum">00</span>,
        <span id="year">Year</span>
      </div>
      <div class="time">
        <span id="hour">00</span>:
        <span id="minutes">00</span>:
        <span id="seconds">00</span>
        <span id="period">AM</span>
      </div>
    </div>
    <!--digital clock end-->

    <script type="text/javascript">
    function updateClock(){
      var now = new Date();
      var dname = now.getDay(),
          mo = now.getMonth(),
          dnum = now.getDate(),
          yr = now.getFullYear(),
          hou = now.getHours(),
          min = now.getMinutes(),
          sec = now.getSeconds(),
          pe = "AM";

          if(hou >= 12){
            pe = "PM";
          }
          if(hou == 0){
            hou = 12;
          }
          if(hou > 12){
            hou = hou - 12;
          }

          Number.prototype.pad = function(digits){
            for(var n = this.toString(); n.length < digits; n = 0 + n);
            return n;
          }

          var months = ["January", "February", "March", "April", "May", "June", "July", "Augest", "September", "October", "November", "December"];
          var week = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
          var ids = ["dayname", "month", "daynum", "year", "hour", "minutes", "seconds", "period"];
          var values = [week[dname], months[mo], dnum.pad(2), yr, hou.pad(2), min.pad(2), sec.pad(2), pe];
          for(var i = 0; i < ids.length; i++)
          document.getElementById(ids[i]).firstChild.nodeValue = values[i];
    }

    function initClock(){
      updateClock();
      window.setInterval("updateClock()", 1);
    }
    </script>

  </body>
</html>
            
</li>
</ul>
   <!-- WEEKLY REPORT -->

         
      </main>
      <!-- MAIN -->
   </section>
   <!-- CONTENT -->
   

   <script src="script.js"></script>
</body>
</html>