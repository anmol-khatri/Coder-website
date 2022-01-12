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
   <form action="course.php" method="post">
       <input type="text" name="txtSearch" value="<?php if(isset($_POST['btnSearch'])){
        echo $_POST['txtSearch'];
       } ?>">
       <input type="submit" name="btnSearch" value="Search">
   </form>
   <?php
   include '../includes/connection.php';
   

   if (isset($_SESSION['user'])) { 
    $user=$_SESSION['user'];

    if (isset($_POST['btnSearch'])) {
        $search = $_POST['txtSearch'];
       $sql = "select course_id,course_name, course_category_name, course_description from course inner join coursecategory on course.course_category_id= coursecategory.course_category_id where course_name like '$search%'";
   }
   else{

    $sql = "select course.course_id,course_name, course_category_name, course_description from course inner join coursecategory on course.course_category_id= coursecategory.course_category_id";
    // echo $sql;
    
    // echo $result;
   }
    $result = mysqli_query($connection, $sql);
    echo "<table border = 1px solid black cellpadding = 10px>";
      echo "<tr>";
       echo "<th>Name</th>";
       echo "<th>Category</th>";
       echo "<th>Description</th>";
       echo "<th>Get course</th>";
      echo "</tr>";
      $checksql= "select course_id from usercourse";
      $checkresult = mysqli_query($connection, $checksql);

      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            $id=$row['course_id'];
            echo "<tr>";
            echo "<td>" . $row['course_name'] . "</td>";
            echo "<td>" . $row["course_category_name"] . "</td>";
            echo "<td>" . $row["course_description"] . "</td>";
            if (mysqli_fetch_assoc(mysqli_query($connection, "select * from usercourse where course_id = '$id'"))) {
                 echo "<td>Added to Coursehouse</td>";
            }
            
            else{
                echo "<td><a href='../cart/addtocoursehouse.php?id=$id&name=$user'>Add to Coursehouse</a></td>";
            }
            
            echo "</tr>";
          }
        }
            
        echo "</table>";
        if(!mysqli_num_rows($result) > 0){
            echo "<h1>Could not find the course</h1>";
        }

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