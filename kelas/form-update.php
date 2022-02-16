<?php
    include '../conn/connect_spp.php';
    $id = $_GET['id'];
    $kelas = mysqli_query($conn, "SELECT * FROM kelas WHERE id_kelas = '$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Update Siswa</title>
</head>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background: #020024;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background: linear-gradient(90deg, #020024 0%, #340979 37%, #00d4ff 94%);
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
  <h3>Edit Data Kelas</h3>
  <?php while($row = mysqli_fetch_assoc($kelas)){ ?>
  <div>
  <form action="update.php" class="form" method="POST">
  <label for="fname">ID Kelas         :</label>
  <input type="text" id="id_kelas" name="id" value="<?=$row['id_kelas']?>"><br><br>

  <label for="lname">Nama Kelas          :</label>
  <input type="text" id="nama_kelas" name="nama_kelas" value="<?=$row['nama_kelas']?>"><br><br>

  <label for="fname">Jurusan:</label>
  <input type="text" id="jurusan" name="jurusan" value="<?=$row['jurusan']?>"><br><br>

  <label for="lname"> Angkatan:</label>
  <input type="text" id="angkatan" name="angkatan" value="<?=$row['angkatan']?>"><br><br>

  <input type="submit" value="Submit">
  <?php } ?>

</body>
</html>