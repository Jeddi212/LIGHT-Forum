<div id="mySidenav" class="sidenav">
	<a href="javascript:void(0)" class="hvr-push closebtn" onclick="closeNav()">&times;</a>
	<a href="forum.php">FORUM</a>
	<div class="donate" onmouseover="this.style.height = '218px'" onmouseout="this.style.height = '45px'" style="height: 45px; overflow: hidden;">
		<a href="donate_form.php">Donate</a>
		<a href="donate_identity.php">Donate With Identity</a>
		<a href="donate_unknown.php">Donate Without Identity</a>
	</div>
	<a href="event_regist.php">Event Registration</a>
	<a href="merchandise.php">Merchandise</a>
	<a href="feedback.php">Contact</a>
	<a href="logout.php">Logout</a> 
	<?php 
		if($_SESSION['type'] == 'Admin'){
			echo "<a href='admin.php'>Admin</a> ";
		}
	?>
</div>
<nav class="animated slideInLeft 2s" onclick="openNav()">
	<div class="hvr-float">
		&#9776; 
		<?php

			if (isset($_COOKIE['username'])) {
				echo $_COOKIE['username'];
			} else if (isset($_SESSION['username'])) {
				echo $_SESSION['username'];
			} else {
				echo 'NAVBAR';
			}

		?>
	</div>
</nav>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>