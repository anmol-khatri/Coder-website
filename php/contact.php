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
  
   <h1>Contact Us</h1>

<!-- contact us content -->
<section class="location">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14131.443962184556!2d85.31388872896173!3d27.690690974779127!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b0f6aafa13%3A0x778967dbd03da6e0!2sThapathali%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1625152096133!5m2!1sen!2snp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>


<!-- contact us page********** -->

<section class="contact-us">
  
  <div class="row">
    <div class="contact-col">
      <div>
        <i class="fas fa-home"></i>
        <span>
          <h5>The British College</h5>
          <p>Trade Tower, Thapathali, Nepal</p>
        </span>
      </div>
      <div>
        <i class="fas fa-phone"></i>
        <span>
          <h5>+9779862770461</h5>
          <p>Monday to Saturday, 7am to 3 pm</p>
        </span>
      </div>
      <div>
        <i class="fas fa-envelope"></i>
        <span>
          <h5>anmolkhatri99@gmail.com</h5>
          <p>Email us your query</p>
        </span>
      </div>
    </div>
<div class="contact-col">
  
  <form action="">
    <input type="text" placeholder="Enter your name" required >
    <input type="email" placeholder="Enter email address" required >
    <input type="text" placeholder="Enter your subject" required >
    <textarea rows="8" placeholder="Message" required></textarea>
    <button type="submit" class="hero-btn red-btn">Send Message</button>
  </form>
</div>
      
    
  </div>
</section>








</body>
</html>
<?php
//index page content
include "../includes/footer.php";

?>