<?php 
if(isset($_SESSION['user']))
    {
        // echo "Welcome, you are logged in.";
        
        include '../includes/loginheader.php';
    }
    else
    {
include "../includes/sub-header.php";
    }
include "../includes/init.php";
include "../includes/sub-banner.php";
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Coder000</title>
  <link rel="icon" href="toplogo.png" type="image/icon type">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body>
  
   <h1>Buy courses</h1>
   <?php 
   if (isset($_SESSION['user'])) {
     // code...
    echo "Welcome ".$_SESSION['user']." to the course page";

   }
   else{
    echo "You must be logged in to view this page<br>";
    echo "<a href='../register/loginform.php' class = 'login-btn' >Click here to Log in</a>";

   }

   ?>







</body>
</html>
<?php
//index page content
include "../includes/footer.php";

?>