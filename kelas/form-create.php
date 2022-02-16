<?php require_once('../nav/require.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Siswa</title>
  <!-- <?php require("../nav/header.php"); ?> -->
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
<h3>Tambah Data Kelas</h3>
  <div>
  <form action="create.php" class="form" method="POST">
  <label for="fname">ID Kelas         :</label>
  <input type="text" id="id_kelas" name="id"><br><br>

  <label for="lname">Nama Kelas          :</label>
  <input type="text" id="nama_kelas" name="nama_kelas"><br><br>

  <label for="fname">Jurusan:</label>
  <input type="text" id="jurusan" name="jurusan"><br><br>

  <label for="lname"> Angkatan:</label>
  <input type="text" id="angkatan" name="angkatan"><br><br>

  <input type="submit" value="Submit">
  
  </form>
  </div>
	
</body>
</html>