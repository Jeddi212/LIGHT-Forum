<!DOCTYPE html>
<html>
<head>
	<title>Feedback Message</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<style type="text/css">
		a {
			text-decoration: none;
			font-size: 30px;
			color: #000;
			font-family: 'pixel'
		}
		a:hover {
			color: orange;
		}
		h1 {
			font-family: 'alte';
			font-size: 8vw;
		}
		.container {
			margin: 2%;
			padding: 1%;
		}
	</style>
</head>
<body>
<div class="container">
	<?php
	session_start();
	if(isset($_POST['submit'])){
		if($_POST['feedback_box'] != null){
			
			$sender = $_SESSION['username'];
			date_default_timezone_set("Asia/Jakarta");
			$tanggal = date("Y-m-d (H:i:s)");
			$tanggal_2 = date("Y_m_d(H_i_s)");

			$feedback = '<?xml version="1.0" encoding="UTF-8"?>
			<?xml-stylesheet type="text/css" href="../CSS/feedbackLoad.css"?>';
			$feedback .= "<feedback>";
			$feedback .= "<username>" . $sender . "</username>";
			$feedback .= "<date>" . $tanggal . "</date>";
			$feedback .= "<words>" . $_POST['feedback_box'] . "</words>";
			$feedback .= "</feedback>";
			$x = new SimpleXMLElement($feedback);
			$x->asXML("../FEEDBACK/$sender $tanggal_2.xml");
			
			echo "<h1>Your feedback has been collected!<br>Thank you $sender</h1>";
			
		}else{
			echo "<h1>Please fill the comment section</h1>";
		}
	}
	?>

	<a href="feedback.php">Back to feedback</a>
</div>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>