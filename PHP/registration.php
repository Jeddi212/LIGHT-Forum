<?php

session_start();

if (isset($_SESSION['username'])) {
	header('Location: alreadyLogged.php');
} else {

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>LIGHT Registration</title>
	<link rel="stylesheet" type="text/css" href="../CSS/global.css">
	<link rel="stylesheet" type="text/css" href="../CSS/hover.css">
	<link rel="stylesheet" type="text/css" href="../CSS/animate.css">
	<style type="text/css">
		body {
			background: linear-gradient(to right,
				rgba(0, 0, 0, 0),
				rgba(0, 0, 0, 0)
			), url(../IMG/HOMING/REGIS.jpg) no-repeat;
			background-position: 65% 40%;
			background-size: 250%;
		}
		.parent {
			margin: 0;
			padding: 0;
			display: grid;
			grid-template-columns: repeat(5, 1fr);
			grid-template-rows: repeat(5, 1fr);
			grid-column-gap: 0px;
			grid-row-gap: 5px;
		}

		/* Header and NavBar */
		.header {
			grid-area: 1 / 1 / 20 / 6;
			font-size: 20px;
		}
		.Logo {
			font-family: 'hunt';
			color: white;
			float: left;
			padding: 10px;
			font-size: 70px;
		}
		.hide{
			transition: 1s;
		}

		span {
			float: right;
		}
		span a {
			display: block;
			color: white;
			text-align: center;
			padding: 33px 24px;
			text-decoration: none;
		}

		/* Opening Div */
		.opening {
			grid-area: 20 / 1 / 118 / 4;
			text-align: center;
		}
		.mainLight {
			margin-top: 5%;
			color: #FFF;
		}
		.mainLight:hover {
			transition: 1s;
		}
		.light0, .light2 {
			font-family: 'leixo';
			font-size: 40px;
		}
		.light {
			font-family: 'hunt';
			font-size: 17vw;
			color: orange;
		}

		/* Regis Div */
		.regis {
			grid-area: 20 / 4 / 100 / 6;
			color: #fff;
			text-align: center;
		}
		.regisMessage {
			font-family: 'pixel';
			font-size: 30px;
		}
		table {
			font-size: 20px;
			font-family: 'calc';
			width: 100%;
		}
		tr {
			height: 32px;
		}
		.label {
			text-align: right;
		}
		input[type=text], input[type=password], input[type=email] {
			border: none;
			border-bottom: 1px solid green;
			background-color: transparent;
			color: white;
			font-family: 'alte';
		}
		input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
			border: none;
			color: white;
			background-color: transparent;
			box-shadow: 0px 2px 1px -1px #0DFF92;
		}
		input[type="radio"] {
			opacity: 0;
			position: fixed;
			width: 0;
		}
		.radio-toolbar label {
		    display: inline-block;
		    background-color: transparent;
		    padding: 0px 20px;
		    border: 1px solid #FFF;
		    border-radius: 4px;
		    cursor: pointer;
		}
		.radio-toolbar label:hover {
			border: 1px solid #3490de;
		}
		.radio-toolbar input[type="radio"]:focus + label {
		    border: 2px dashed #05dfd7;
		}
		.radio-toolbar input[type="radio"]:checked + label {
		    border-color: #0DFF92;
		}
		input:focus {
			outline: none;
		}
		input:-webkit-autofill,
		input:-webkit-autofill:hover, 
		input:-webkit-autofill:focus,
		textarea:-webkit-autofill,
		textarea:-webkit-autofill:hover,
		textarea:-webkit-autofill:focus,
		select:-webkit-autofill,
		select:-webkit-autofill:hover,
		select:-webkit-autofill:focus {
			border-bottom: 1px solid #0DFF92;
			font-family: 'alte';
			-webkit-text-fill-color: #FFF;
			transition: background-color 5000s ease-in-out 0s;
		}

		/* Submit Div */
		.regisSubmit {
			grid-area: 100 / 4 / 118 / 6;
			text-align: center;
		}
		.submit {
			margin: 0px 2px;
			padding: 0px 10px;
			border: none;
			color: red;
			background-color: transparent;
			font-size: 30px;
			font-weight: bolder;
			font-family: 'digital';
			text-decoration: none;
			cursor: pointer;
		}
		.footer {
			grid-area: 118 / 1 / 129 / 6;
			padding-top: 0px;
		}
	</style>
