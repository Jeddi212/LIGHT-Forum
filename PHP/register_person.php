<!DOCTYPE html>
<html>
<head>
	<title>Delete Message</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<style type="text/css">
		a{
			text-decoration: none;
			font-size: 30px;
			color: #000;
			font-family: 'pixel'
		}
		a:hover{
			color: orange;
		}
		h5{
			font-family: 'alte';
		}
		.container{
			margin: 10%;
			padding: 5%;
		}
	</style>
</head>
<body>

<div class="container">
    <?php
        if(isset($_POST["regist"])){
            $con = mysqli_connect("localhost", "root", "", "light_db");

            $id_event = $_POST["id_event"];
            $jenis_peserta = $_POST["jenis_peserta"];
            $nickname = $_POST["nickname"];

            // Check Apakah sudah terdaftar di database
            $result = mysqli_query($con, "SELECT * FROM participant where nickname = '$nickname'");
            $allowed = true;
            while($row = mysqli_fetch_row($result)){
                if($row[1] == $id_event){
                    $allowed = false;
                }
            }
            switch($id_event){
                case "tournament":
                    $event = "Tournament";
                    break;
                case "gathering":
                    $event = "Gathering";
                    break;
                case "speech":
                    $event = "Speech";
                    break;
                case "promotion":
                    $event = "Promotion";
                    break;
                case "studio":
                    $event = "Studio Talk";
                    break;
                case "opdis":
                    $event = "Open Disscusion";
                    break;
            }
            if($allowed){
                $sql = "INSERT INTO participant(id_event, jenis_peserta, nickname)VALUES('$id_event', '$jenis_peserta', '$nickname')";
                if(mysqli_query($con, $sql)){
                    switch($jenis_peserta){
                        case "vip":
                            $priviledge = "VIP";
                            break;
                        case "reg":
                            $priviledge = "Reguler";
                            break;
                    }
                    echo "<h4>Your nickname is $nickname, and you are going to join a/an $event as a $priviledge participant!</h4>";
                }
            }else{
                echo "<h4><b>$nickname<b> has already been registered at $event event!</h4>";
                echo "<h4>Therefore the data you've sent are not registered at the database!</h4>";
            }
            echo "<a href='event_regist.php'>Go back</a>";
            mysqli_close($con);
        }
    ?>
</div>