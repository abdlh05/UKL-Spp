 <?php 

include '../conn/connect_spp.php';

$nisn = $_POST ['nisn'];
	$nis = $_POST ['nis'];
	$nama_siswa = $_POST ['nama_siswa'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST ['alamat'];
	$telp = $_POST ['no_hp'];

	$update = "UPDATE siswa SET nis='$nis', nama='$nama_siswa',
			  id_kelas='$kelas', alamat='$alamat', no_telp='$telp' WHERE nisn='$nisn'";
	$result = mysqli_query($conn,$update);
	$num = mysqli_affected_rows($conn);

	if ($num > 0) 
	{ echo "Berhasil Update Data";}
	else
	{ echo "Gagal Update Data"; }
	echo "<a href = '../menu/read_siswa.php' > Lihat Data </a>";
 ?>