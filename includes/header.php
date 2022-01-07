<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/toplogo.png" type="image/icon type">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>
  <section class="header">
    <nav>
      <a href="index.html"><img src="../images/logo.PNG"></a>
      <div class="">
      </div>
      <div class="nav-links" id="navLinks">
         <i class="fas fa-times" onclick="hideMenu()"></i>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="about.php">ABOUT</a></li>
          <li><a href="course.php">COURSE</a></li>
         <li><a href='contact.php'>CONTACT</a></li>
          
          <?php
          include '../register/connection.php';
          
          if (isset($_SESSION['user'])) {
            $loggeduser = $_SESSION['user'];
            echo "<li><a href='../cart/cart.php'>$loggeduser</a></li>";
            echo "<li><a href='../includes/logout.php'>LOGOUT</a></li>";
          }
          else{
            echo "<li><a href='../register/loginform.php'>LOGIN</a></li>";
          }
          ?>

        </ul>
      </div>
       <i class="fas fa-bars" onclick="showMenu()"></i>
    </nav>
    
  </section>
</body>
</html>