</head>
<body>

<div class="parent">
	<div class="header animated fadeInDown">
		<div class="Logo animated infinite rubberBand delay-1s">
			L
		</div>
		<nav>
			<span class="animated pulse delay-1s slow"><a href="about.php">About</a></span>
			<span class="animated pulse delay-1s slow"><a href="login.php">Login</a></span>
			<span class="animated pulse delay-1s slow"><a href="opening.php">Home</a></span>
		</nav>
	</div>
	
	<div class="opening">
		<div class="mainLight animated rollIn">
			<div class="light0">
				Welcome to
			</div>
			<div class="light hvr-buzz-out animated jello delay-1s">
				LIGHT
			</div><br>
			<div class="light2">
				The Ultimate Gaming Forum.
			</div>
		</div>
	</div>
	
	<div class="regis animated fadeIn slower">
		<div>
			<p class="regisMessage animated jackInTheBox hvr-hang">
				<br>
				Come &nbsp; & &nbsp; Get In
			</p>
		</div>
		<form method="post" action="cekReg.php">
		<table>
			<tr>
				<td class="label"><label for="first_name">First Name </label></td>
				<td class="hvr-glow animated bounceInDown slower"><input type="text" id="first_name" name="first_name" placeholder="Input First Name" required></td>
			</tr>
			<tr>
				<td class="label"><label for="last_name">Last Name </label></td>
				<td class="hvr-glow animated bounceInDown slower"><input type="text" id="last_name" name="last_name" placeholder="Input Last Name" required></td>
			</tr>
			<tr>
				<td class="label"><label for="gender">Gender </label></td>
				<td class="animated bounceInDown delay-1s slow" style="color:#FFF;">
					<div class="radio-toolbar">
						<input type="radio" id="male" name="gender" value="male"><label for="male" class="hvr-pop">Male</label>
						<input type="radio" id="female" name="gender" value="female"><label for="female" class="hvr-pop">Female</label>
					</div>
				</td>
			</tr>
			<tr>
				<td class="label"><label for="username">Username </label></td>
				<td class="hvr-glow animated bounceInDown delay-1s slow"><input type="text" id="username" name="username" placeholder="Input Unique Username" required></td>
			</tr>
			<tr>
				<td class="label"><label for="email">Email </label></td>
				<td class="hvr-glow animated bounceInDown delay-2s"><input type="email" id="email" name="email" placeholder="your123@email.com" required></td>
			</tr>
			<tr>
				<td class="label"><label for="password">Password </label></td>
				<td class="hvr-glow animated bounceInDown delay-2s"><input type="password" id="password" name="password" placeholder="Enter Password" required></td>
			</tr>
		</table>
	</div>
	
	<div class="regisSubmit">
		<table>
			<tr>
				<td>
					<input type="submit" name="REGISTER" value="Register" class="submit hvr-wobble-vertical animated flipInY slow">
					<input type="reset" value="Clear" class="submit hvr-wobble-vertical animated flipInY slow">
				</td>
			</tr>
		</table>
		</form>
	</div>
	
	<div class="footer animated bounceInUp">
		<p>Alex + Fedly + Jeddi + Lucky</p>
		<p style="font-family: monospace;">Copyright &copy; 2020 Bandung IND, ITHB. All right reserved</p>
	</div>
</div>

<!--syntax untuk mengatasi post resubmit jika melakukan refresh page (sumber: https://www.webtrickshome.com/faq/how-to-stop-form-resubmission-on-page-refresh)-->
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</body>
</html>

<?php } ?>