<?php 
include "../includes/sub-header.php";
include "../includes/sub-banner.php";
include "../includes/init.php";
echo "<h3>Coursehouse</h3>";
$name= $_SESSION['user'];
$sql = "select usercourse.course_id,course_name,course_category_name, course_description from course inner join usercourse on course.course_id=usercourse.course_id inner join coursecategory on course.course_category_id = coursecategory.course_category_id where user_name = '$name'";
$result = mysqli_query($connection, $sql);
// echo "<pre>Debug: $query</pre>\m";
// $result = mysqli_query($connection, $sql);
// if ( false===$result ) {
//   printf("error: %s\n", mysqli_error($connection));
// }
// else {
//   echo 'done.';
// }
    echo "<table border = 1px solid black cellpadding = 10px>";
      echo "<tr>";
       echo "<th>Name</th>";
       echo "<th>Category</th>";
       echo "<th>Description</th>";
       echo "<th>Remove Course</th>";
      echo "</tr>";
      if(mysqli_num_rows($result) > 0){
          while($row = mysqli_fetch_assoc($result)){
            $id=$row['course_id'];
            echo "<tr>";
            echo "<td>" . $row['course_name'] . "</td>";
            echo "<td>" . $row["course_category_name"] . "</td>";
            echo "<td>" . $row["course_description"] . "</td>";
            echo "<td><a href='../cart/deletecourse.php?id=$id&name=$name'>Delete Course</a></td>";
          }
        }
            
        echo "</table>";
include "../includes/footer.php";
?>