<?php 

	include '../conn/connect_spp.php';

	$id = $_POST ['id'];
	$nama_kelas = $_POST ['nama_kelas'];
	$jurusan = $_POST ['jurusan'];
	$angkatan = $_POST['angkatan'];

	$query = "INSERT INTO kelas  VALUES ('$id', '$nama_kelas', '$jurusan', '$angkatan')";
	$result = mysqli_query($conn, $query);

	$num = mysqli_affected_rows($conn);

	if ($num >  0) { 
	echo "Berhasil Tambah Data";
	
	}

	else
	{ echo "Gagal Tambah Data, Data sudah ada"; }
	echo "<a href = '../menu/read_kelas.php' >Lihat Data</a>";

 ?>