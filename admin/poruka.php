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
		
		
		
		<div id="main">
			<div class="cl">&nbsp;</div>
			
			<div id="content">
				
				<div class="box">
				
					<div class="box-head">
						<h2 class="left">Poruka klijenata</h2>
						
					</div>
					
					
				<?php
					include '../includes/config.php';
								$select = "SELECT * FROM poruke ";
								$result = $conn->query($select);
								
                
                 ?>	
<body>

<textarea rows="10" cols="50">

				 <?php echo $results ?>
               
</textarea>

</body>



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