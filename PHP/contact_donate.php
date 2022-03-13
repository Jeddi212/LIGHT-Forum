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
	<meta name="author" content="LIGHT Group">
	<title>LIGHT Contact</title>
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../CSS/donate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<style>
		.infoDonate{
			margin: auto;
			margin-top: 1%;
			margin-bottom: 10%;
			max-width: 50%;
			min-height: 100%;
			border-radius: 5px;
			background: rgba(0, 0, 0, 0.5);
			padding: 20px;
			text-align: center;
		}
		
		.txt{
			text-align: center;
			font-size: 4vw;
			color: orange;
			font-family: calc;
		}
	</style>
</head>
<body>
	
	<!--Background-->
	<video autoplay muted loop id="background">
		<source src="../Video/background_donate_identity.mp4" type="video/mp4">
	</video>
	
	<?php include 'navbar.php'; ?>
	
	<div class="infoDonate">
		<p style="font-family:calc;font-size:4.5vw;color:#79ff6c;">You can transfer to BCA account :</p>
		<span class="txt">Name :</span><br><br>
		<span class="txt">LIGHT ADMIN</span><br><br>
		<span class="txt">Rekening :</span><br><br>
		<span class="txt">123456789</span><br><br>
	</div>
	
	<div class="footer animated bounceInUp">
		<p>Alex + Fedly + Jeddi + Lucky</p>
		<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
	</div>

</body>
</html>

<?php } ?>