<?php 

	include '../conn/connect_spp.php';

	$nisn = $_POST ['nisn'];
	$nis = $_POST ['nis'];
	$nama_siswa = $_POST ['nama_siswa'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST ['alamat'];
	$telp = $_POST ['no_hp'];

	$query = "INSERT INTO siswa  VALUES ('$nisn', '$nis', '$nama_siswa', '$kelas', '$alamat', '$telp')";
	$result = mysqli_query($conn, $query);

	$num = mysqli_affected_rows($conn);

	if ($num >  0) { 
	echo "Berhasil Tambah Data";
	
	}

	else
	{ echo "Gagal Tambah Data, Data sudah ada"; }
	echo "<a href = '../menu/read_siswa.php' > Lihat Data</a>";

 ?>