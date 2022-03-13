<?php

session_start();

if (isset($_SESSION['username'])) {
	header('Location: alreadyLogged.php');
} else {

?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>LIGHT Login</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<style type="text/css">
		body {
			background: linear-gradient(to right,
				rgba(0, 0, 0, 0),
				rgba(0, 0, 0, 0)
			), url(../IMG/HOMING/LOGIN.jpg) no-repeat;
			background-position: 65% 40%;
			background-size: 235%;
		}
		.parent {
			margin: 0;
			padding: 0;
			display: grid;
			grid-template-columns: repeat(2, 1fr);
			grid-template-rows: repeat(6, 1fr);
			grid-column-gap: 0px;
			grid-row-gap: 0px;
		}
		.kiri {
			grid-area: 1 / 1 / 6 / 2;
		}
		.kanan {
			grid-area: 1 / 2 / 6 / 3;
			background: linear-gradient(to bottom,
				rgba(255, 255, 255, 0.05),
				rgba(255, 255, 255, 0.05)
			);
			border-radius: 2px;
			margin-top: 9px;
			box-shadow: 0px 0px 10px -5px white;
		}
		.footer {
			grid-area: 6 / 1 / 7 / 3;
			height: 100%;
		}
		nav {
			margin-top: 10px;
			padding: 0;
		}
		span {
			padding: 0;
			display: block;
			margin-bottom: 20px;
			margin-left: 0;
			width: 100%;
		}
		span a {
			color: white;
			text-align: center;
			padding: 0px 20px;
			text-decoration: none;
		}
		
		h1{
			text-align: center;
			padding-top: 50px;
			margin: 0;
			display: block;
			font-family: 'blacklisted';
			font-size: 100px;
			color: #FFF;
		}
		form {
			padding: 50px;
			padding-bottom: 115px;
			font-family: Arial;
			font-weight: bolder;
		}
		input {
			text-align: center;
			width: 100%;
		}
		input:focus {
			outline: none;
		}
		input[type=text], input[type=password] {
			border: 0px;
			border-bottom: 1px solid lightgreen;
			background-color: transparent;
			margin-bottom: 30px;
			padding-bottom: 10px;
			color: #FFF;
			font-size: 15px;
			font-family: 'alte';
			font-weight: bold;
		}
		input[type=submit] {
			border: 0px;
			border-radius: 5px;
			margin-top: 20px;
			padding: 10px;
			font-size: 20px;
			font-family: 'digital';
			font-weight: bolder;
			cursor: pointer;
			color: #FFF;
			background: linear-gradient(to right,
				rgba(100, 148, 240, 1),
				rgba(150, 118, 244, 1)
			);
		}
		.btn:hover {
			box-shadow: 0px 0px 80px 2px #FFF;
		}
		::placeholder {
			color: #DDD;
		}
		::placeholder:focus {
			color: #FFF;
		}
		input:-webkit-autofill,
		input:-webkit-autofill:hover, 
		input:-webkit-autofill:focus,
		textarea:-webkit-autofill,
		textarea:-webkit-autofill:hover,
		textarea:-webkit-autofill:focus,
		select:-webkit-autofill,
		select:-webkit-autofill:hover,
		select:-webkit-autofill:focus {
			border-bottom: 1px solid lightgreen;
			font-size: 15px;
			font-family: 'alte';
			-webkit-text-fill-color: #FFF;
			transition: background-color 5000s ease-in-out 0s;
		}
	</style>
</head>
<body>
	
	<div class="parent">
		<div class="kiri">
			<nav class="animated flipInX 2s">
				<span class="animated pulse 1s"><a href="opening.php">Home</a></span>
				<span class=" animated pulse 1s"><a href="registration.php">Register</a></span>
				<span class=" animated pulse 1s"><a href="about.php">About</a></span>
			</nav>

		</div>
		<div class="kanan animated fadeIn slow">
			<h1 class="animated jackInTheBox hvr-shadow-radial" style="display: block;">LOGIN</h1>
			<p style="text-align: center; font-family:'blacklisted'; color: #FFF;">to continue</p>
			<form method="post" action="cekLog.php">
				<input type="text" id="username" name="username" placeholder="Input Your Username" class="animated fadeInUp" required><br>
				<input type="password" id="password" name="password" placeholder="Enter Your Password" class="animated fadeInUp" required>
				
				<input type="submit" name="LOGIN" value="S i g n  I n " class="animated fadeInUp btn">
			</form>
		</div>
		<div class="footer animated bounceInUp">
			<p>Alex + Fedly + Jeddi + Lucky</p>
			<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
		</div>
	</div>

</body>
</html>

<?php } ?>