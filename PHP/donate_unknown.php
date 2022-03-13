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
	<title>LIGHT Donate Unknown</title>
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../CSS/donate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<style>
		.container {
			margin: auto;
			margin-top: 5%;
			margin-bottom: 10%;
			max-width: 50%;
			min-height: 100%;
			border-radius: 5px;
			background: rgba(0, 0, 0, 0.5);
			padding: 20px;
		}
		
		#title{
			text-align: center;
			font-family: azo;
			margin-top: 100px;
		}
		
		#sub{
			text-align: center;
			font-family: azo;
		}
		
		input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
			background: rgba(1, 0.5, 0.5, 0.5);
			color: white;
		}

		input[type=submit], input[type=reset] {
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		input[type=submit]{
			background-color: #4CAF50;
		}
		
		input[type=reset]{
			background-color: red;
			margin-left: 20px;
		}

		input[type=submit]:hover {
			background-color: orange;
		}
		
		input[type=reset]:hover {
			background-color: orange;
		}
		
		#myBtn{
			background-color: blue;
			color: white;
			padding: 12px 20px;
			width: 100%;
			text-align: center;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		#myBtn a{
			color: white;
		}
		
		#myBtn a:hover{
			color: red;
		}
		
	</style>
</head>
<body>
	
	<!--Background-->
	<video autoplay muted loop id="background">
		<source src="../Video/background_donate_unknown.mp4" type="video/mp4">
	</video>
	
	<?php include 'navbar.php'; ?>
	
	<h1 id="title">Thank You For Your Donation</h1>
	<h2 id="sub">Please Fill Out This Form</h2>
	
	<div class="container">
		<form action="pendonasi.php" name="pendonasi" method="POST" enctype="multipart/form-data">
			<label for="info">Hello stranger, Please fill out this form for our data.</label><br><br>
			<label for="country">Country</label>
			<input type="text" required id="country" name="country" value="" placeholder="Your country..">
			
			<label for="nominal">Donation</label>
			<input type="text" required id="nominal" name="nominal" value="" placeholder="1000000 (Rupiah)">
			
			<label for="foto_bukti">Lampirkan Foto Bukti Donasi</label><br><br>
			<input type="file" required name="file" id="file"><br><br>
			
			<label for="comment">Comment</label>
			<textarea id="comment" required name="comment" value="" placeholder="Write something.." style="height:100px"></textarea>

			<input type="submit" value="Submit" name="DonasiUnknown"><input type="reset" value="Clear"><br><br>
			<div id="myBtn"><a href="contact_donate.php">How Can I Donate?</a></div>
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