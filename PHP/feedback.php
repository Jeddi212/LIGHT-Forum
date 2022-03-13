<?php

session_start();

if (!isset($_SESSION['username'])) {
	header('Location: alreadyLogged.php');
} else {

?>

<html>
<head>
	<meta charset="UTF-8">
	<title>Feedback and contact</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<link rel="stylesheet" type="text/css" href="../CSS/thread.css">
	<style type="text/css">
		html, body {
			color: white;
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			), url("../IMG/FBACK/fbackWall.jpg") no-repeat bottom right fixed;
			font-family: 'alte';
		}
		.feedback, h1{
			text-align: center;
			list-style: none;
			clear: both;
		}
		.admin {
			text-align: center;
		}
		.admin p {
			display: inline-block;
			margin: 10px;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<header>
		
		<?php include 'navbar.php'; ?>
		<h1 class="judul animated fadeInDown slower">Feedback</h1>
	</header>

	<h1>Admin Contact</h1>
	<div class="admin">
		<p>Alexander Hansen</p>
		<p>Lucky Setiawan</p>
		<p>Jedediah Fanuel</p>
		<p>Fedly Septian</p>
	</div>


	

	<div class="feedback">
		<form method="POST" name="feedbackform" enctype="multipart/form-data" action="send_prompt.php">
			<fieldset>
				<legend>Feedback Box</legend>
				<textarea name="feedback_box" rows="5" cols="40" required></textarea><br><br>
				<input type="submit" name="submit" value="Send Feedback">
			</fieldset>
		</form>
	</div>

	<div class="footer animated bounceInUp">
		<p>Alex + Fedly + Jeddi + Lucky</p>
		<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
	</div>


	<script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
	</script>

</body>
</html>

<?php } ?>