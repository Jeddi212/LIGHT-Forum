<div id="listMember">
	<button class="hvr-push close" onclick="closeDiv('listMember')">&times;</button>
	<br><br>
	<?php
	
	$con = mysqli_connect("localhost", "root", "","light_db");
	$sql = "SELECT * FROM members";
    $result = mysqli_query($con, $sql);
    echo '<table border="1">';
    echo '<caption style="font-size: 20px;">List of Members and Admins</caption>';
    echo '<tr>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Gender</th>
    <th>Username</th>
    <th>Email</th>
    <th>Type</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>
		<td>$row[0]</td>
		<td>$row[1]</td>
		<td>$row[2]</td>
		<td>$row[3]</td>
		<td>$row[4]</td>
		<td>$row[5]</td>
		<td>$row[7]</td>
        </tr>";
    }
    echo '</table>';

	?>
</div>

<div id="listIncome">
    <button class="hvr-push close" onclick="closeDiv('listIncome')">&times;</button>
    <br><br>
    <?php
    
    $con = mysqli_connect("localhost", "root", "","light_db");
    $sql = "SELECT * FROM income";
    $result = mysqli_query($con, $sql);
    echo '<table border="1">';
    echo '<caption style="font-size: 20px;">List of Income</caption>';
    echo '<tr>
    <th>No</th>
    <th>Total Income</th>
    <th>Jenis Income</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        </tr>";
    }
    echo '</table>';

    ?>
</div>

<div id="listParticipants">
    <button class="hvr-push close" onclick="closeDiv('listParticipants')">&times;</button>
    <br><br>
    <?php
    
    $con = mysqli_connect("localhost", "root", "","light_db");
    $sql = "SELECT * FROM participant";
    $result = mysqli_query($con, $sql);
    echo '<table border="1">';
    echo '<caption style="font-size: 20px;">List of Participants</caption>';
    echo '<tr>
    <th>ID</th>
    <th>ID Event</th>
    <th>Jenis Peserta</th>
    <th>Nickname</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        </tr>";
    }
    echo '</table>';

    ?>
</div>

<div id="listPendonasi">
    <button class="hvr-push close" onclick="closeDiv('listPendonasi')">&times;</button>
    <br><br>
    <?php
    
    $con = mysqli_connect("localhost", "root", "","light_db");
    $sql = "SELECT * FROM pendonasi";
    $result = mysqli_query($con, $sql);
    echo '<table border="1">';
    echo '<caption style="font-size: 20px;">List of Donatur</caption>';
    echo '<tr>
    <th>No</th>
    <th>Username</th>
    <th>Email</th>
    <th>Country</th>
    <th>Jumlah Donasi</th>
    <th>Tanggal</th>
    <th>Komentar</th>
    <th>Foto Bukti</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$row[6]</td>
        <td><img src=\"$row[7]\" style=\"width: 100px;\"></td>
        </tr>";
    }
    echo '</table>';

    ?>
</div>

<div id="listMerchandise">
    <button class="hvr-push close" onclick="closeDiv('listMerchandise')">&times;</button>
    <br><br>
    <?php
    
    $con = mysqli_connect("localhost", "root", "","light_db");
    $sql = "SELECT * FROM pembelian_merchandise";
    $result = mysqli_query($con, $sql);
    echo '<table border="1">';
    echo '<caption style="font-size: 20px;">List of Merchandise Transactions</caption>';
    echo '<tr>
    <th>No</th>
    <th>Username</th>
    <th>Email</th>
    <th>Telepon</th>
    <th>ID Merch</th>
    <th>Jumlah</th>
    <th>Alamat</th>
    <th>Total Harga</th>
    <th>Tanggal</th>
    <th>Foto Bukti</th>
    <th>Komentar</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td>$row[6]</td>
        <td>$row[7]</td>
        <td>$row[8]</td>
        <td><img src=\"$row[9]\" style=\"width: 100px;\"></td>
        <td>$row[10]</td>
        </tr>";
    }
    echo '</table>';

    ?>
</div>

<div id="listStock">
    <button class="hvr-push close" onclick="closeDiv('listStock')">&times;</button>
    <br><br>
    <?php
    
    $con = mysqli_connect("localhost", "root", "","light_db");
    $sql = "SELECT * FROM stock";
    $result = mysqli_query($con, $sql);
    echo '<table border="1">';
    echo '<caption style="font-size: 20px;">List of Stock</caption>';
    echo '<tr>
    <th>No</th>
    <th>Nama</th>
    <th>ID Merch</th>
    <th>Harga</th>
    <th>Stock</th>
    <th>Deskripsi</th>
    <th>Foto Barang</th>
    </tr>';
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>
        <td>$row[0]</td>
        <td>$row[1]</td>
        <td>$row[2]</td>
        <td>$row[3]</td>
        <td>$row[4]</td>
        <td>$row[5]</td>
        <td><img src=\"$row[6]\" style=\"width: 100px;\"></td>
        </tr>";
    }
    echo '</table>';

    ?>
</div>

<div id="viewFeedback">
    <button class="hvr-push close" onclick="closeDiv('viewFeedback')">&times;</button>
    <br><br>
    <div class="inner">
        <h1>FEEDBACKS</h1>
        <?php
        $path_file = "../FEEDBACK/";
        foreach (scandir($path_file) as $file_name) {
            if ($file_name !== '.' && $file_name !== '..') {
                $path_file_read = $path_file;
                $path_file_read .= $file_name;
                include "$path_file_read";
            }
        }
        ?>
    </div>
</div>