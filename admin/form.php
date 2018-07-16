<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Da li stvarno zelite da izbrisete ovaj auto?")){
				window.location.href ='brisanje_auta.php?id='+id;
			}
		}
	</script>
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
			<a href="index.php">Panel</a>
			<span>&gt;</span>
			Upravljanje automobilima
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
					
					<div class="box-head">
						<h2 class="left">Nasa Vozila</h2>
						<<div class="right">
						
							<form action="form.php" method="post"> 
							<input type="text" name="term"  class="field small-field" />
							<input type="submit" class="button" value="pretrazi" />
							</form> 
						</div>
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Model</th>
								<th>Tip</th>
								<th>Cena Iznajmljivanjath>
								<th width="110" class="ac">Upravljanje</th>
							</tr>
							<?php
								include '../includes/config.php';
								$term = mysql_real_escape_string($_REQUEST['term']);    
								$select = "SELECT * FROM kola WHERE tip LIKE '%".$term."%'";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['tip'] ?></a></h3></td>
								<td><?php echo $row['ime_auta'] ?></td>
								<td><a href="#"><?php echo $row['cena_iznajmljivanja'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['id'];?>)" class="ico del">Obrisi</a></td>
							</tr>
							<?php
								}
							?>
						</table>
						
				
						<div class="pagging">
							<div class="left">Index 1-12 of 44</div>
							<div class="right">
								<a href="#">Prosla</a>
								<a href="#">1</a>
								<a href="#">2</a>
								<a href="#">3</a>
								<a href="#">4</a>
								<a href="#">245</a>
								<span>...</span>
								<a href="#">Sledeca</a>
								<a href="#">Vidi sve</a>
							</div>
						</div>
				
						
					</div>
					<h2><input type="submit" onclick="window.print()" value="Stampaj" /></h2>
					
				</div>
			

			</div>
			
	
			<div id="sidebar">
				
		
				<div class="box">
					
			
					<div class="box-head">
						<h2>Upravljanje</h2>
					</div>
					<!-- End Box Head-->
					
					<div class="box-content">
						<a href="dodaj_kola.php" class="add-button"><span>Dodaj novo vozilo</span></a>
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