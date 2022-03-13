<!DOCTYPE html>
<html>
<head>
	<title>Add Merchandise Message</title>
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
			font-size: 5vw;
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
		$con = mysqli_connect("localhost", "root", "", "light_db");
		
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		if(isset($_POST['add_barang'])){
			$Nama_barang = $_POST['nama_barang'];
			$Kode_barang = $_POST['kode_barang'];
			$Harga_barang = $_POST['harga_barang'];
			$Stock_barang = $_POST['stock_barang'];
			$Deskripsi_barang = $_POST['deskripsi'];
			
			$dir = "../Upload_barang_merchandise/";
			$foto = $dir.$_FILES['file']['name'];
			$temp_file = $_FILES['file']['tmp_name'];
			move_uploaded_file($temp_file, $foto);
			
			$sql = "INSERT INTO stock(name, id_merch, harga, stock, deskripsi, foto_barang) VALUES ('$Nama_barang', '$Kode_barang', $Harga_barang, $Stock_barang, '$Deskripsi_barang', '$foto')";
			
			if(mysqli_query($con, $sql)){
				echo "<h1>Data barang $Nama_barang berhasil ditambahkan <br></h1>";
				echo '<a href="add_stok_merchandise.php">Back to add stock merchandise page</a>';
			}else{
				echo "<h1>Gagal menambahkan data barang merchandise baru <br></h1>";
				echo '<a href="add_stok_merchandise.php">Back to add stock merchandise page</a>';
			}
		}
		mysqli_close($con);
	?>
</div>

<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>