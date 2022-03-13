<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="../CSS/card.css">
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<title>Welcome To LIGHT</title>
	<style type="text/css">
		*{
			-webkit-transition: 0.7s ease-in-out;
			-o-transition: 0.7s ease-in-out;
			-moz-transition: 0.7s ease-in-out;
			-ms-transition: 0.7s ease-in-out;
			transition: 0.7s ease-in-out;
		}
		body {
			background: linear-gradient(to right,
				rgba(0, 0, 0, 0),
				rgba(0, 0, 0, 0)
			), url(../IMG/HOMING/OPEN.jpg) ;
			background-position: 50% 20%;
			margin: 0;
			padding: 0;
			color: #fff;
			justify-content: center;
			align-items: center;
			font-family: consolas;
		}
		header{
			display: block;
			width: 100%;
			color: orange;
			font-family: 'hunt';
			font-size: 3.5vw;
			text-align: center;
		}
		a {
			font-family: HH;
		}
		.footer {
			color: #000839;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<header class="hvr-pop">
		<h1 class="animated jackInTheBox 2s">
			LIGHT
		</h1>
	</header>
	<div class="indexKotak">
		<div class="container">
			<div class="card">
				<div class="face face1">
					<div class="content">
						<img src="../IMG/ICONS/story.png">
						<h3>Register</h3>
					</div>
				</div>
				<div class="face face2">
					<div class="content">
						<p>
							is it a friend invitation, is it accidental. That's not important. Come on !!!
						</p>
					<a href="cekReg.php">Join</a>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="face face1">
					<div class="content">
						<img src="../IMG/ICONS/login.png">
						<h3>Login</h3>
					</div>
				</div>
				<div class="face face2">
					<div class="content">
						<p>We know you guys can't wait to discuss again Hahaha .., i know that feeling.</p>
					<a href="cekLog.php">Let's Go</a>
					</div>
				</div>
			</div>
			<div class="card">
				<div class="face face1">
					<div class="content">
						<img src="../IMG/ICONS/info.png">
						<h3>About Us</h3>
					</div>
				</div>
				<div class="face face2">
					<div class="content">
						<p>It's contain all the information about us that you don't want to miss</p>
					<a href="about.php">Read More</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer animated bounceInUp">
		<p>Alex + Fedly + Jeddi + Lucky</p>
		<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
	</div>
</body>
</html>