<?php

session_start();

$con = mysqli_connect("localhost", "root", "","light_db");

if (isset($_POST['LOGIN'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM members";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result)) {
        if ($row[4] == $username && $row[6] == $password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $row[0];
			if($row[7] == 'Admin'){
				$_SESSION['type'] = 'Admin';
			} else {
                $_SESSION['type'] = 'Member';
            }
            setcookie("username", $username, time() + (86400 * 30), "");
            header('Location: forum.php');
            break;
        } else {
            header('Location: login.php');
        }
    }
} else if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
    header('Location: alreadyLogged.php');
} else {
    header('Location: login.php');
}

mysqli_close($con);

?>  

