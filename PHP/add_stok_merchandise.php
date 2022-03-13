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
			url('../Image_Video/background_merchandise.png') repeat-y;
			background-size: 100%;
			color: white;
		}
		
		.container {
			background: rgba(0, 0, 0, 0.5);
			margin: auto;
			margin-top: 5%;
			margin-bottom: 5%;
			max-width: 40%;
			min-height: 100%;
			border-radius: 5px;
			padding: 20px;
		}
		
		input[type=text], select, textarea {
			width: 100%;
			padding: 12px;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
			margin-top: 6px;
			margin-bottom: 16px;
			resize: vertical;
			background: rgba(1, 0.5, 0.5, 0.5);
			color: white;
		}

		input[type=submit], input[type=reset] {
			color: white;
			padding: 12px 20px;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		input[type=submit]{
			background-color: #4CAF50;
		}
		
		input[type=reset]{
			background-color: red;
			margin-left: 20px;
		}

		input[type=submit]:hover {
			background-color: orange;
		}
		
		input[type=reset]:hover {
			background-color: orange;
		}
		
		#myBtn{
			background-color: blue;
			color: white;
			padding: 12px 20px;
			width: 100%;
			text-align: center;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
		
		#myBtn a{
			color: white;
		}
		
		#myBtn a:hover{
			color: red;
		}
		
		#title{
			text-align: center;
			font-family: azo;
		}
		
		.card {
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
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

		.card button {
			border-radius: 3px;
			border: 2px solid white;
			padding: 12px;
			background-color: #79ff6c;
			text-align: center;
			font-size: 18px;
			margin-bottom: 50px;
		}

		.card button:hover {
			opacity: 0.5;
		}
		
		.card a{
			color: black;
		}
	</style>
</head>
<body>
	
	<?php include 'navbar.php'; ?>
	
	<!--Content-->
	<div class="container">
		<h1 id="title">Add new merchandise</h1>
		<div class="card">
			<form method="POST" name="add_stok_merchandise" enctype="multipart/form-data" action="prosesAddStockMerchandise.php">
			<label for="nama_barang">Nama Barang</label>
			<input type="text" required id="nama_barang" name="nama_barang" value="" placeholder="Kaos putih mobile legends">

			<label for="kode_barang">Kode Barang</label>
			<input type="text" required id="kode_barang" name="kode_barang" value="" placeholder="00001">
			
			<label for="harga_barang">Harga Barang</label>
			<input type="text" required id="harga_barang" name="harga_barang" value="" placeholder="100000">
			
			<label for="stock_barang">Stock Barang</label>
			<input type="text" required id="stock_barang" name="stock_barang" value="" placeholder="100">
			
			<label for="deskripsi">Deskripsi Barang</label>
			<textarea id="deskripsi" required name="deskripsi" value="" style="height:100px" placeholder="Kaos mobile legends warna putih dengan gambar karakter"></textarea>
			
			<label for="foto_barang">Upload Foto Barang</label><br><br>
			<input type="file" required name="file" id="file"><br><br>

			<input type="submit" value="Add Merchandise" name="add_barang"><input type="reset" value="Clear"><br><br>
		</form>
		</div>
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

<?php 
} 
?>
