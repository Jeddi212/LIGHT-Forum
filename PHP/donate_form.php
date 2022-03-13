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
	<title>LIGHT Donate</title>
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../CSS/donate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<style>
		.donation{
			position: relative;
			border-radius: 5px;
			background: rgba(0, 0, 0, 0.5);
			margin: 4% 15% 4% 15%;
			padding: 10%;
		}
		
		#title{
			text-align: center;
			font-family: azo;
		}
		
		.sub{
			text-align: center;
			font-family: king;
		}

		.row{
			display: table;
			width: 100%;
		}

		.col{
			float: left;
			width: 50%;
			margin: auto;
			padding: 0 10% 0 10%;
		}
		
		.gambar:hover{
			opacity: 0.5;
		}

		/* vertical line */
		.or{
			position: absolute;
			left: 50%;
			transform: translate(-50%);
			border: 2px solid #ddd;
			height: 175px;
		}

		/* text inside the vertical line */
		.or_icon{
			position: absolute;
			top: 50%;
			transform: translate(-50%, -50%);
			background-color: #f1f1f1;
			border: 1px solid #ccc;
			border-radius: 50%;
			padding: 8px 10px;
			color: black;
		}

		/* hide some text on medium and large screens */
		.hide_or{
			display: none;
		}

		/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
		@media screen and (max-width: 650px){
			.col{
				width: 100%;
				margin-top: 0;
			}
		/* hide the vertical line */
			.or{
				display: none;
			}
		/* show the hidden text on small screens */
			.hide_or{
				display: block;
				text-align: center;
			}
		}
	</style>
</head>
<body>
	
	<!--Background-->
	<video autoplay muted loop id="background">
		<source src="../Video/background.mp4" type="video/mp4">
	</video>
	
	<?php include 'navbar.php'; ?>
	
	<!--Content-->
	<div class="donation">
		<h2 id="title" style="text-align:center; margin:-8% 0 8% 0;">Donate with an identity or unknown</h2><br>
		<h3 id="title" style="text-align:center; margin:-8% 0 8% 0;">Select one</h3>
		<div class="row">
			<div class="or">
				<span class="or_icon">or</span>
			</div>
			
			<div class="col">
				<a href="donate_identity.php"><img class="gambar" src="../IMG/DONATE/identity.png" style="width:80%"></a>
				<h3 class="sub" style="margin-left:-15%;">Donate with identity</h3>
			</div>
			
			<div class="col">
				<div class="hide_or">
					<h2 id="title">Or</h2>
				</div>
				
				<a href="donate_unknown.php"><img class="gambar" src="../IMG/DONATE/unknown.png" style="width:80%; margin-left:20%;"></a>
				<h3 class="sub" style="margin-left:22%;">Donate as unknown</h3>
			</div>
		</div>
	</div>
	
	<div class="footer animated bounceInUp">
		<p>Alex + Fedly + Jeddi + Lucky</p>
		<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
	</div>

</body>
</html>

<?php } ?>