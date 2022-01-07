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
  
</head>
<body>
  
   <h1>About Us</h1>

<!-- about us content -->
<section class="about-us">

  <div class="row">
    <div class="about-col">
      <h1>We are nepal's biggest course learning platform</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sollicitudin, arcu mollis pretium sollicitudin, orci arcu suscipit ante, ut maximus nibh est ac mauris. Duis et elementum urna, nec pharetra purus. Suspendisse elementum pulvinar tortor dapibus maximus. </p>
      <a href="course.html" class="hero-btn red-btn">EXPLORE NOW</a>
    </div> 
    <div class="about-col">
      <img src="about.jpg">
    </div>
  </div>

</section>


</body>
</html>
<?php
//index page content
include "../includes/footer.php";

?>