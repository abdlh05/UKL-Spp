<?php
    include '../conn/connect_spp.php';
    $getnisn = $_GET['nisn'];
    $siswa = mysqli_query($conn, "SELECT * FROM siswa JOIN kelas ON siswa.id_kelas=kelas.id_kelas WHERE siswa.nisn='$getnisn'");
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
  <h3>Edit Data Siswa</h3>
  <?php 
  while($row = mysqli_fetch_assoc($siswa)){?>
    <form action="update.php" class="form" method="POST">
  <label for="fname">NISN         :</label>
  <input type="text" id="nisn" name="nisn" value = "<?=$row['nisn']?>"><br><br>

  <label for="lname">NIS          :</label>
  <input type="text" id="nis" name="nis" value="<?=$row['nis']?>"><br><br>

  <label for="fname">Nama:</label>
  <input type="text" id="nama_siswa" name="nama_siswa" value="<?=$row['nama']?>"><br><br>
  
  <label for="lname">KELAS        :</label>
    <select name="kelas" class="input">
					<option value="" selected ><?=$row['nama_kelas']." | ".$row['jurusan']?></option>
					<?php
          $kelas = mysqli_query($conn,"SELECT * FROM kelas ORDER BY nama_kelas ASC");
					while($k = mysqli_fetch_array($kelas)){?>
						<option value="<?=  $k['id_kelas']; ?>"><?= $k['nama_kelas'] . " | " . $k['jurusan']; ?></option>
					<?php
					}?>	
	</select><br><br>
  <label for="lname">ALAMAT       :</label>
  <input type="text" id="alamat" name="alamat" value="<?=$row['alamat']?>"><br><br>

  <label for="lname">NOMOR TELEPON:</label>
  <input type="text" id="no_hp" name="no_hp" value="<?=$row['no_telp']?>"><br><br>

  <input type="submit" value="Submit">
  
  </form>
  <?php } ?>

</body>
</html>