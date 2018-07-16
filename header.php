<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
				<h1 class="logo">Agencija Smart </h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Pocetna</a></li>
						<li><a href="O nama.php">O nama</a></li>
						<li><a href="kontakt.php">Kontakt</a></li>
					</ul>
					<a href="client_log.php">Client Logovanje</a>
					<a href="login.php">Admin Logovanje</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Pocetna</a></li>
								<li><a href="status.php">Vidi Status</a></li>
								<li><a href="poruka_admin.php">Posalji poruku adminu</a></li>
							</ul>
					<a href="admin/logout.php">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>