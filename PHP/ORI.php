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
	<title>Ori and the Blind Forest Thread</title>
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
			), url("../IMG/ORI/oriWall.jpg") no-repeat center fixed;
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
	<h1 class="judul animated fadeInDown slower">Ori and The Blind Forest</h1>
</header>

<article class="animated bounceInUp">
	<section>
		<p>
			Moon Studios’ much anticipated platformer looks as though it may place beauty over rewarding gameplay – until you drop your preconceptions and play it.
		</p>
		<span class="img-container">
			<img src="../IMG/ORI/ori2.jpg" style="width: 75%;" alt="ori menu">
		</span>
		<p>
			Ori and the Blind Forest is a beautiful Metroid-inspired platformer, that offers much more than scenic detail.
		</p>
		<p>
			At first sight you may think that something so beautiful couldn’t possibly have substance. Ori and the Blind Forest is so lovingly drawn, so full of light and colour, so deeply layered with scenic detail, that you suspect the developers will want to take you by the hand to ensure you see it all.
		</p>
		<p>
			To the credit of Moon Studios, the opposite is true. This game may be beautiful, but it is also deadly.
		</p>
		<p>
			Mixing interactive sequences and memory vignettes, the Ghibli-inspired opening sequence introduces us to the eponymous forest spirit Ori and her bear-like caregiver before tearing them apart. The rich artistic style conspires against the player: hazards are not exaggerated and obvious but blend in like natural features, and you’ll likely end up stumbling into a cluster of deadly spiky growths as you stumble into a nettle patch in the garden of your childhood home.
		</p>
		<p>
			From the start precision and attention to detail are demanded. A lazy jump won’t automatically reach its target; you have to perfect the timing and learn the arc of the motion. Also, your limitations aren’t immediately obvious – you might not realise right away that some areas are supposed to be out of reach until Ori has learned a new skill.
		</p>
		<span class="img-container">
			<img src="../IMG/ORI/ori1.jpg" style="width: 75%;" alt="ori skill">
		</span>
		<p>
			The overarching goal is to retrieve elements of light to aid a spirit tree and repair the damage done by a giant owl who hates the light. At any one time, however, the task is usually just to get from A to B without dying as the world opens up around you. Though sections look and feel different to one another as you run the gamut from lava to water to ice, most parts of the game world are connected by routes that are traceable on the large map. Areas you’ve visited are coloured in with representative background art, and paths not yet travelled lead into shadow, beckoning exploration. Map stone fragments, which reveal undiscovered areas but leave them uncoloured, are often hidden in side routes themselves and must be taken to a map stone to use, so even that informational shortcut requires some effort.
		</p>
		<p>
			The game rewards thorough players who check out side channels as they come across them, usually with collectables that increase Ori’s life (health) and energy bars. Life is simple: the more you have, the more hits you can take, though some incidents are fatal no matter how long your life bar. Energy is more interesting. Ori’s basic auto-targeting ranged attack, actually carried out by her small flying companion Sein, doesn’t use up energy, but other offensive moves do. One example is a particularly destructive attack that clears obstacles, which means that your path may literally be blocked until you go and find more energy.
		</p>
		<p>
			Lack of energy can also halt your progress in a more irritating way, as it’s needed to create checkpoints called soul links. Some save points are scattered through the world, and the game saves automatically after turning points in the story, but players may have travelled far from the last save before reaching a concentrated area of particularly difficult platforming, and if they don’t have enough energy to create their own checkpoint right before their first attempt they’ll be faced with repeating that journey. For some players, this might seem like an unnecessary barrier and put them off the game entirely. For others, the risk/reward balance of managing this resource will add interest to an otherwise straightforward platformer formula.
		</p>
		<p>
			Further interest comes in an RPG element: an upgrade tree. Alongside energy and life refills, enemies can also drop experience, which can be spent on three upgrade paths. Abilities like breathing underwater and gathering collectables at a greater distance aren’t necessary to complete the game, but they do reward players who’ve taken out a lot of enemies by making things easier for them.
		</p>
		<p>
			This is a Metroidvania-style game, however, and some new skills are necessary to progress. Ori unlocks these nine abilities from trees that memorialise dead spirits. Most are familiar, and overlap slightly so they feel like a more natural progression of her movement abilities: for example, after Ori learns to jump up walls with the repeated tap of a button, she learns to climb them with a button held down.
		</p>
		<span class="img-container">
			<img src="../IMG/ORI/ori3.jpg" style="width: 75%;" alt="ori running">
		</span>
		<p>
			A new section of the map often requires a freshly learned ability with which to successfully navigate it. Once Ori has learned how to grip to a vertical wall, she’s required to hang on to the side of a floating island and switch sides as it rises through jets of lava coming from alternate directions. Similarly, when she’s learned how to dash through lanterns, enemies, and projectiles, she’ll face a section with no safe ground, the only route through which is a carefully planned and timed chain of dashes through the air. These sections are particularly interesting: more than just obstacles to clear, Ori needs to make enemies, getting close enough to draw their ire, and then using their projectiles to dash her way to safety.
		</p>
		<p>
			As well as these regular sections, Ori and the Blind Forest features occasional sequences that really test the player’s skill and patience. Fortunately, the game often automatically saves right before these boss-type events. Unfortunately, you’re usually unable to create your own soul links partway through these sections – you can’t create them too close to enemies or on unstable ground – and so failure means getting sent back to the beginning. With their demand for precise timing and quick reaction times, and often foreknowledge of what’s to come, success is often a case of repeating the sequence enough times that you’ve learned the exact button presses required. It’s punishing but never feels impossible, and each of these special sequences comes to a worthwhile conclusion.
		</p>
		<p>
			The same goes for the game as a whole. Despite having a clear antagonist, instead of a final boss battle, you face a demanding platforming section – it’s an escape rather than a fight. The conclusion is satisfying narratively too: while the lore about elements and light and dark is nothing special, what you witness of the characters in brief moments throughout the game is touching, sandwiched by that emotional intro and an equally touching final scene. It’s a great end to a challenging and scenically beautiful journey.
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
		$file_exist = count(scandir("../COMMENT/ORI/"));
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