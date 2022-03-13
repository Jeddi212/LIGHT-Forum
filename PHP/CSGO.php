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
	<title>Counter Strike : Global Offensive</title>
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
			), url("../IMG/CSGO/csgoWall.jpg") no-repeat center fixed;
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
	<h1 class="judul animated fadeInDown slower">Counter Strike : Global Offensive</h1>
</header>

<article class="animated bounceInUp">
	<section>
		<p>
			Counter-Strike: Global Offensive (CS: GO) expands upon the team-based action gameplay that it pioneered when it was launched 19 years ago.
		</p>
		<span class="img-container">
			<img src="../IMG/CSGO/csgo1.png" style="width: 75%;" alt="ori menu">
		</span>
		<p>
			CS: GO features new maps, characters, weapons, and game modes, and delivers updated versions of the classic CS content (de_dust2, etc.).
		</p>
		<p>
			"Counter-Strike took the gaming industry by surprise when the unlikely MOD became the most played online PC action game in the world almost immediately after its release in August 1999," said Doug Lombardi at Valve. "For the past 12 years, it has continued to be one of the most-played games in the world, headline competitive gaming tournaments and selling over 25 million units worldwide across the franchise. CS: GO promises to expand on CS' award-winning gameplay and deliver it to gamers on the PC as well as the next gen consoles and the Mac."
		</p>
		<span class="img-container">
			<img src="../IMG/CSGO/csgo2.jpg" style="width: 75%;" alt="ori skill">
		</span>
		<p>
			We’re in the final weeks of Operation Shattered Web, and players have until March 30th to play missions, earn progress, and redeem Operation rewards.
		</p>
		<p>
			Operation Shattered Web wraps up today. Thanks to all of the CS:GO players who participated–over the span of the operation, they completed over 136 million missions!
		</p>
		<p>
			Today we’re also introducing the Prisma 2 Collection! Lightly based on Anime/Manga themes, the collection features 17 community created weapon finishes, as well as the chance to receive one of the Horizon knives in Chroma finishes.
		</p>
		<p>
			Today the final mission card goes live which means we’ll start issuing Diamond Operation Coins to users who have completed 100 missions. This week’s card, “Time To Take Out The Trash”, includes a second co-op Strike mission tasking players with finding and eliminating Franz Kriegeld. Don’t let him escape!
		</p>
		<span class="img-container">
			<img src="../IMG/CSGO/csgo3.jpg" style="width: 75%;" alt="ori running">
		</span>
		<p>
			Operation Hydra features all-new Operation Hydra Events - twists on the classic game rules playable on a set of new and returning community maps available for casual and competitive modes. There's more - a full Guardian Mission campaign, an Operation Coin upgradable to the new Diamond level, an Operation Journal with friends leaderboards, the opportunity to gain extra XP, Operation weapon drops, and the all new Operation Hydra Case.
		</p>
		<p>
			Hydra Events are unique game modes that are available for a week at a time. There are three Hydra Events: War Games, Wingman, and Weapons Expert. These events are available to all CS:GO players. Also, Operation Hydra All Access Pass holders will be able to earn additional XP and make progress toward an upgraded coin and item drops. Come back each week to see what's new!
		</p>
		<p>
			How deep is your weapon pool? Play a 5v5 best-of-30 match with a twist - once you buy a weapon, you can't buy it again for the rest of the match. Coordinate with your team, grind the enemy out of weapons, and try to keep your best options available!
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
		$file_exist = count(scandir("../COMMENT/CSGO/"));
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