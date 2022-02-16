<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
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

	<?php
	if ($_SESSION['level'] == "admin") {?>
		
			<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="read_siswa.php">Siswa</a></li>
				<li><a href="read_petugas.php">Petugas</a></li>
				<li><a href="read_kelas.php">Kelas</a></li>
				<li><a href="read_spp.php">SPP</a></li>
				<li><a href="#">Transaksi</a></li>
				<li><a href="#">History Pembayaran</a></li>
				<li><a href="../login/logout.php">Logout</a></li>
			</ul>
		<?php
	}else if ($_SESSION['level'] == "petugas") { ?>
		<ul>
				<li><a href="home.php">Home</a></li>
				<li><a href="#">Transaksi</a></li>
				<li><a href="#">History Pembayaran</a></li>
				<li><a href="../login/logout.php">Logout</a></li>
			</ul>
	<?php } ?>
</body>
</html>