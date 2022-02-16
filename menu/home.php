<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP : DARK-MOON School</title>
</head>
<body>
	<!-- Memanggil navigasi -->
	<?php require_once("../nav/header.php");?>
	<h3>Selamat datang <?=$_SESSION['nama']?> </h3>
	<?php require_once("../nav/footer.php");?>
</body>
</html>