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
	<title>ADMIN</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<link rel="stylesheet" type="text/css" href="../CSS/thread.css">
	<link rel="stylesheet" type="text/css" href="../CSS/feedbackLoad.css">
	<style type="text/css">
		html, body {
			color: white;
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			), url("../IMG/ADMIN/adminWall.jpg") no-repeat center fixed;
			font-family: 'alte';
		}
		button , a{
			background-color: transparent;
			border: none;
			color: #FFF;
			cursor: pointer;
			font-family: 'blacklisted';
		}
		button:hover, a:hover {
			color: orange;
		}
		.close {
			position: absolute;
			top: 0;
			right: 0;
			font-size: 36px;
			margin-left: 50px;
		}
		#deleteComment, #listMember, #listIncome, #listParticipants, #listPendonasi, #listMerchandise, #listStock, #viewFeedback, #commentListCSGO, #commentListFORT, #commentListLOL, #commentListMC, #commentListML, #commentListORI, #commentListWOWS {
			height: 100%;
			width: 0;
			top: 0;
			right: 0;
			z-index: 2;
			position: fixed;
			background-color: #111;
			overflow: scroll;
			transition: 0.5s;
			font-family: 'blacklisted';
		}
		#listMember, #listIncome, #listParticipants, #listPendonasi, #listMerchandise, #listStock, #viewFeedback, #commentListCSGO, #commentListFORT, #commentListLOL, #commentListMC, #commentListML, #commentListORI, #commentListWOWS {
			left: 0;
			font-family: Consolas;
		}
		.inner {
			padding-top: 30px;
			margin-left: 25px;
			margin-right: 25px;
		}
		table {
			border: 1px solid grey;
			width: 100%;
			border-collapse: collapse;
		}
		th, td {
			padding: 5px;
			font-size: 15px;
		}
	</style>
</head>
<body>

<header>
	<?php include 'navbar.php'; ?>
	
	<h1 class="judul animated fadeInDown slower">ADMIN</h1>
</header>

<?php 

	// include 'adminFunctionDelete.php';
	include 'adminListing.php';

?>

<article class="animated bounceInUp">
	<button onclick="openDiv('listMember')" style="font-size: 30px;">LIST MEMBER</button><br>
	<button onclick="openDiv('listParticipants')" style="font-size: 30px;">LIST PARTICIPANTS</button><br>
	<button onclick="openDiv('listIncome')" style="font-size: 30px;">LIST INCOME</button><br>
	<button onclick="openDiv('listPendonasi')" style="font-size: 30px;">LIST DONATUR</button><br>
	<button onclick="openDiv('listMerchandise')" style="font-size: 30px;">LIST MERCHANDISE TRANSACTIONS</button><br>
	<button onclick="openDiv('listStock')" style="font-size: 30px;">LIST STOCK</button><br>
	<button onclick="openDiv('viewFeedback')" style="font-size: 30px;">VIEW FEEDBACK</button><br>
	<button onclick="openDiv('deleteComment')" style="font-size: 30px;">DELETE COMMENT</button><br>
	<a href="add_stok_merchandise.php" style="font-size: 30px;">ADD MERCHANDISE</a><br>
</article>

</div>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

<div class="footer animated bounceInUp">
	<p>Alex + Fedly + Jeddi + Lucky</p>
	<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
</div>

</body>
</html>

<?php } ?>