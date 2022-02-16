<?php
include '../conn/connect_spp.php';

    $nisn = $_GET['nisn'];
    $hapus = mysqli_query($conn," DELETE FROM siswa WHERE nisn='$nisn' ");
    if($hapus){
        header("location:../menu/read_siswa.php");
    }else{
        echo"<script>alert('maaf gagal menghapus, data masih terhubung dengan data lain');</script>";
    }


?>