<?php  

	include '../conn/connect_spp.php';
	require_once('../nav/require.php');

	$querry = "SELECT * FROM kelas ";
	$result = mysqli_query($conn, $querry);
	$num = mysqli_num_rows($result); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<?php require_once('../nav/header.php');?>
	<p><a href="../kelas/create.php"></a> </p>
	<table border="1">
		<h2>Data Siswa</h2>
		<tr>
			<th>Nama Kelas</th>
			<th>Jurusan</th>
			<th>Angkatan</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
			if ($num > 0) {
				$no =1;
				while ($data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>". $data['nama_kelas'] . "</td>";
					echo "<td>". $data['jurusan'] . "</td>";
					echo "<td>". $data['angkatan'] . "</td>";
					echo "<td><a href='../kelas/form-update.php?id=" . $data['id_kelas'] ."'>Edit</a> ";
					echo "<td><a href='../kelas/delete.php?id=" . $data['id_kelas'] ."' onclick = 'return confirm(\" Apakah anda yakin ingin menghapus data? \")' >Hapus</a> ";
					echo "</tr>";

					
					$no++;
				}
			}else{
				echo "<td colspan = '7'> Tidak ada data </td>";
			}
		 ?>
		 <a href = '../kelas/form-create.php' >Tambah Data Siswa</a>
	</table>

</body>
</html>