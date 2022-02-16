<?php  

	include '../conn/connect_spp.php';
	require_once('../nav/require.php');

	$querry = "SELECT * FROM `siswa` INNER JOIN `kelas` ON siswa.id_kelas=kelas.id_kelas ";
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
	<p><a href="../siswa/create.php"></a> </p>
	<table border="1">
		<h2>Data Siswa</h2>
		<tr>
			<th>NISN</th>
			<th>NIS</th>
			<th>Nama Siswa</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
			if ($num > 0) {
				$no =1;
				while ($data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>". $data['nisn'] . "</td>";
					echo "<td>". $data['nis'] . "</td>";
					echo "<td>". $data['nama'] . "</td>";
					echo "<td>". $data['nama_kelas']." | ".$data['jurusan'] . "</td>";
					echo "<td>". $data['alamat'] . "</td>";
					echo "<td>". $data['no_telp'] . "</td>";
					echo "<td><a href='../siswa/form-update.php?nisn=" . $data['nisn'] ."'>Edit</a> ";
					echo "<td><a href='../siswa/delete.php?nisn=" . $data['nisn'] ."' onclick = 'return confirm(\" Apakah anda yakin ingin menghapus data? \")' >Hapus</a> ";
					echo "</tr>";

					
					$no++;
				}
			}else{
				echo "<td colspan = '7'> Tidak ada data </td>";
			}
		 ?>
		 <a href = '../siswa/form-create.php' >Tambah Data Siswa</a>
	</table>

</body>
</html>