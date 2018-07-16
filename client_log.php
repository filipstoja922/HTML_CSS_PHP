<!DOCTYPE html>
<html lang="en">
<head>
	<title>Agencija za iznajmljivanje automobila</title>
	<meta charset="utf-8">
	<meta name="author" content="">
	<meta name="description" content=""/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Pronadjite svoj auto</h2>
				<h3 class="properties" style="text-align: center">Sportski - Porodicni - Gradski</h3>
			</section>
	</section>


	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Client Logovanje</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Adresa:</td>
						<td><input type="email" name="email" placeholder="Unesi Email Adresu" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Unesi ID Broj" required></td>
					</tr>
					<tr>
						<td><input type="submit" name="log" value="Uloguj se"></td>
						<td style="text-align:right;"><a href="signup.php">Prijavi se</a></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_broj = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_broj'];
						echo "<script type = \"text/javascript\">
									alert(\"Uspesno ste ulogovani.................\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Neuspesno. Pokusajte ponovo................\");
									window.location = (\"client_log.php\")
									</script>";
					}
				}
			?>
			>

	</section>

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>Nasa firma</li>
						<li><a href="O nama.php">O nama</a></li>
						<li><a href="kontakt.php">Kontakt</a></li>
					</ul>
				</li>

				

				<li class="links">
					<ul>
						<li>Nasi sponzori</li>
						<li><a href="http://www.mercedes-benz.rs/content/serbia/mpc/mpc_serbia_website/rsng/home_mpc/passengercars.html">Mercedes</a></li>
						<li><a href="http://www.landrover.com/market-selector/index.html">Range Rover</a></li>
						<li><a href="http://www.toyota.com/landcruiser/">Landcruisers</a></li>
						<li><a href="https://www.cars.com/">Others.</a></li>
					</ul>
				</li>

				<li class="about">
					<p>Nasa firma iznajmljuje vozila ponajpovoljnijim cenama</p>
					<ul>
						<li><a href="http://facebook.com" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> All Rights Reserved | Designed by Filip.
		</div>
	</footer>
	
</body>
</html>