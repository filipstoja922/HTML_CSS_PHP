<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM kola WHERE id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Auto uspesno obrisan\");
					window.location = (\"lista_vozila.php\")
				</script>";
	}
?>
