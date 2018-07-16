<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Admin Home</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<script type="text/javascript">
		function sureToApprove(id){
			if(confirm("Da li dozvoljavate zahtev?")){
				window.location.href ='dozvoli.php?id='+id;
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

<div id="container">
	<div class="shell">
		
		<div class="small-nav">
			<a href="index.php">Panel</a>
			<span>&gt;</span>
			Client Zahtev
		</div>
		
		<br />
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
				
					<div class="box-head">
						<h2 class="left">Zahtevi klijenata</h2>
						
					</div>
					
					<div class="table">
						<table width="100%" border="0" cellspacing="0" cellpadding="0">
							<tr>
								<th width="13"><input type="checkbox" class="checkbox" /></th>
								<th>Ime klijenta</th>
								<th>Broj telefona</th>
								<th>Ime auta</th>
								<th>Cena</th>
								<th>Status</th>
								<th width="110" class="ac">Upravljanje</th>
							</tr>
							<?php
								include '../includes/config.php';
								$select = "SELECT client.client_id,client.fime,client.telefon,kola.ime_auta,kola.cena_iznajmljivanja,client.status 
										FROM client JOIN kola ON client.kola_id=kola.id";
								$result = $conn->query($select);
								while($row = $result->fetch_assoc()){
							?>
							<tr>
								<td><input type="checkbox" class="checkbox" /></td>
								<td><h3><a href="#"><?php echo $row['fime'] ?></a></h3></td>
								<td><h3><a href="#"><?php echo $row['telefon'] ?></a></h3></td>
								<td><?php echo $row['ime_auta'] ?></td>
								<td><a href="#"><?php echo $row['cena_iznajmljivanja'] ?></a></td>
								<td><a href="#"><?php echo $row['status'] ?></a></td>
								<td><a href="javascript:sureToApprove(<?php echo $row['client_id'];?>)" class="ico del">Dozvoli</a></td>
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
		
			
			
			
			<div class="cl">&nbsp;</div>			
		</div>
	
	</div>
</div>
>


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