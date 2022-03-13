<?php

session_start();

if (!isset($_SESSION['username'])) {
	header('Location: alreadyLogged.php');
} else {

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>League of Legends</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<link rel="stylesheet" type="text/css" href="../CSS/thread.css">
	<link rel="stylesheet" type="text/css" href="../CSS/comment.css">
	<style type="text/css">
		html, body {
			color: white;
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			), url("../IMG/LOL/lolWall.jpg") no-repeat center fixed;
			font-family: 'alte';
		}
		.img-container {
			display: block;
			text-align: center;
		}
	</style>
</head>
<body>

<header>
	<?php include 'navbar.php'; ?>
	<h1 class="judul animated fadeInDown slower">League of Legends</h1>
</header>

<article class="animated bounceInUp">
	<section>
		<span class="img-container">
			<img src="../IMG/LOL/LOL.jpg" style="width: 75%;" alt="League of Legends">
		</span>
		<p>
			‘League of Legends’, or LoL, has been the most played game in the world since 2012. Riot Games has held control over the online gaming scene for over half a decade. If you identify as a gamer, then you have definitely heard of LoL. League of Legends is a complicated game that has a steep learning curve, but with knowledge comes power.
		</p>
		<p>
			League of Legends is often categorized as a MOBA, or multiplayer online battle arena, but League has a lot of different genre elements. MOBAs typically have RTS, or real time strategy, components throughout the game. In a nutshell, League of Legends can be described as a MOBA that has two teams, five players each, fight against each other with an objective in mind. MOBAs, like League of Legends, often require more dexterity and strategy than a lightning-fast trigger finger reactions.
		</p>
		<h2>
			HOW DO YOU PLAY ‘LEAGUE OF LEGENDS’?
		</h2>
		<p>
			League of Legends is one of the most in-depth games out there to play and isn’t known for its shallow learning curve. It is a frustrating and unforgiving game but can be very rewarding at the same time. Organizing strategies and becoming familiar with each champion are all daunting tasks. Over time players will be pulling off new strategies and falling into the norm, while the skill gap continues to excel. League of Legends is an ever-changing game and that is one of the main reasons it remains at the top.
		</p>
		<p>
			League of Legends has six different categories for champions:
		</p>
		<ul>
			<li>Assassins- Move quickly and deal high amounts of damage to a single target. These champions are best used for quick fights and jumping out to safety.</li>
			<li>Fighters- These champions can deal and take a lot of damage. Fighters are excellent in extended battles.</li>
			<li>Mages- These champions are best used in distance scenarios. If mages are well protected, they can deal a lot of damage while being invulnerable to attacks.</li>
			<li>Marksmen- Just like mages, marksmen are best utilized when damage is dealt at a distance.</li>
			<li>Support- The main role of support characters are to amplify their teammate’s strengths and abilities.</li>
			<li>Tank- Similar to fighters, tanks are best implemented as a “damage sponge”.</li>
		</ul>
		<h2>
			WHAT ARE THE BIGGEST ‘LEAGUE OF LEGENDS’ LEAGUES?
		</h2>
		<p>
			As of 2018, there are 14 professional ‘League of Legends’ leagues around the world. As for the LOLWC, or League of Legends World Championship, there are 5 premier leagues that have 3 allocated spots, while the rest are split between the 9 remaining regions.
		</p>
		<p>
			Here is how it breaks down:
		</p>
		<p>
			Non-professional players, meanwhile, have MLBB LIGA, a street battle event where fans can compete against each other for prizes and bragging rights.
		</p>
		<ul>	
			<li>EU LCS- European League</li>
			<li>NA LCS- North American League</li>
			<li>LCK- Korean League</li>
			<li>LPL- Chinese League</li>
			<li>LMS- Master Series held in Taiwan, Hong Kong, and Macau</li>
		</ul>
	</section>
</article>
<div class="comment">
	<span>Enter your thoughts : </span>
	<br><br>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<textarea rows="5" cols="74" name="comment" placeholder="Anything you want to share with others..." required></textarea><br>
		<input type="submit" name="submit" value="Post Comment">
	</form>
</div>

<div class="discuss">
	<div class="diskusi">
	<h1>Discuss : </h1>

	<?php
		include 'comment.php';
		$file_exist = count(scandir("../COMMENT/LOL/"));
		if ($file_exist < 3) {
			echo '<p> Empty Discussion </p>';
		}
	?>
	</div>
</div>

<!-- syntax untuk mengatasi post resubmit jika melakukan refresh page (sumber: https://www.webtrickshome.com/faq/how-to-stop-form-resubmission-on-page-refresh) -->
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>

<?php } ?>