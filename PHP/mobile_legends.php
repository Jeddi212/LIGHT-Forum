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
	<title>Mobile Legends</title>
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
			), url("../IMG/MobileLegends/mlWall.jpg") no-repeat top fixed;
			background-size: 200%;
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
	<h1 class="judul animated fadeInDown slower">Mobile Legends</h1>
</header>

<article class="animated bounceInUp">
	<section>
		<p>
			Mobile Legends is a multiplayer online battle arena (MOBA) for iOS and Android devices developed and published by Shanghai Moonton Technology, a game development company based in Kuala Lumpur, Malaysia. The game was launched in 2016.
		</p>
		<span class="img-container">
			<img src="../IMG/MobileLegends/cover.png" style="width: 75%;" alt="Mobile Legends">
		</span>
		<h2>
			How do you play?
		</h2>
		<p>
			At its core, Mobile Legends pits 2 teams of 5 against each other, with the main objective being to destroy the opponent’s base.
		</p>
		<p>
			At the start of the game, each player gets to select a hero. Each hero has a unique set of attributes and skills. There are currently 92 heroes in the game, grouped into 6 different roles: tank, fighter, assassin, marksman, support, and mage.
		</p>
		<p>
			These roles determine the responsibilities of players for their respective teams. Support heroes, for instance, can buff or heal their teammates. That’s why they should stick with their allies to keep them alive or strong in battle.
		</p>
		<p>
			Players must also level their heroes up by defeating enemy forces, specifically computer-controlled minions, turrets, and heroes. Doing so earns them in-game money, which they can spend on items that boost the stats of their heroes.
		</p>
		<p>
			A typical game of Mobile Legends runs an average of 10 to 15 minutes, unlike MOBA titles for PC like Dota 2 and League of Legends, which can last anywhere from 40 minutes to an hour.
		</p>
		
		<h2>
			How popular is it?
		</h2>
		<p>
			The game has reportedly amassed over 500 million downloads and 75 million active players since it first launched. Much of its popularity is centered around Southeast Asia, where the game has established itself as a major esport
		</p>
		<p>
			The Philippines, for example, has its own Mobile Legends esports league called MLBB Professional League. It recently concluded its 4th season, with Sunsparks winning the championship and nabbing the lion’s share of the $54,000 prize pool.
		</p>
		<p>
			Non-professional players, meanwhile, have MLBB LIGA, a street battle event where fans can compete against each other for prizes and bragging rights.
		</p>
		<p>
			Outside of the country, there is MLBB World Championship 2019, or M1 for short, which features 16 professional teams from 14 different countries.
		</p>
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
		$file_exist = count(scandir("../COMMENT/ML/"));
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