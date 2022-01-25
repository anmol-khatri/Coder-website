<?php 
include "../includes/sub-header.php";
include "../includes/sub-banner.php";
?>
<h3>Register</h3>
<form method="post" action="register.php">
	<label>Username</label>
	<input type="text" name="txtUser" value="<?php
	if(isset(($_POST['btnSubmit']))){
		echo $_POST['txtUser'];}?>">
		<?php if (isset($_POST['btnSubmit'])) {
			if(empty($_POST['txtUser'])){
		echo "<i>*Username must not be empty</i>";}
	}?><br>
	<label>Email</label>
	<input type="text" name="txtEmail" value="<?php
	if(isset(($_POST['btnSubmit']))){
		echo $_POST['txtEmail'];
	}

	
	?>"><?php if (isset($_POST['btnSubmit'])) {

			if(empty($_POST['txtEmail'])){
		echo "<i>*Email must not be empty</i>";}
		else{
			if (!filter_var($email1, FILTER_VALIDATE_EMAIL)) {
		echo "<i>*Invalid email address</i>";
	}
		}
	}?><br>
	<label>Password</label>
	<input type="password" name="txtPass" value="<?php
	if(isset(($_POST['btnSubmit']))){
		echo $_POST['txtPass'];
	}
	
	?>"><?php if (isset($_POST['btnSubmit'])) {
			if(empty($_POST['txtPass'])){
		echo "<i>*Password field must not be empty</i>";}
	}?><br>
	<label>Age range</label>
	<select name="txtAge" id="cars" >
	  <option value="first" <?php if ($_POST['txtAge'] == 'first') echo 'selected="selected"'; ?>>0-18 years</option>
	  <option value="second" <?php if ($_POST['txtAge'] == 'second') echo 'selected="selected"'; ?>>18-25 years</option>
	  <option value="third" <?php if ($_POST['txtAge'] == 'third') echo 'selected="selected"'; ?>>25-40 years</option>
	  <option value="fourth" <?php if ($_POST['txtAge'] == 'fourth') echo 'selected="selected"'; ?>>40-60 years</option>
	  <option value="fifth" <?php if ($_POST['txtAge'] == 'fifth') echo 'selected="selected"'; ?>>60-100 years</option>
	</select><br>
	<label>I agree to the <a href="../register/register.php" 
  target="popup" 
  onclick="window.open('../register/termsconditions.php','popup','width=600,height=600'); return false;">
    Terms and conditions
</a></label>
	<input type="checkbox" name="txtAgree"><?php if (isset($_POST['btnSubmit'])) {
			if(empty($_POST['txtAgree'])){
		echo "<i>*You must agree to Terms and Conditions.</i>";}
	}?><br>
	<input type="submit" name="btnSubmit" value="Register">
</form>
<?php 
if (isset($_POST['btnSubmit'])) {
	if(!empty($_POST['txtUser'])){
		if(!empty($_POST['txtEmail'])){
		if(!empty($_POST['txtPass'])){
		if(isset($_POST['txtAgree'])){
			if (filter_var($email1, FILTER_VALIDATE_EMAIL)) {
		include "connection.php";
		$name = $_POST['txtUser'];
		$password = $_POST['txtPass'];
		$crypted = password_hash($password, PASSWORD_DEFAULT);
		$email = $_POST['txtEmail'];
		switch ($_POST['txtAge']) {
			case 'first':
				$lowage=0;
				$highage = 18;
				break;
			case 'second':
				$lowage=18;
				$highage = 25;
				break;
			case 'third':
				$lowage=25;
				$highage = 40;
				break;
			case 'fourth':
				$lowage=40;
				$highage = 60;
				break;
			case 'fifth':
				$lowage=60;
				$highage = 100;
				break;
			
			default:
				// code...
				break;
		}

		$sql ="insert into user(user_name, user_password, lowage, highage, user_email) values('$name','$crypted', '$lowage', '$highage', '$email')";
		
		if ($result = mysqli_query($connection, $sql)) {
			header ('location:../register/loginform.php');
			echo "added values";
		}
		else{
			echo "not added";
		}
	}
	}
	}
			
	}

	}
	

}

?>
<?php 
include "../includes/footer.php";
?>