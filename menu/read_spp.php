<?php  

	include '../conn/connect_spp.php';
	require_once('../nav/require.php');

	$querry = "SELECT * FROM spp ";
	$result = mysqli_query($conn, $querry);
	$num = mysqli_num_rows($result); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data SPP</title>
</head>
<body>
	<?php require_once('../nav/header.php');?>
	<p><a href="../spp/create.php"></a> </p>
	<table border="1">
		<h2>Data SPP</h2>
		<tr>
			<th>Angkatan</th>
			<th>Tahun</th>
			<th>Nominal</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
			if ($num > 0) {
				$no =1;
				while ($data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>". $data['angkatan'] . "</td>";
					echo "<td>". $data['tahun'] . "</td>";
					echo "<td>". $data['nominal'] . "</td>";
					echo "<td><a href='../spp/form-update.php?id=" . $data['id_spp'] ."'>Edit</a> ";
					echo "<td><a href='../spp/delete.php?id=" . $data['id_spp'] ."' onclick = 'return confirm(\" Apakah anda yakin ingin menghapus data? \")' >Hapus</a> ";
					echo "</tr>";

					
					$no++;
				}
			}else{
				echo "<td colspan = '7'> Tidak ada data </td>";
			}
		 ?>
		 <a href = '../spp/form-create.php' >Tambah Data SPP</a>
	</table>

</body>
</html>