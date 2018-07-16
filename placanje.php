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




	<section class="listings">
		<div class="wrapper">
			<ul class="properties_list">
				<h3 style="text-decoration: underline">Uplacivanje novca</h3>
				<h5>Broj racuna: 00000</h5>
				<form method="post">
					<table>
						<tr>
							<td>Ime banke:</td>
							<td><input type="text" name="banka" required></td>
						</tr>
						<tr>
							<td>Vas jedninstveni broj:</td>
							<td><input type="text" name="id_broj" required></td>
						</tr>
						
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="pay" value="Unesi"></td>
						</tr>
					</table>
				</form>
				<?php
						if(isset($_POST['pay'])){
							include 'includes/config.php';
							$banka = $_POST['banka'];
							$id_broj = $_POST['id_broj'];
							
							$qry = "UPDATE client SET banka = '$banka' WHERE id_broj = '$id_broj'";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Placanje uspesno. Sacekajte na odobrenje\");
											window.location = (\"cekanje.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registracija neuspesna. Pokusajte ponovo\");
											window.location = (\"placanje.php\")
											</script>";
							}
						}
						
					  ?>
			</ul>
		</div>
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