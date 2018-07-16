<?php
	include '../includes/config.php';
	$id = $_REQUEST['id'];
		$query = "DELETE FROM poruke WHERE poruka_id = '$id'";
	$result = $conn->query($query);
	if($result === TRUE){
		echo "<script type = \"text/javascript\">
					alert(\"Poruka uspesno obrisana\");
					window.location = (\"index.php\")
				</script>";
	}
?>
