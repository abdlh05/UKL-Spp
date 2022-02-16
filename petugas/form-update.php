<?php 
include '../conn/connect_spp.php';
$getid = $_GET['id'];
$petugas = mysqli_query($conn, "SELECT * FROM petugas WHERE id_petugas='$getid'");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Form Update Petugas</title>
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
  
<h3>Edit Data Petugas</h3>
  <?php
  while($row = mysqli_fetch_assoc($petugas)){?>
  <form action="update.php" class="form" method="POST">
  <label for="fname">ID Petugas         :</label>
  <input type="text" id="id" name="id" value="<?=$row['id_petugas']?>"><br><br>

  <label for="fname">Nama Petugas         :</label>
  <input type="text" id="nama_petugas" name="nama_petugas" value="<?=$row['nama_petugas']?>"><br><br>

  <label for="lname">Username             :</label>
  <input type="text" id="username" name="username" value="<?=$row['username']?>"><br><br>

  <label for="fname">Password             :</label>
  <input type="text" id="password" name="password" value="<?=$row['password']?>"><br><br>
  
  <label for="lname">Level        :</label>
  <select name="level" class="input">
          <option value="" selected >- Pilih Level -</option>
          <option value="admin">admin</option>
          <option value="petugas">petugas</option>
	</select><br><br>

  <input type="submit" value="Submit">
  
  </form>
  <?php } ?>
	
</body>
</html>