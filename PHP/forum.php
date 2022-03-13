<?php

session_start();

if (!isset($_SESSION['username'])) {
	header('Location: alreadyLogged.php');
} else {

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>List of Games</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<style type="text/css">
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
			scroll-snap-type: y mandatory;
		}

		#carousel {
			position: relative;
			width: 100%;
			height: 100%;
		}

		#carousel > div {
			min-width: 100%;
			min-height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
			text-align: center;
			color: #000000;
			font-size: 20px;
		}

		#carousel-1 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/CSGO.png) no-repeat center fixed;
			scroll-snap-align: start;
		}
		#carousel-2 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/FORT.jpg) no-repeat center left fixed;
			scroll-snap-align: start;
		}
		#carousel-3 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/LOL.jpg) no-repeat center fixed;
			scroll-snap-align: start;
		}
		#carousel-4 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/MINE.jpg) no-repeat center fixed;
			scroll-snap-align: start;
		}
		#carousel-5 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/ML.png) no-repeat center fixed;
			scroll-snap-align: start;
		}
		#carousel-6 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/OATBF.jpg) no-repeat center fixed;
			scroll-snap-align: start;
		}
		#carousel-7 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/WOWS.jpg) no-repeat center fixed;
			scroll-snap-align: start;
		}
		#carousel-7 {
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url(../IMG/FORUM/WOWS.jpg) no-repeat center fixed;
			scroll-snap-align: start;
		}
		.intro {
			width: 50%;
			text-align: center;
			border-radius: 10px;
		}
	</style>
</head>
<body>

	<?php include 'navbar.php'; ?>

	<div id="carousel">
		<div id="carousel-1">
			<div class="animated jackInTheBox 2s intro">
				<a href="CSGO.php"><img src="../IMG/FORUM/nCSGO.png" class="hvr-hang"></a>
			</div>
		</div>
		<div id="carousel-2">
			<div class="animated jackInTheBox 2s intro">
				<a href="FortNite.php"><img src="../IMG/FORUM/nFORT.png" class="hvr-hang"></a>
			</div>
		</div>
		<div id="carousel-3">
			<div class="animated jackInTheBox 2s intro">
				<a href="LOL.php"><img src="../IMG/FORUM/nLOL.png" class="hvr-hang"></a>
			</div>
		</div>
		<div id="carousel-4">
			<div class="animated jackInTheBox 2s intro">
				<a href="MC.php"><img src="../IMG/FORUM/nMINE.png" class="hvr-hang"></a>
			</div>
		</div>
		<div id="carousel-5">
			<div class="animated jackInTheBox 2s intro">
				<a href="mobile_legends.php"><img src="../IMG/FORUM/nML.png" class="hvr-hang"></a>
			</div>
		</div>
		<div id="carousel-6">
			<div class="animated jackInTheBox 2s intro">
				<a href="ORI.php"><img src="../IMG/FORUM/nORI.png" class="hvr-hang"></a>
			</div>
		</div>
		<div id="carousel-7">
			<div class="animated jackInTheBox 2s intro">
				<a href="WOWS.php"><img src="../IMG/FORUM/nWOWS.png" class="hvr-hang"></a>
			</div>
		</div>
	</div>

</body>
</html>

<?php } ?>