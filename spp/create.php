<?php 

	include '../conn/connect_spp.php';

	$id = $_POST ['id'];
	$angkatan = $_POST ['angkatan'];
	$tahun = $_POST ['tahun'];
	$nominal = $_POST['nominal'];

	$query = "INSERT INTO spp  VALUES ('$id', '$angkatan', '$tahun', '$nominal')";
	$result = mysqli_query($conn, $query);

	$num = mysqli_affected_rows($conn);

	if ($num >  0) { 
	echo "Berhasil Tambah Data";
	
	}

	else
	{ echo "Gagal Tambah Data, Data sudah ada"; }
	echo "<a href = '../menu/read_spp.php' >Lihat Data</a>";

 ?>