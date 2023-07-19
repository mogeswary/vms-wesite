<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>header</title>
   <style>

    * {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
}

a {
   text-decoration: none;
}

li {
   list-style: none;
}

:root {
   --poppins: 'Poppins', sans-serif;
   --lato: 'Lato', sans-serif;

   --light: #F9F9F9;
   --blue: #3C91E6;
   --light-blue: #CFE8FF;
   --grey: #eee;
   --dark-grey: #AAAAAA;
   --dark: #342E37;
   --red: #DB504A;
   --yellow: #FFCE26;
   --light-yellow: #FFF2C6;
   --orange: #FD7238;
   --light-orange: #FFE0D3;
}

html {
   overflow-x: hidden;
}

body.dark {
   --light: #0C0C1E;
   --grey: #060714;
   --dark: #FBFBFB;
}

body {
   background: var(--grey);
   overflow-x: hidden;
}
      /* NAVBAR */
#content nav {
   height: 56px;
   background: var(--light);
   padding: 0 24px;
   display: flex;
   align-items: center;
   grid-gap: 24px;
   font-family: var(--lato);
   position: sticky;
   top: 0;
   left: 0;
   z-index: 1000;
}
#content nav::before {
   content: '';
   position: absolute;
   width: 40px;
   height: 40px;
   bottom: -40px;
   left: 0;
   border-radius: 50%;
   box-shadow: -20px -20px 0 var(--light);
}
#content nav a {
   color: var(--dark);
}
#content nav .bx.bx-menu {
   cursor: pointer;
   color: var(--dark);
}
#content nav .nav-link {
   font-size: 16px;
   transition: .3s ease;
}
#content nav .nav-link:hover {
   color: var(--blue);
}
#content nav form {
   max-width: 400px;
   width: 100%;
   margin-right: auto;
}
#content nav form .form-input {
   display: flex;
   align-items: center;
   height: 36px;
}
#content nav form .form-input input {
   flex-grow: 1;
   padding: 0 16px;
   height: 100%;
   border: none;
   background: var(--grey);
   border-radius: 36px 0 0 36px;
   outline: none;
   width: 100%;
   color: var(--dark);
}
#content nav form .form-input button {
   width: 36px;
   height: 100%;
   display: flex;
   justify-content: center;
   align-items: center;
   background: var(--blue);
   color: var(--light);
   font-size: 18px;
   border: none;
   outline: none;
   border-radius: 0 36px 36px 0;
   cursor: pointer;
}
#content nav .notification {
   font-size: 20px;
   position: relative;
}
#content nav .notification .num {
   position: absolute;
   top: -6px;
   right: -6px;
   width: 20px;
   height: 20px;
   border-radius: 50%;
   border: 2px solid var(--light);
   background: var(--red);
   color: var(--light);
   font-weight: 700;
   font-size: 12px;
   display: flex;
   justify-content: center;
   align-items: center;
}
#content nav .profile img {
   width: 36px;
   height: 36px;
   object-fit: cover;
   border-radius: 50%;
}
#content nav .switch-mode {
   display: block;
   min-width: 50px;
   height: 25px;
   border-radius: 25px;
   background: var(--grey);
   cursor: pointer;
   position: relative;
}
#content nav .switch-mode::before {
   content: '';
   position: absolute;
   top: 2px;
   left: 2px;
   bottom: 2px;
   width: calc(25px - 4px);
   background: var(--blue);
   border-radius: 50%;
   transition: all .3s ease;
}
#content nav #switch-mode:checked + .switch-mode::before {
   left: calc(100% - (25px - 4px) - 2px);
}
/* NAVBAR */
   </style>
</head>
<body>
   <!-- CONTENT -->
   <section id="content">
      <!-- NAVBAR -->
      <nav>
         <a href="run.php" class="nav-link">Dashboard</a>
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
         
      </nav>
      <!-- NAVBAR -->


     </section>
      


</body>
</html>


