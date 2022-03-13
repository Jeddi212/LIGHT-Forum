<!DOCTYPE html>
<html>
<head>
	<title>LIGHT Merchandise</title>
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
			font-size: 4vw;
		}
		.container {
			margin: 10%;
			padding: 5%;
		}
	</style>
</head>
<body>
<?php
	session_start();
	
	$con = mysqli_connect("localhost", "root", "", "light_db");
	
	if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
	
	
	if(isset($_POST['buy'])){
		$username = $_SESSION['username'];
		$telp_pembeli = $_POST['telp'];
		$alamat_pembeli = $_POST['alamat'];
		$komentar_pembeli = $_POST['comment'];
		
		$id_barang = $_POST['Kode_Barang'];
		$jumlah_barang_dibeli = $_POST['jumlah'];
		
		//ambil tanggal 
		date_default_timezone_set('Asia/Jakarta');
		$tanggal_beli = date("Y-m-d");
			
		//upload foto bukti
		$dir = "../Upload_bukti_pembelian/";
		$foto = $dir.$_FILES['file']['name'];
		$temp_file = $_FILES['file']['tmp_name'];
		move_uploaded_file($temp_file, $foto);
		
		//mengambil value email
		$query = mysqli_query($con, "SELECT * FROM members");
				
		if(mysqli_num_rows($query) > 0){
			while($data = mysqli_fetch_array($query)){
				if($data['username'] == $_SESSION['username']){
					$email_pembeli = $data['email'];
				}
			}
		}
		
		
			//menghitung biaya pembelian_merchandise
			$total_harga = 0;
			$Total_income = 0;
			$query2 = mysqli_query($con, "SELECT * FROM stock");
					
			if(mysqli_num_rows($query2) > 0){
				while($data2 = mysqli_fetch_array($query2)){
					if($data2['stock'] >= $jumlah_barang_dibeli){
						if($id_barang == $data2['id_merch']){
							$total_harga = $data2['harga'] * $jumlah_barang_dibeli;
							
							
							$sisa_stock = $data2['stock'] - $jumlah_barang_dibeli;
							
							$sql = "INSERT INTO pembelian_merchandise(username, email, telepon, id_merch, jumlah, alamat_lengkap, total_Harga, tanggal, foto_bukti, komentar) VALUES ('$username', '$email_pembeli', '$telp_pembeli', '$id_barang', $jumlah_barang_dibeli, '$alamat_pembeli', $total_harga, '$tanggal_beli', '$foto', '$komentar_pembeli')";
							
							if(mysqli_query($con, $sql)){
								echo "<h1>Data barang berhasil dicatat, mohon tunggu barang anda sampai di rumah <br></h1>";
								echo "<a href='merchandise.php'>Kembali Belanja Merchandise</a>";
								$sql2 = "UPDATE stock SET stock=$sisa_stock WHERE id_merch='$id_barang'";

								if ($con->query($sql2) == TRUE) {
									echo "<h1>Record updated  stock successfully</h1>";
								} else {
									echo "<h1>Error stock updating record: </h1>" . $con->error;
								}
							}else{
								echo "<h1>Error, gagal mencatat data pesanan <br></h1>";
								echo '<a href="merchandise.php">Back to merchandise page</a>';
							}
							
							
						}
					}else{
						echo "<h1>Stock yang tersedia tidak cukup <br></h1>";
						echo '<a href="merchandise.php">Back to merchandise page</a>';
					}
					
				}
			}
			
			$query3 = mysqli_query($con, "SELECT * FROM income WHERE jenis_income='Pembelian Merchandise'");
					
			if(mysqli_num_rows($query3) > 0){
				while($data3 = mysqli_fetch_array($query3)){
					$Total_income = $data3['total_income'] + $total_harga;
					
					$sql3 = "UPDATE income SET total_income=$Total_income WHERE jenis_income='Pembelian Merchandise'";

					if ($con->query($sql3) == TRUE) {
						echo "<h1>Record updated total_income Merchandise successfully</h1>";
					} else {
						echo "<h1>Error total_income merchandise updating record: </h1>" . $con->error;
					}
				}
			}
	}
	mysqli_close($con);
?>
</body>
</html>