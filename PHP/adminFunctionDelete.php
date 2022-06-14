<div id="deleteComment">
	<button class="hvr-push close" onclick="closeDiv('deleteComment')">&times;</button>
	<br><br>
	<div class="inner">
		<span style="font-size: 40px;">Delete Comments : </span><br><br><br>
		<button style="font-size: 30px" onclick="openDiv('commentListCSGO')">
			Counter Strike : Global Offensive
		</button><br><br>
		<button style="font-size: 30px" onclick="openDiv('commentListFORT')">
			Fortnite
		</button><br><br>
		<button style="font-size: 30px" onclick="openDiv('commentListLOL')">
			League of Legends
		</button><br><br>
		<button style="font-size: 30px" onclick="openDiv('commentListMC')">
			Minecraft
		</button><br><br>
		<button style="font-size: 30px" onclick="openDiv('commentListML')">
			Mobile Legends
		</button><br><br>
		<button style="font-size: 30px" onclick="openDiv('commentListORI')">
			Ori and the Blind Forest
		</button><br><br>
		<button style="font-size: 30px" onclick="openDiv('commentListWOWS')">
			World of Warships
		</button><br><br>

		<div id="commentListCSGO">
			<div class="inner">
				<button class="hvr-push close" onclick="closeDiv('commentListCSGO')">&times;</button>
				<form method="post" action="prosesDelete.php">
				<?php
				$path_file = "../COMMENT/CSGO/";
				if (!is_dir($path_file)) {
					exit("Direktori comment tidak ditemukan");
				}
				echo '<table border="1">';
				echo '<tr>';
				echo '<td>Comment</td>';
				echo '<td>Check to Delete</td>';
				echo '</tr>';
				foreach (scandir($path_file, 1) as $komentar) {
					if ($komentar !== '.' && $komentar !== '..') {
						$path_file_read = $path_file;
						$path_file_read .= "$komentar";
						if (file_exists($path_file_read)) {
							$file = fopen($path_file_read, 'r+');
							echo '<tr><td>';
							while ($line = fgets($file)) {
							    echo $line;
							}
							echo "</td><td><input type='checkbox' name='delete[]' value=\"$path_file_read\"></tr>";
						}
						fclose($file);
					}

				}
				echo '</table>';
				echo '<input type="submit" name="submit" value="Delete Comment"><br>';
				echo '</form>';

				?>
			</div>
		</div>
		
		<div id="commentListFORT">
			<div class="inner">
				<button class="hvr-push close" onclick="closeDiv('commentListFORT')">&times;</button>
				<form method="post" action="prosesDelete.php">
				<?php
				$path_file = "../COMMENT/FORTNITE/";
				if (!is_dir($path_file)) {
					exit("Direktori comment tidak ditemukan");
				}
				echo '<table border="1">';
				echo '<tr>';
				echo '<td>Comment</td>';
				echo '<td>Check to Delete</td>';
				echo '</tr>';
				foreach (scandir($path_file, 1) as $komentar) {
					if ($komentar !== '.' && $komentar !== '..') {
						$path_file_read = $path_file;
						$path_file_read .= "$komentar";
						if (file_exists($path_file_read)) {
							$file = fopen($path_file_read, 'r+');
							echo '<tr><td>';
							while ($line = fgets($file)) {
							    echo $line;
							}
							echo "</td><td><input type='checkbox' name='delete[]' value=\"$path_file_read\"></tr>";
						}
						fclose($file);
					}

				}
				echo '</table>';
				echo '<input type="submit" name="submit" value="Delete Comment"><br>';
				echo '</form>';

				?>
			</div>
		</div>

		<div id="commentListLOL">
			<div class="inner">
				<button class="hvr-push close" onclick="closeDiv('commentListLOL')">&times;</button>
				<form method="post" action="prosesDelete.php">
				<?php
				$path_file = "../COMMENT/LOL/";
				if (!is_dir($path_file)) {
					exit("Direktori comment tidak ditemukan");
				}
				echo '<table border="1">';
				echo '<tr>';
				echo '<td>Comment</td>';
				echo '<td>Check to Delete</td>';
				echo '</tr>';
				foreach (scandir($path_file, 1) as $komentar) {
					if ($komentar !== '.' && $komentar !== '..') {
						$path_file_read = $path_file;
						$path_file_read .= "$komentar";
						if (file_exists($path_file_read)) {
							$file = fopen($path_file_read, 'r+');
							echo '<tr><td>';
							while ($line = fgets($file)) {
							    echo $line;
							}
							echo "</td><td><input type='checkbox' name='delete[]' value=\"$path_file_read\"></tr>";
						}
						fclose($file);
					}

				}
				echo '</table>';
				echo '<input type="submit" name="submit" value="Delete Comment"><br>';
				echo '</form>';

				?>
			</div>
		</div>

		<div id="commentListMC">
			<div class="inner">
				<button class="hvr-push close" onclick="closeDiv('commentListMC')">&times;</button>
				<form method="post" action="prosesDelete.php">
				<?php
				$path_file = "../COMMENT/MINECRAFT/";
				if (!is_dir($path_file)) {
					exit("Direktori comment tidak ditemukan");
				}
				echo '<table border="1">';
				echo '<tr>';
				echo '<td>Comment</td>';
				echo '<td>Check to Delete</td>';
				echo '</tr>';
				foreach (scandir($path_file, 1) as $komentar) {
					if ($komentar !== '.' && $komentar !== '..') {
						$path_file_read = $path_file;
						$path_file_read .= "$komentar";
						if (file_exists($path_file_read)) {
							$file = fopen($path_file_read, 'r+');
							echo '<tr><td>';
							while ($line = fgets($file)) {
							    echo $line;
							}
							echo "</td><td><input type='checkbox' name='delete[]' value=\"$path_file_read\"></tr>";
						}
						fclose($file);
					}

				}
				echo '</table>';
				echo '<input type="submit" name="submit" value="Delete Comment"><br>';
				echo '</form>';

				?>
			</div>
		</div>
		
		<div id="commentListML">
			<div class="inner">
				<button class="hvr-push close" onclick="closeDiv('commentListML')">&times;</button>
				<form method="post" action="prosesDelete.php">
				<?php
				$path_file = "../COMMENT/ML/";
				if (!is_dir($path_file)) {
					exit("Direktori comment tidak ditemukan");
				}
				echo '<table border="1">';
				echo '<tr>';
				echo '<td>Comment</td>';
				echo '<td>Check to Delete</td>';
				echo '</tr>';
				foreach (scandir($path_file, 1) as $komentar) {
					if ($komentar !== '.' && $komentar !== '..') {
						$path_file_read = $path_file;
						$path_file_read .= "$komentar";
						if (file_exists($path_file_read)) {
							$file = fopen($path_file_read, 'r+');
							echo '<tr><td>';
							while ($line = fgets($file)) {
							    echo $line;
							}
							echo "</td><td><input type='checkbox' name='delete[]' value=\"$path_file_read\"></tr>";
						}
						fclose($file);
					}

				}
				echo '</table>';
				echo '<input type="submit" name="submit" value="Delete Comment"><br>';
				echo '</form>';

				?>
			</div>
		</div>

		<div id="commentListORI">
			<div class="inner">
				<button class="hvr-push close" onclick="closeDiv('commentListORI')">&times;</button>
				<form method="post" action="prosesDelete.php">
				<?php
				$path_file = "../COMMENT/ORI/";
				if (!is_dir($path_file)) {
					exit("Direktori comment tidak ditemukan");
				}
				echo '<table border="1">';
				echo '<tr>';
				echo '<td>Comment</td>';
				echo '<td>Check to Delete</td>';
				echo '</tr>';
				foreach (scandir($path_file, 1) as $komentar) {
					if ($komentar !== '.' && $komentar !== '..') {
						$path_file_read = $path_file;
						$path_file_read .= "$komentar";
						if (file_exists($path_file_read)) {
							$file = fopen($path_file_read, 'r+');
							echo '<tr><td>';
							while ($line = fgets($file)) {
							    echo $line;
							}
							echo "</td><td><input type='checkbox' name='delete[]' value=\"$path_file_read\"></tr>";
						}
						fclose($file);
					}

				}
				echo '</table>';
				echo '<input type="submit" name="submit" value="Delete Comment"><br>';
				echo '</form>';

				?>
			</div>
		</div>

		<div id="commentListWOWS">
			<div class="inner">
				<button class="hvr-push close" onclick="closeDiv('commentListWOWS')">&times;</button>
				<form method="post" action="prosesDelete.php">
				<?php
				$path_file = "../COMMENT/WOWS/";
				if (!is_dir($path_file)) {
					exit("Direktori comment tidak ditemukan");
				}
				echo '<table border="1">';
				echo '<tr>';
				echo '<td>Comment</td>';
				echo '<td>Check to Delete</td>';
				echo '</tr>';
				foreach (scandir($path_file, 1) as $komentar) {
					if ($komentar !== '.' && $komentar !== '..') {
						$path_file_read = $path_file;
						$path_file_read .= "$komentar";
						if (file_exists($path_file_read)) {
							$file = fopen($path_file_read, 'r+');
							echo '<tr><td>';
							while ($line = fgets($file)) {
							    echo $line;
							}
							echo "</td><td><input type='checkbox' name='delete[]' value=\"$path_file_read\"></tr>";
						}
						fclose($file);
					}

				}
				echo '</table>';
				echo '<input type="submit" name="submit" value="Delete Comment"><br>';
				echo '</form>';

				?>
			</div>
		</div>

	</div>
</div>