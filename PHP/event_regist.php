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
	<title>Event Registration</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
    <link rel="stylesheet" type="text/css" href="../CSS/navbarSH.css">
    <style type="text/css">
		html, body {
			height: 100%;
			margin: 0;
			padding: 0;
            background-color: gray;
		}
	</style>

</head>
<body>

    <?php include 'navbar.php'; ?>
    <br><br>
    <center><h1>Event Registration!!!</h1>
    <hr>
    <h2>Registration Form</h2>
    <form method="POST" action="register_person.php" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nickname : </td>
                <td><input type="text" id="nickname" name="nickname"></td>
            </tr>
            <tr>
                <td>Event : </td>
                <td>
                    <select id="id_event" name="id_event">
                        <option value="tournament">Tournament</option>
                        <option value="gathering">Gathering</option>
                        <option value="speech">Speech</option>
                        <option value="promotion">Promotion</option>
                        <option value="studio">Studio Talk</option>
                        <option value="opdis">Open Disscusion</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Peserta : </td>
                <td>
                    <select id="jenis_peserta" name="jenis_peserta">
                        <option value="reg">Reguler</option>
                        <option value="vip">VIP</option>
                    </select>
                </td>
            </tr>
        </table>
        <input type="submit" name="regist" value="Register Me!">
    </form>
    <hr>
    <h2>Participants!</h2>
    <p>Don't see your nickname here? That means that you are not registered to any event yet!!!</p>
    <?php
        $con = mysqli_connect("localhost", "root", "", "light_db");
        
        // Tabel Tournament
        $result = mysqli_query($con, "SELECT * FROM participant where id_event = 'tournament'");
        echo "<h3>Tournament Participants</h3>";
        if($result && mysqli_num_rows($result) > 0){
            echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Priviledge</th>
                        </tr>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr>
                        <td> $row[0] </td>
                        <td> $row[3] </td>
                        <td> " . strtoupper($row[2]) . "</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "No participants yet";
        }

        // Tabel Gathering
        $result = mysqli_query($con, "SELECT * FROM participant where id_event = 'gathering'");
        echo "<h3>Gathering Participants</h3>";
        if($result && mysqli_num_rows($result) > 0){
            echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Priviledge</th>
                        </tr>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr>
                        <td> $row[0] </td>
                        <td> $row[3] </td>
                        <td> " . strtoupper($row[2]) . "</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "No participants yet";
        }

        // Tabel Speech
        $result = mysqli_query($con, "SELECT * FROM participant where id_event = 'speech'");
        echo "<h3>Speech Participants</h3>";
        if($result && mysqli_num_rows($result) > 0){
            echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Priviledge</th>
                        </tr>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr>
                        <td> $row[0] </td>
                        <td> $row[3] </td>
                        <td> " . strtoupper($row[2]) . "</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "No participants yet";
        }

        // Tabel Promotion
        $result = mysqli_query($con, "SELECT * FROM participant where id_event = 'promotion'");
        echo "<h3>Promotion Participants</h3>";
        if($result && mysqli_num_rows($result) > 0){
            echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Priviledge</th>
                        </tr>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr>
                        <td> $row[0] </td>
                        <td> $row[3] </td>
                        <td> " . strtoupper($row[2]) . "</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "No participants yet";
        }

        
        // Tabel Studio Talk
        $result = mysqli_query($con, "SELECT * FROM participant where id_event = 'studio'");
        echo "<h3>Studio Talk Participants</h3>";
        if($result && mysqli_num_rows($result) > 0){
            echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Priviledge</th>
                        </tr>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr>
                        <td> $row[0] </td>
                        <td> $row[3] </td>
                        <td> " . strtoupper($row[2]) . "</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "No participants yet";
        }
        
        // Tabel Open Disscusion
        $result = mysqli_query($con, "SELECT * FROM participant where id_event = 'opdis'");
        echo "<h3>Open Disscusion Participants</h3>";
        if($result && mysqli_num_rows($result) > 0){
            echo "<table border='1'>
                        <tr>
                            <th>ID</th>
                            <th>Nickname</th>
                            <th>Priviledge</th>
                        </tr>";
            while($row = mysqli_fetch_row($result)){
                echo "<tr>
                        <td> $row[0] </td>
                        <td> $row[3] </td>
                        <td> " . strtoupper($row[2]) . "</td>
                    </tr>";
            }
            echo "</table>";
        }else{
            echo "No participants yet";
        }
    ?>
    </center>

    <script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
    </script>

</body>
</html>

<?php } ?>