<?php 

	include '../conn/connect_spp.php';

	$id = $_POST['id'];
	$nama_petugas = $_POST ['nama_petugas'];
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$level = $_POST['level'];

	$query = "INSERT INTO petugas VALUES ('$id', '$nama_petugas', '$username', '".md5($password)."', '$level')";
	$result = mysqli_query($conn, $query);

	$num = mysqli_affected_rows($conn);

	if ($num >  0) { 
	echo "Berhasil Tambah Data";
	
	}

	else
	{ echo "Gagal Tambah Data, Data sudah ada"; }
	echo "<a href = '../menu/read_petugas.php' >Lihat Data</a>";

 ?>