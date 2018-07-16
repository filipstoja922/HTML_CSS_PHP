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
			<h3 style="text-align:center; color: #000099; font-weight:bold; text-decoration:underline">Admin Logovanje</h3>
				<table height="100" align="center">
					<tr>
						<td>Email Adresa:</td>
						<td><input type="text" name="uname" placeholder="Enter Username" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<td colspan="2" style="text-align:center"><input type="submit" name="login" value="Login Here"></td>
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['login'])){
					include 'includes/config.php';
					
					$uname = $_POST['uname'];
					$pass = $_POST['pass'];
					
					$query = "SELECT * FROM admin WHERE uname = '$uname' AND pass = '$pass'";
					$rs = $conn->query($query);
					$num = $rs->num_rows;
					$rows = $rs->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['uname'] = $rows['uname'];
						$_SESSION['pass'] = $rows['pass'];
						echo "<script type = \"text/javascript\">
									alert(\"Uspesno ste ulogovani.................\");
									window.location = (\"admin/index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Neuspesno. Pokusajte ponovo................\");
									window.location = (\"login.php\")
									</script>";
					}
				}
			?>
			</div>
			<a href="#" class="advanced_search_icon" id="advanced_search_btn"></a>
		</div>

	</section>

	<footer>
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>Nasa firma</li>
						<li><a href="O nama.htmal">O nama</a></li>
						<li><a href="kontakt.html">Kontakt</a></li>
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