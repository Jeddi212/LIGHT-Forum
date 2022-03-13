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
	<title>LIGHT Buying Merchandise</title>
	<meta name="viewport" content="widht=device-widht, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../CSS/donate.css">
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
			margin: auto;
			margin-bottom: 5%;
			max-width: 50%;
			min-height: 100%;
			border-radius: 5px;
			background: rgba(0, 0, 0, 0.5);
			padding: 20px;
		}
		
		#sub{
			margin-top: 5%;
			text-align: center;
			font-family: azo;
		}
		
		.user{
			border: 2px solid white;
			border-radius: 4px;
			padding: 10px;
		}
		
		input[type=text], input[type=number], select, textarea {
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
		
	</style>
</head>
<body>
	<?php
		if(isset($_POST['buying'])){
			$Kode_Barang = $_POST['kode_barang'];
	?>
	
			<h2 id="sub">Get Your Merchandise Now !!!</h2><br>
			<?php include 'navbar.php'; ?>
			
			<div class="container">
				<form action="add_merchandise.php" name="add_merchandise" method="POST" enctype="multipart/form-data">
					<div id="myBtn"><a href="contact_donate.php">How Can I Pay?</a></div><br>
					<label for="info"><i><b style="color:red;text-decoration:underline;">Note : Please fill out this form after pay the merch!!!</i></b></label><br><br>
					<label for="username">Username</label><br>
					<?php
						if (isset($_COOKIE['username'])) {
							echo "<p class='user'><b><i>".$_COOKIE['username']."</i></b></p>";
						} else if (isset($_SESSION['username'])) {
							echo "<p class='user'>".$_SESSION['username']."</p>";
						}
						
						$con = mysqli_connect("localhost", "root", "", "light_db");

						if(mysqli_connect_errno()){
							echo "Failed to connect to MySQL: " . mysqli_connect_error();
						}

						$query = mysqli_query($con, "SELECT * FROM members");
						
						echo "<label for='email'>Email</label><br>";
						
						if(mysqli_num_rows($query) > 0){
							while($data = mysqli_fetch_array($query)){
								if($data['username'] == $_SESSION['username']){
									echo "<p class='user'><b><i>".$data['email']."</i></b></p>";
								}
							}
						}
						
						
						
						echo '<input type="hidden" readonly id="kode_barang" name="Kode_Barang" value="'.$Kode_Barang.'">';
						
					?>
					
					
						
					
					<label for="telp">Nomor Telepon</label>
					<input type="text" required id="telp" name="telp" value="" placeholder="082118930992">
					
					<label for="alamat">Alamat Lengkap</label>
					<input type="text" required id="alamat" name="alamat" value="" placeholder="your addree..">
					
					<label for="jumlah">Jumlah Barang Yang Dibeli</label>
					<input type="number" required id="jumlah" name="jumlah" min="1" max="100" step="1" value="1">
					
					<label for="foto_bukti">Lampirkan Foto Bukti Pembayaran</label><br><br>
					<input type="file" required name="file" id="file"><br><br>
					
					<label for="comment">Comment / Pesan</label>
					<textarea id="comment" required name="comment" value="" placeholder="Isi deskripsi produk yang ingin dipesan supaya tidak ada kesalahan barang" style="height:100px"></textarea>

					<input type="submit" value="Submit" name="buy"><input type="reset" value="Clear"><br><br>
				</form>
			</div>
			
			<div class="footer animated bounceInUp">
				<p>Alex + Fedly + Jeddi + Lucky</p>
				<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
			</div>

			<script>
			if ( window.history.replaceState ) {
			  window.history.replaceState( null, null, window.location.href );
			}
			</script>
	<?php } ?>
</body>
</html>

<?php } ?>