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
	<title>Minecraft</title>
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
			), url("../IMG/MC/mcWall.jpg") no-repeat center fixed;
			background-size: 250%;
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
	<h1 class="judul animated fadeInDown slower">Minecraft</h1>
</header>

<article class="animated bounceInUp">
	<section>
		<p>
			Explore infinite worlds and build everything from the simplest of homes to the grandest of castles. Play in creative mode with unlimited resources or mine deep into the world in survival mode, crafting weapons and armor to fend off dangerous mobs. Create, explore and survive alone or with friends on mobile devices or Windows 10.
		</p>
		<span class="img-container">
			<img src="../IMG/MC/mc1.jpg" style="width: 75%;" alt="ori menu">
		</span>
		<p>
			Marketplace - Discover the latest community creations in the marketplace! Get unique maps, skins, and texture packs from your favorite creators.
		</p>
		<p>
			Slash commands - Tweak how the game plays: you can give items away, summon mobs, change the time of day, and more.
		</p>
		<p>
			Add-Ons - Customize your experience even further with free Add-Ons! If you're more tech-inclined, you can modify data-driven behaviors in the game to create new resource packs.
		</p>
		<p>
			Realms - Play with up to 10 friends cross-platform, anytime, anywhere on Realms, your own private server that we host for you. Try a free 30-day trial in-app.
		</p>
		<p>
			Multiplayer - Play with up to 4 friends with a free Xbox Live account online.
		</p>
		<span class="img-container">
			<img src="../IMG/MC/mc2.jpg" style="width: 75%;" alt="ori skill">
		</span>
		<p>
			Servers - Join free massive multiplayer servers and play with thousands of others! Discover gigantic community-run worlds, compete in unique mini-games and socialize in lobbies full of new friends!
		</p>
		<p>
			Fight your way through an all-new action-adventure game, inspired by classic dungeon crawlers and set in the Minecraft universe!
		</p>
		<p>
			Get instant access to over 50 Marketplace items with new additions each month. Share with friends on your own private Realms server.
		</p>
		<p>
			Expand your Minecraft world with skins, textures and worlds designed by the community.
		</p>
		<span class="img-container">
			<img src="../IMG/MC/mc3.jpg" style="width: 75%;" alt="ori running">
		</span>
		<p>
			Prepare for an adventure of limitless possibilities as you build, mine, battle mobs, and explore the ever-changing Minecraft landscape.
		</p>
		<p>
			The RTX beta for Windows 10 brings a brand new experience to Minecraft! Join the beta to enjoy creator-built worlds with realistic lighting, vibrant colors, naturally reflective water and emissive textures that light up.
		</p>
		<p>
			Real-time ray tracing for Windows 10 pushes Minecraft’s graphical boundaries even more! Through partnership with NVIDIA, we’re bringing ray tracing to DirectX capable devices, such as GeForce RTX GPU. Experience it in selected Marketplace worlds, available for free download!
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
		$file_exist = count(scandir("../COMMENT/MINECRAFT/"));
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