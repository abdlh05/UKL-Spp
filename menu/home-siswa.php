<?php
	session_start();
	if (!isset($_SESSION['nisn'])) {
		header("location:../login/form-login-siswa.html");
	}else{
		$nisn = $_SESSION['nisn'];
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aplikasi Pembayaran SPP : DARK-MOON School</title>
    <style>
		ul {
		
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
		background-color: #333;
		top: 0;
	
	}
	
	li {
		float: left;
		border-right:1px solid #bbb;
	}
	
	li:last-child {
		border-right: none;
	}
	
	li a {
		display: block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
	
	li a:hover:not(.active) {
		background: linear-gradient(90deg, #020024 0%, #340979 37%, #00d4ff 94%);
	}
	</style>
</head>
<body>
    <ul>
		<li><a href="home-siswa.php">Home</a></li>
		<li><a href="#">History Pembayaran</a></li>
		<li><a href="../login/logout.php">Logout</a></li>
	</ul>

    <h3>Selamat datang <?=$_SESSION['nama']?> </h3>
	<?php require_once("../nav/footer.php");?>
</body>
</html>