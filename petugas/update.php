
 <?php 

include '../conn/connect_spp.php';

	$id = $_POST ['id'];
	$nama = $_POST ['nama_petugas'];
	$username = $_POST ['username'];
	$password = $_POST['password'];
	$level = $_POST ['level'];

	$update = "UPDATE petugas SET nama_petugas='$nama',
			  username='$username', password='$password', level='$level' WHERE id_petugas='$id'";
	$result = mysqli_query($conn,$update);
	$num = mysqli_affected_rows($conn);

	if ($num > 0) 
	{ echo "Berhasil Update Data";}
	else
	{ echo "Gagal Update Data"; }
	echo "<a href = '../menu/read_petugas.php' > Lihat Data </a>";
 ?>