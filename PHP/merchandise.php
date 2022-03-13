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
	<meta name="author" content="LIGHT Group">
	<title>LIGHT Merchandise</title>
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<style>
		body{
			background: 
			linear-gradient(
				rgba(0, 0, 0, 0.8),
				rgba(0, 0, 0, 0.8)
			),
			url('../IMG/MERCHANDISE/background_merchandise.png') repeat-y;
			background-size: 100%;
			color: white;
		}
		
		.container {
			margin: auto;
			margin-top: 5%;
			max-width: 95%;
			min-height: 100%;
			border-radius: 5px;
			padding: 20px;
		}
		
		#title{
			text-align: center;
			font-family: azo;
		}
		
		#sub{
			text-align: center;
			font-family: azo;
		}
		
		.card {
			float: left;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			max-width: 200px;
			max-height: 500px;
			padding-left: 80px;
			padding-bottom: 80px;
			margin: auto;
			text-align: center;
			font-family: arial;
		}
		
		.barang{
			width: 100%;
			border-radius: 3px;
		}
		
		.barang:hover{
			opacity: 0.5;
		}

		.price {
			color: red;
			font-size: 20px;
		}

		input[type=submit] {
			border-radius: 3px;
			border: 2px solid white;
			padding: 12px;
			background-color: #79ff6c;
			text-align: center;
			font-size: 18px;
			margin-bottom: 50px;
		}

		input[type=submit]:hover {
			opacity: 0.5;
		}
	</style>
</head>
<body>
	
	<?php include 'navbar.php'; ?>
	
	<!--Content-->
	<div class="container">
		<h1 id="title">Welcome To LIGHT Merchandise Shop</h1>
		<h2 id="sub">Happy Shoping !!!</h2><br>
		
		<?php
			$con = mysqli_connect("localhost", "root", "", "light_db");

			if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$query = mysqli_query($con, "SELECT * FROM stock");
			
			if(mysqli_num_rows($query) > 0){
				while($data = mysqli_fetch_array($query)){
			
		?>
			<div class="card">
				<form action="buying_merch.php" name="pendonasi" method="POST" enctype="multipart/form-data">
					<?php
						echo "<h3 class='namaBarang'>".$data['name']."</h3>";
						echo '<img class="barang" alt="Merchandise LIGHT Gaming Forum" src="'.$data['foto_barang'].'">';
						echo '<p class="price">Rp.'.$data['harga']."</p>";
						echo '<p>Stok tersedia : '.$data['stock']."</p>";
						echo '<p>'.$data['deskripsi']."</p>";
						//echo '<button><a href="buying_merch.php">Buy Now</a></button>';
						//echo '<button><input type="submit" value="Buy Now" name="'.$data['id_merch'].'"></button>';
						echo '<input type="hidden" readonly id="kode_barang" name="kode_barang" value="'.$data['id_merch'].'">';
						echo '<input type="submit" name="buying" value="Buy Now">';
					?>
				</form>
			</div>
		<?php
				}
			}
		?>
	</div>
	
	<div class="footer animated bounceInUp" style="clear:both;">
		<p>Alex + Fedly + Jeddi + Lucky</p>
		<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
	</div>

	<script>
	if ( window.history.replaceState ) {
	  window.history.replaceState( null, null, window.location.href );
	}
	</script>

</body>
</html>

<?php } ?>