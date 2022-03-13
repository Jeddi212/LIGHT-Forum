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
	<title>Fortnite</title>
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
			), url("../IMG/Fortnite/Fortnite_Background.png") no-repeat center fixed;
			font-family: 'alte';
		}
		.img{
			text-align:center;
		}
	</style>
</head>
<body>

<header>
	<?php include 'navbar.php'; ?>
	<h1 class="judul animated fadeInDown slower">Fortnite</h1>
</header>
<article>
	<section>
		<p>Fortnite is an online video game developed by Epic Games and released in 2017.</p>
		<p>It is available in three distinct game mode versions that otherwise share the same general gameplay and game engine</p>
		<div class="img">
			<img src="../IMG/Fortnite/save-the-world.png" style="align:center">
		</div>
		<p> Fortnite: Save the World, a cooperative shooter-survival game for up to four players to fight off zombie-like creatures and defend objects with fortifications they can build</p>
		<div class="img">
			<img src="../IMG/Fortnite/battle-royale.png" style="align:center">
		</div>
		<p>Fortnite Battle Royale, a free-to-play battle royale game where up to 100 players fight to be the last person standing</p>
		<div class="img">
			<img src="../IMG/Fortnite/F-creative.png" style="align:center">
		</div>
		<p>and Fortnite Creative, where players are given complete freedom to create worlds and battle arenas</p>
		
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
		$file_exist = count(scandir("../COMMENT/FORTNITE/"));
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