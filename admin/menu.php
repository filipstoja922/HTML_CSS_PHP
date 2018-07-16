<?php
	error_reporting("E-NOTICE");
?>
<?php
	session_start();
	if(!$_SESSION['uname'] && (!$_SESSION['pass'])){
		header("location: ../login.php");
	}
?>
<div id="top">
			<h1><a href="#">Agencija za iznajmljivanje vozila</a></h1>
			<div id="top-navigation">
				Dobrodosli <a href="#"><strong>Administrator</strong></a>		
				<span>|</span>
				<a href="logout.php">Log out</a>
			</div>
		</div>
<div id="navigation">
			<ul>
			    <li><a href="index.php"><span>Panel</span></a></li>
			    <li><a href="lista_vozila.php"><span>Upravljanje vozilima</span></a></li>
			    <li><a href="client_zahtev.php"><span>Zahtevi</span></a></li>
			    <li><a href="index.php"><span>Poruke</span></a></li>
			</ul>
		</div>