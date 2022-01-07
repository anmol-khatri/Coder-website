<?php 

      include "../includes/sub-header.php";
    

include "../includes/sub-banner.php";
?>
    <table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="loginform.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="txtUser" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="txtPass" type="text" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="btnSubmit" value="Login"></td>

</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><button><a href="register.php">Register</a></button></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<?php 

include 'init.php';
if (isset($_POST['btnSubmit'])) {
    $user = $_POST['txtUser'];
    $pass = $_POST['txtPass'];
    $query = "select * from user where user_name = '$user'";
    echo $query;

    $result = mysqli_query($connection, $query);

// echo password_verify($password,$row['user_password']) ? 'Password Matches.' : 'Invalid password.';
    // echo $result;
    if($row = mysqli_fetch_assoc($result)){
        if (password_verify($pass, $row['user_password'])) {
            $_SESSION['user'] = $user;
            header ('location:../php/index.php');
            echo "logged in";
        }
        
    }
    else{
        $_SESSION['error']= 'User not recognised';
        // header ('location: loginform.php');
        echo "Not logged in";

    }
}

//index page content
include "../includes/footer.php";

?>