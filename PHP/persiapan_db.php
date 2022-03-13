<?php
    // Alexander Hansen (1119016)
    // Lucky Setiawan (1119021) 
    // Jedediah Fanuel (1119023)
    // Fedly Septian (1119033)
    $con = mysqli_connect("localhost", "root", "");
    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    // Prepare db
    $db_name = "light_db";
    $sql = "CREATE DATABASE $db_name";
    $status = mysqli_query($con, $sql);
    if($status){
        echo "Database created successfully";
    }else{
        echo "Error creating database: " . mysqli_error($con);
    }
    echo "<br>";

    // Select db
    $status = mysqli_select_db($con, $db_name);
    if($status){
        echo "Database $db_name has been selected!";
    }else{
        echo "$db_name not found!";
    }
    echo "<br>";

    /*

    // Prepare table participant
    $sql = "CREATE TABLE participant(
        id INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (id),
        id_event CHAR(10),
        jenis_peserta CHAR(3),
        nickname CHAR(20)
    )";

    if(mysqli_query($con, $sql)){
        echo "Table participant created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($con);
    }
    echo "<br>";

     // Prepare table members
    $sql = "CREATE TABLE members(
        id INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (id),
        first_name VARCHAR(30),
        last_name VARCHAR(30),
        gender VARCHAR(10),
        username VARCHAR(30),
        email VARCHAR(255),
        password VARCHAR(255),
        type VARCHAR(30)
    )";

    if(mysqli_query($con, $sql)){
        echo "Table members created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($con);
    }
    echo "<br>";

     // Prepare table pendonasi
    $sql = "CREATE TABLE pendonasi(
        id INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (id),
        username VARCHAR(30),
        email VARCHAR(255),
        country VARCHAR(50),
		jumlah_donasi INT,
		tanggal VARCHAR(50),
		komentar VARCHAR(255),
		foto_bukti VARCHAR(255)
    )";

    if(mysqli_query($con, $sql)){
        echo "Table pendonasi created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($con);
    }
    echo "<br>";
    
     // Prepare table merchandise
    $sql = "CREATE TABLE pembelian_merchandise(
        id INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (id),
        username VARCHAR(30),
		email VARCHAR(255),
		telepon VARCHAR(30),
        id_merch VARCHAR(30),
        jumlah INT,
        alamat_lengkap VARCHAR(255),
        total_harga INT,
        tanggal VARCHAR(255),
		foto_bukti VARCHAR(255),
		komentar VARCHAR(255)
    )";

    if(mysqli_query($con, $sql)){
        echo "Table pembelian_merchandise created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($con);
    }
    echo "<br>";

     // Prepare table stock
    $sql = "CREATE TABLE stock(
        no INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (no),
		name VARCHAR(50),
        id_merch VARCHAR(30),
        harga INT,
        stock INT,
		deskripsi VARCHAR(200),
		foto_barang VARCHAR(200)
    )";

    if(mysqli_query($con, $sql)){
        echo "Table stock created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($con);
    }
    echo "<br>";

     // Prepare table income
    $sql = "CREATE TABLE income(
        no INT NOT NULL AUTO_INCREMENT,
        PRIMARY KEY (no),
        total_income INT,
        jenis_income VARCHAR(30)
    )";

    if(mysqli_query($con, $sql)){
        echo "Table income created successfully";
    }else{
        echo "Error creating table: " . mysqli_error($con);
    }
    echo "<br>";
	
	$sql2 = "INSERT INTO income(total_income, jenis_income) VALUES (0, 'Donasi')";
	
	if (mysqli_query($con, $sql2)) {
        echo "Berhasil Insert ke Donasi<br>";
    }
	
	$sql3 = "INSERT INTO income(total_income, jenis_income) VALUES (0, 'Pembelian Merchandise')";
	
	if (mysqli_query($con, $sql3)) {
        echo "Berhasil Insert ke Pembelian Merchandise<br>";
    }

    //Register Site Admin
    // Tapi sudah ada di exxport file sql
    /*
	$first_name = "Alexander";
	$last_name = "Hansen";
	$gender = "male";
	$username = "Hansen123";
	$email = "alexanderhansen124@gmail.com";
	$password = md5("1119013");
    $sql = "INSERT INTO members(first_name, last_name, gender, username, email, password, type)
            VALUES ('$first_name', '$last_name', '$gender', '$username', '$email', '$password', 'Admin')";

	if (mysqli_query($con, $sql)) {
        echo "Register Admin $username berhasil!<br>";
    }

	$first_name = "Lucky";
	$last_name = "Setiawan";
	$gender = "male";
	$username = "LuckySetia77";
	$email = "luckysetiawan0802@gmail.com";
	$password = md5("1119021");
    $sql = "INSERT INTO members(first_name, last_name, gender, username, email, password, type)
            VALUES ('$first_name', '$last_name', '$gender', '$username', '$email', '$password', 'Admin')";

	if (mysqli_query($con, $sql)) {
        echo "Register Admin $username berhasil!<br>";
    }
    
	$first_name = "Jedediah";
	$last_name = "Fanuel";
	$gender = "male";
	$username = "JeddiFan";
	$email = "JedediahF51@gmail.com";
	$password = md5("1119023");
    $sql = "INSERT INTO members(first_name, last_name, gender, username, email, password, type)
            VALUES ('$first_name', '$last_name', '$gender', '$username', '$email', '$password', 'Admin')";

	if (mysqli_query($con, $sql)) {
        echo "Register Admin $username berhasil!<br>";
    }
    
	$first_name = "Fedly";
	$last_name = "Septian";
	$gender = "male";
	$username = "Fedly123";
	$email = "fedlyseptian.FS@gmail.com";
	$password = md5("1119033");
    $sql = "INSERT INTO members(first_name, last_name, gender, username, email, password, type)
            VALUES ('$first_name', '$last_name', '$gender', '$username', '$email', '$password', 'Admin')";

	if (mysqli_query($con, $sql)) {
        echo "Register Admin $username berhasil!<br>";
    }

    // Close
    */

    mysqli_close($con);
?>