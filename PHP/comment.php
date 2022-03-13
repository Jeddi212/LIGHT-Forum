<?php 

$currentFile = basename($_SERVER['PHP_SELF']);

if ($currentFile == 'WOWS.php') {
	$path_file = "../COMMENT/WOWS/";
} else if ($currentFile == 'ORI.php') {
	$path_file = "../COMMENT/ORI/";
} else if ($currentFile == 'mobile_legends.php') {
	$path_file = "../COMMENT/ML/";
} else if ($currentFile == 'LOL.php') {
	$path_file = "../COMMENT/LOL/";
} else if ($currentFile == 'MC.php') {
	$path_file = "../COMMENT/MINECRAFT/";
} else if ($currentFile == 'FortNite.php') {
	$path_file = "../COMMENT/FORTNITE/";
} else if ($currentFile == 'CSGO.php') {
	$path_file = "../COMMENT/CSGO/";
}

if (isset($_POST['submit'])) {

	$comment = $_POST['comment'];
	date_default_timezone_set("Asia/Jakarta");
	$tanggal = date("Y-m-d (H:i:s)");
	$tanggal_2 = date("Y_m_d(H_i_s)");
	$username = $_COOKIE['username'];

	$path_file_write = $path_file;
	$path_file_write .= "$tanggal_2 $username.txt";
	$file = fopen($path_file_write, 'a');
	fwrite($file, "<div class=\"komentar\">");
	fwrite($file, "$username, ");
	fwrite($file, "$tanggal\n\n");
	fwrite($file, "$comment\n");
	fwrite($file, "<hr>\n");
	fwrite($file, "</div>");

	
}

if (!is_dir($path_file)) {
	exit("Direktori comment tidak ditemukan");
}

foreach (scandir($path_file, 1) as $komentar) {
	if ($komentar !== '.' && $komentar !== '..') {
		$path_file_read = $path_file;
		$path_file_read .= "$komentar";
		if (file_exists($path_file_read)) {
			$file = fopen($path_file_read, 'r+');
			while ($line = fgets($file)) {
			    echo '<p>' . $line . '</p>';
			}
		}
		fclose($file);
	}

}


?>