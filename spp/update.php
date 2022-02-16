<?php 

include '../conn/connect_spp.php';

$id = $_POST ['id'];
$angkatan = $_POST ['angkatan'];
$tahun = $_POST ['tahun'];
$nominal = $_POST['nominal'];

	$update = "UPDATE spp SET angkatan='$angkatan',
			  tahun='$tahun', nominal='$nominal' WHERE id_spp='$id'";
	$result = mysqli_query($conn,$update);
	$num = mysqli_affected_rows($conn);

	if ($num > 0) 
	{ echo "Berhasil Update Data";}
	else
	{ echo "Gagal Update Data"; }
	echo "<a href = '../menu/read_spp.php' > Lihat Data </a>";
 ?>