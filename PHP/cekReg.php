<?php

session_start();

$con = mysqli_connect("localhost", "root", "","light_db");
$first_name = "";
$last_name = "";
$gender = "";
$username = "";
$email = "";
$password = "";

if (isset($_POST['REGISTER'])) {
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql_username = "SELECT * FROM members WHERE username='$username'";
	$sql_email = "SELECT * FROM members WHERE email='$email'";

	$check_username = mysqli_query($con, $sql_username);
  	$check_email = mysqli_query($con, $sql_email);

  	if (mysqli_num_rows($check_username) > 0) {
  		
  		echo '<script language="javascript">';
		echo 'alert("Sorry... username already taken")';
		echo '</script>';
  		header('Location: registration.php');

  	} else if(mysqli_num_rows($check_email) > 0){
  	  
  		echo '<script language="javascript">';
		echo 'alert("Sorry... email already registered")';
		echo '</script>';
  		header('Location: registration.php');

  	} else {

  		$sql = "INSERT INTO members(first_name, last_name, gender, username, email, password, type) VALUES ('$first_name', '$last_name', '$gender', '$username', '$email', '$password', 'Member')";

		if (mysqli_query($con, $sql)) {
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $row[0];
			$_SESSION['type'] = 'Member';
			$_SESSION['email'] = $email;
			setcookie("username", $username, time() + (86400 * 30), "");
			header('Location: registerSuccess.php');
		} else {
			header('Location: registration.php');
		}

  	}
	
} else if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    header('Location: alreadyLogged.php');
} else {
	header('Location: registration.php');
}

mysqli_close($con);

?>

