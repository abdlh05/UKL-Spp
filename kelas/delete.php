<?php
include '../conn/connect_spp.php';

    $id = $_GET['id'];
    $hapus = mysqli_query($conn," DELETE FROM kelas WHERE id_kelas='$id' ");
    if($hapus){
        header("location:../menu/read_kelas.php");
    }else{
        echo"<script>alert('maaf gagal menghapus, data masih terhubung dengan data lain');</script>";
    }


?>