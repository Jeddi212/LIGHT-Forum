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
	<title>World of Warships Thread</title>
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
			), url("../IMG/WOWS/wowsWall.png") no-repeat bottom fixed;
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
	<h1 class="judul animated fadeInDown slower">World of Warships</h1>
</header>

<article class="animated bounceInUp">
	<section>
		<p>
			World of Warships is a naval action MMO, dipping into the world of large-scale sea battles of the first half of the twentieth century. Epic battles rage across the oceans of the world in order to claim victory among teams comprised of the greatest representatives from the era of multi-ton marine giants.
		</p>
		<p>
			In order to achieve victory in battle, players must employ a wide range of strategies in a variety of tactical decisions. Sudden ambushes, cunning flanking attacks, open confrontation and "head-on" assaults — captains must strive to find an ideal way to deliver a decisive blow at the enemy.
		</p>
		<p>
			Tactical diversity in World of Warships comes from the inclusion of many different classes of warships, including: aircraft carriers, capable of providing remote air support and striking targets at extreme range; colossal battleships that project power across vast swaths of ocean; light and heavy cruisers with the capability to quickly respond to changing battlefield conditions; and stealthy, agile destroyers which can be highly effective in group attacks.
		</p>
	</section>
	<br>
	<section>
		<h1>Crafting the Best Experience</h1>
		<p>
		It may seem like a simple question, but when you start designing a game one of the questions you ask yourself is “what kind of game do we want this to be?” Because our previous titles are, in a sense, close command of one vehicle, we found that this doesn’t translate to the sheer scope and scale of what World of Warships was going to become.
		</p>
		<p>
		The nature of naval warfare is different to tanks and warplanes in its purest form. Players can control battleships with awesome firepower, captain destroyers that launch torpedoes, utilize cruisers to combine the best features of the two former classes, providing balance, and use aircraft carriers to send out planes.
		</p>
		<p>
			It’s about taking that strategic and methodical dimension of game play and making it as fun and engaging as possible. Whereas World of Tanks and World of Warplanes are more insular, World of Warships is a global battlefield taken up several notches. Now you’ll have a whole ocean to think about.
		</p>
		<span class="img-container">
			<img src="../IMG/WOWS/wows1.jpg" style="width: 75%;" alt="ship close up">
		</span>
		<h1>Why the 20th Century</h1>
		<p>
			World of Warships covers and draws inspiration from the period around 1900–1950, when naval warfare was going through some exciting changes.
		</p>
		<p>
			1900 served as the best starting point for World of Warships because it was a time when there was a transition from steam-powered vessels. This period was in-keeping with the “World” era, so there’s a connection running through each of our series titles. In 1905, we had the “Dreadnought” race, initiated by the English. This acted as the spark that encouraged other countries to begin building.
		</p>
		<p>
			Another reason for the extension in time was due to the fact that from 1921–1938 there was a so-called “vacation” period with fewer large ships being built. With an extended period, we were able to include iconic vessels that could also be balanced within our world, creating a lot of interesting possibilities for our players.
		</p>
		<h1>Creating Your Foundations</h1>
		<p>
			One of the positives around mid-20th century warfare history is that not only is there a great wealth of information available in books and online, we have the opportunity to visit locations and perform hands-on research. For us, this is essential, as we strive towards historical accuracy.
		</p>
		<p>
			In our Warships research, we’ve had the chance to visit iconic locations across the globe. Whether it’s Patriots Point and the USS Yorktown, the USS Massachusetts, Pensacola’s National Naval Aviation Museum, or the Navy Qingdao museum in China to visit The Soviet “Project 7” Destroyer Fleet, we wanted to have the best foundations for creating an authentic experience.
		</p>
		<h1>The Devil's in the Details</h1>
		<p>
			So tanks, warplanes—they’re not small, but they’re not a warship by any means. Take the Churchill tank: it’s around 24ft 5 in (7.44 m) length-wise and you can cram about five surly British soldiers in there. If we jump across the pond and look at the Iowa-class battleship, it’s 887ft, 270 m (overall). It’s long—around 37 tanks long. And there’s a lot more…stuff. Guns, cabins, turrets, decks, rooms, and a bunch of other fiddly things.
		</p>
		<p>
			What does this mean? There’s a lot of things to model, design, render, and in much higher detail. On average, any ship consists of as many polygons as 30 tanks in the non-HD version of World of Tanks. This means that any ship's turret has the same number of polygons as one tank!
		</p>
		<h1>Water, Water, Everywhere</h1>
		<p>
			From experience, warships don’t cope too well on dry land. They can’t really go anywhere. But the ocean is vast. There may be a few inlets, atolls and islands, but the mechanics of battle differ from land-based combat. It’s more similar to Warplanes, in a sense. You can’t simply stay in one spot and hope for the best: you have to keep moving, keep checking your environment, be aware of what’s cresting the horizon.
		</p>
		<p>
			And it’s not just the battle landscape. Constantly changing weather conditions influence any vessel, and like grass, rock, and snow, the ocean certainly isn’t smooth sailing. You’re battling the crush and current, so being mindful of the temperament of the ocean you’re traversing is key.
		</p>
		<span class="img-container">
			<img src="../IMG/WOWS/wows2.png" style="width: 100%;" alt="ship blue print">
		</span>
		<h1>Settting the Stage</h1>
		<p>You’ve got warships, you know what kind of game you want, the water’s there, so where are all these elements going to destroy each other? Each level is meant to be a microcosm that extracts the pure elements, the raw fun, from each playing experience. Though maps have variety of things to offer a player, they each have their own goals and way to guide the narrative of battle.
		</p>
		<p>
			For World of Warships, creating engaging levels is a collaboration of several departments. They decide how it should look, what they want the player to feel, and the unique element it can offer. We’ll see levels inspired from the Pacific Ocean, Atlantic Ocean, North Sea, and South China Sea. There are maps of different sizes, with smaller sizes for lower tiers, and those designed for multiple Battle modes.
		</p>
		<span class="img-container">
			<img src="../IMG/WOWS/wows3.jpg" style="width: 75%;" alt="warships landscape">
		</span>
		<h1>Onward to the Horizon</h1>
		<p>
			With the commencement of World of Warships: Rock-Paper-Scissors Test Event, coming off the back of successful Alpha tests with enthusiasts across the globe, we’ve been constantly refining gameplay elements and using our background of expert knowledge to craft a truly engaging gaming experience that treads new and exciting waters for Wargaming.
		</p>
		<p>
			We hope you’re just as passionate as we are about World of Warships, and can find out loads of interesting information over at our dedicated blog, where you’ll find interviews with those at the heart of the project, cool graphics, tons of visuals, and even more exciting info.
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
		$file_exist = count(scandir("../COMMENT/WOWS/"));
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