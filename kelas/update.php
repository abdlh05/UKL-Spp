<?php 

include '../conn/connect_spp.php';

	$id = $_POST ['id'];
	$nama_kelas = $_POST ['nama_kelas'];
	$jurusan = $_POST ['jurusan'];
	$angkatan = $_POST['angkatan'];

	$update = "UPDATE kelas SET nama_kelas='$nama_kelas',
			  jurusan='$jurusan',angkatan='$angkatan' WHERE id_kelas='$id'";
	$result = mysqli_query($conn,$update);
	$num = mysqli_affected_rows($conn);

	if ($num > 0) 
	{ echo "Berhasil Update Data";}
	else
	{ echo "Gagal Update Data"; }
	echo "<a href = '../menu/read_kelas.php' > Lihat Data </a>";
 ?>