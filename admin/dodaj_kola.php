<?php
	include '../includes/config.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
</head>
<body>
<div id="header">
	<div class="shell">
		
		<?php
			include 'menu.php';
		?>
		</div>
	</div>
</div>

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Dashboard</a>
			<span>&gt;</span>
			Dodaj nova vozila
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					<div class="box-head">
						<h2>Dodaj nova vozila</h2>
					</div>
					
					<form action="" method="post" enctype="multipart/form-data">
						
						<div class="form">
								<p>
									<span class="req">max 100 simbola</span>
									<label>Ime vozila <span>(Obavezno polje)</span></label>
									<input type="text" class="field size1" name="ime_auta" required />
								</p>	
								<p>
									<span class="req">max 20 simbola</span>
									<label>Marka auta <span>(Obavezno polje)</span></label>
									<input type="text" class="field size1" name="tip" required />
								</p>
								<p>
									<span class="req">max 20 simbola</span>
									<label>Cena iznajmljivanja <span>(Obavezno polje)</span></label>
									<input type="text" class="field size1" name="cena_iznajmljivanja" required />
								</p>
								<p>
									<span class="req">Unesisliku</span>
									<label>Slika <span>(Obavezno polje)</span></label>
									<input type="file" class="field size1" name="slika" required />
								</p>
								<p>
									<span class="req">Broj sedista</span>
									<label>Sedista<span>(Obavezno polje)</span></label>
									<input type="text" class="field size1" name="kapacitet" required />
								</p>	
							
						</div>
						
						<div class="buttons">
							
							<input type="submit" class="button" value="dodaj" name="send" />
						</div>
						
					</form>
					<?php
							if(isset($_POST['send'])){
								
								$target_path = "../kola/";
								$target_path = $target_path . basename ($_FILES['slika']['name']);
								if(move_uploaded_file($_FILES['slika']['tmp_name'], $target_path)){
								
								$slika = basename($_FILES['slika']['name']);
								$ime_auta = $_POST['ime_auta'];
								$tip = $_POST['tip'];
								$cena_iznajmljivanja = $_POST['cena_iznajmljivanja'];
								$kapacitet = $_POST['kapacitet'];
								
								$qr = "INSERT INTO kola (slika, ime_auta,tip,cena_iznajmljivanja,kapacitet,status) 
													VALUES ('$slika','$ime_auta','$tip','$cena_iznajmljivanja','$kapacitet','Dozvoljeno')";
								$res = $conn->query($qr);
								if($res === TRUE){
									echo "<script type = \"text/javascript\">
											alert(\"Auto supesno dodat\");
											window.location = (\"lista_vozila.php\")
											</script>";
									}
								}
								else 'Neuspesno';
							}
						?>
				</div>

			</div>
			
			<div id="sidebar">
				
				<div class="box">
					
					<div class="box-head">
						<h2>Upravljanje</h2>
					</div>
					
					<div class="box-content">
						<a href="lista_vozila.php" class="add-button"><span>Vidi sva vozila</span></a>
						<div class="cl">&nbsp;</div>
						
					
						
					</div>
				</div>
			</div>
			
			<div class="cl">&nbsp;</div>			
		</div>
	</div>
</div>

<div id="footer">
	<div class="shell">
		<span class="left">&copy; <?php echo date("Y");?> </span>
		<span class="right">
			Design by Filip</a>
		</span>
	</div>
</div>
	
</body>
</html>