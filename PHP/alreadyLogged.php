<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LIGHT</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<style>
		body {
			font-family: 'leixo';
			background: url(../IMG/REG/CONTROL.jpg) no-repeat center fixed;
			background-position: 65% 40%;
			background-size: 200%;
		}
		.flex-container {
			display: flex;
			flex-wrap: nowrap;
			flex-direction: column;
			justify-content: center;
			align-items: center;
			min-height: 640px;
		}
		.flex-container > div {
			width: 90%;
			padding: 5px;
			margin: auto;
			line-height: 75px;
			color: #FFF;
		}
		.one {
			text-align: left;
		}
		.two {
			text-align: center;
		}
		.three {
			text-align: right;
		}
		a {
			text-decoration: none;
			color: #FFF;
		}
		a:hover {
			color: orange;
		}
	</style>
</head>
<body>

<?php session_start(); ?>

<div class="flex-container">
	<?php
		if (isset($_SESSION['username']) || isset($_COOKIE['username'])) {
			echo '<div class="one" style="font-size: 30px;"><a href="logout.php">Log Out</a></div>';
		    echo '<div class="two" style="font-size: 50px;">Already Logged In <br>', $_COOKIE['username'],'</div>';
		    echo '<div class="three" style="font-size: 30px;"><a href="forum.php">Back to The Forum</a></div>';
		} else {
			echo '<div class="one" style="font-size: 30px;"><a href="login.php">Log In</a></div>';
			echo '<div class="two" style="font-size: 50px;">Not yet Log In</div>';
			echo '<div class="three" style="font-size: 30px;"><a href="opening.php">Back to the Beginning</a></div>';
		}
	?>
</div>

</body>
</html>