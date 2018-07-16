<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
	$query = "UPDATE client SET status = 'Dozvoljeno' WHERE client_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo 'Zahtev je odobren';
	?>
		<meta content="4; client_zahtev.php" http-equiv="refresh" />
	<?php
	}
?>
