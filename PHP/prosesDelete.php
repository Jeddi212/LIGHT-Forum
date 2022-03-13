<!DOCTYPE html>
<html>
<head>
	<title>Delete Message</title>
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
			margin: 10%;
			padding: 5%;
		}
	</style>
</head>
<body>

<div class="container">
	<?php
		
		if (isset($_POST['submit'])) {
		    $path_file = $_POST['delete'];
		    foreach ($path_file as $delete_file) {
		    	unlink($delete_file);
		    }
		    echo '<h1>Delete Success</h1>';
		    echo '<a href="admin.php">Back to admin page</a>';
		} else {
			echo '<a href="admin.php">Back to admin page</a>';
		}

	?>
</div>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>