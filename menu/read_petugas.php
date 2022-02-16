<?php  

	include '../conn/connect_spp.php';
	require_once('../nav/require.php');

	$querry = "SELECT * FROM petugas ";
	$result = mysqli_query($conn, $querry);
	$num = mysqli_num_rows($result); 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Data Petugas</title>
</head>
<body>
	<?php require_once('../nav/header.php');?>
	<p><a href="../petugas/create.php"></a> </p>
	<table border="1">
		<h2>Data Petugas</h2>
		<tr>
			<th>Nama Petugas</th>
			<th>Username</th>
			<th>Password</th>
			<th>Kategori</th>
			<th colspan="2">Aksi</th>
		</tr>

		<?php 
			if ($num > 0) {
				$no =1;
				while ($data = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>". $data['nama_petugas'] . "</td>";
					echo "<td>". $data['username'] . "</td>";
					echo "<td>". $data['password'] . "</td>";
					echo "<td>". $data['level'] . "</td>";
					echo "<td><a href='../petugas/form-update.php?id=" . $data['id_petugas'] ."'>Edit</a> ";
					echo "<td><a href='../petugas/delete.php?id=" . $data['id_petugas'] ."' onclick = 'return confirm(\" Apakah anda yakin ingin menghapus data? \")' >Hapus</a> ";
					echo "</tr>";

					
					$no++;
				}
			}else{
				echo "<td colspan = '7'> Tidak ada data </td>";
			}
		 ?>
		 <a href = '../petugas/form-create.php' >Tambah Data Petugas</a>
	</table>

</body>
</html>