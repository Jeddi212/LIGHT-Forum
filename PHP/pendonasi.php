<!DOCTYPE html>
<html>
<head>
	<title>LIGHT Donate</title>
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

	if(isset($_POST['DonasiIdentity'])){
		$Username = $_SESSION['username'];
		$Country_pendonasi = $_POST['country'];
		$Nominal_donasi = $_POST['nominal'];
		date_default_timezone_set('Asia/Jakarta');
		$Tanggal_donasi = date("Y-m-d");
		$Comment_pendonasi = $_POST['comment'];
		$dir = "../Upload_bukti_donasi/";
		$foto = $dir.$_FILES['file']['name'];
		$temp_file = $_FILES['file']['tmp_name'];
		move_uploaded_file($temp_file, $foto);
		
		$con = mysqli_connect("localhost", "root", "", "light_db");
		
		if(mysqli_connect_errno()){
			echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		
		$query = mysqli_query($con, "SELECT * FROM members");
		
		if(mysqli_num_rows($query) > 0){
			while($data = mysqli_fetch_array($query)){
				if($data['username'] == $_SESSION['username']){
					$Email_pendonasi = $data['email'];
				}
			}
		}
	
		$sql = "INSERT INTO pendonasi(username, email, country, jumlah_donasi, tanggal, komentar, foto_bukti) VALUES ('$Username', '$Email_pendonasi', '$Country_pendonasi', $Nominal_donasi, '$Tanggal_donasi', '$Comment_pendonasi', '$foto')";
		
		if(mysqli_query($con, $sql)){
			echo "<h1>Thanks for your donation $Username <br></h1>";
			echo "<a href='donate_identity.php'>Back to page donate</a>";
		}else{
			echo "<h1>Gagal melakukan donasi</h1>";
			echo "<a href='donate_identity.php'>Back to page donate</a>";
		}
		
		$Total_income = 0;
		$query3 = mysqli_query($con, "SELECT * FROM income WHERE jenis_income='Donasi'");
					
		if(mysqli_num_rows($query3) > 0){
			while($data3 = mysqli_fetch_array($query3)){
				$Total_income = $data3['total_income'] + $Nominal_donasi;
				
				$sql3 = "UPDATE income SET total_income=$Total_income WHERE jenis_income='Donasi'";

				if ($con->query($sql3) == TRUE) {
					echo "<h1>Record updated total_income Donasi successfully</h1>";
				} else {
					echo "<h1>Error total_income donasi updating record: </h1>" . $con->error;
				}
			}
		}
		
	}else if(isset($_POST['DonasiUnknown'])){
		$Country_pendonasi = $_POST['country'];
		$Nominal_donasi = $_POST['nominal'];
		date_default_timezone_set('Asia/Jakarta');
		$Tanggal_donasi = date("Y-m-d");
		$Comment_pendonasi = $_POST['comment'];
		$dir = "../Upload_bukti_donasi/";
		$foto = $dir.$_FILES['file']['name'];
		$temp_file = $_FILES['file']['tmp_name'];
		move_uploaded_file($temp_file, $foto);
		
		$con = mysqli_connect("localhost", "root", "", "light_db");
	
		$sql = "INSERT INTO pendonasi(username, email, country, jumlah_donasi, tanggal, komentar, foto_bukti) VALUES ('Dirahasiakan', 'Dirahasiakan', '$Country_pendonasi', $Nominal_donasi, '$Tanggal_donasi', '$Comment_pendonasi', '$foto')";
	
		if(mysqli_query($con, $sql)){
			echo "<h1>Thanks for your donation stranger <br></h1>";
			echo "<a href='donate_unknown.php'>Back to page donate</a>";
		}else{
			echo "<h1>Gagal melakukan donasi <br></h1>";
			echo "<a href='donate_unknown.php'>Back to page donate</a>";
		}
		
		$Total_income = 0;
		$query3 = mysqli_query($con, "SELECT * FROM income WHERE jenis_income='Donasi'");
					
		if(mysqli_num_rows($query3) > 0){
			while($data3 = mysqli_fetch_array($query3)){
				$Total_income = $data3['total_income'] + $Nominal_donasi;
				
				$sql3 = "UPDATE income SET total_income=$Total_income WHERE jenis_income='Donasi'";

				if ($con->query($sql3) == TRUE) {
					echo "<h1>Record updated total_income Donasi successfully</h1>";
				} else {
					echo "<h1>Error total_income donasi updating record: </h1>" . $con->error;
				}
			}
		}
	}
	mysqli_close($con);
?>
</body>
</html>