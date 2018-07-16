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
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM kola WHERE id = '$_GET[id]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['id'] ?>">
						<img class="thumb" src="kola/<?php echo $rws['slika'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Cena.'.$rws['cena_iznajmljivanja'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['id'] ?>"><?php echo 'Model '.$rws['tip'];?></a>
						</h1>
						<h2>Ime Auta/Model: <span class="property_size"><?php echo $rws['ime_auta'];?></span></h2>
					</div>
				</li>
				<h3>Unesite podatke za iznajmljivanje modela <?php echo $rws['ime_auta'];?>. </h3>
				<?php
					if(!$_SESSION['email'] && (!$_SESSION['pass'])){
				?>
				<form method="post">
					<table>
						<tr>
							<td>Puno ime:</td>
							<td><input type="text" name="fime" required></td>
						</tr>
						<tr>
							<td>Broj telefona:</td>
							<td><input type="text" name="telefon" required></td>
						</tr>
						<tr>
							<td>Email Adresa:</td>
							<td><input type="email" name="email" required></td>
						</tr>
						<tr>
							<td>ID Broj:</td>
							<td><input type="text" name="id_broj" required></td>
						</tr>
						<tr>
							<td>Pol:</td>
							<td>
								<select name="pol">
									<option> Izaberi </option>
									<option> Musko </option>
									<option> Zensko </option>
								</select>
							</td>
						</tr>
						<tr>
							<td>Lokacija:</td>
							<td><input type="text" name="lokacija" required></td>
						</tr>
						<tr>
							<td colspan="2" style="text-align:right"><input type="submit" name="save" value="Unesi podatke"></td>
						</tr>
					</table>
				</form>
				<?php
					} else
						{
							?>
								<a href="placanje.php">Klikni za rezervaciju</a>
							<?php
						}
				?>
				<?php
						if(isset($_POST['save'])){
							include 'includes/config.php';
							$fime = $_POST['fime'];
							$id_broj = $_POST['id_broj'];
							$pol = $_POST['pol'];
							$email = $_POST['email'];
							$telefon = $_POST['telefon'];
							$lokacija = $_POST['lokacija'];
							
							$qry = "INSERT INTO client (fime,id_broj,pol,email,telefon,lokacija,kola_id,status)
							VALUES('$fime','$id_broj','$pol','$email','$telefon','$lokacija','$_GET[id]','Na cekanju')";
							$result = $conn->query($qry);
							if($result == TRUE){
								echo "<script type = \"text/javascript\">
											alert(\"Registracija uspesna. Nastavite ka placanju\");
											window.location = (\"placanje.php\")
											</script>";
							} else{
								echo "<script type = \"text/javascript\">
											alert(\"Registracija neuspesna. Pokusajte ponovo\");
											window.location = (\"rezervisi_auto.php\")
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