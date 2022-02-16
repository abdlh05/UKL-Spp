<?php
include '../conn/connect_spp.php';

    $id = $_GET['id'];
    $hapus = mysqli_query($conn," DELETE FROM petugas WHERE id_petugas='$id' ");
    if($hapus){
        header("location:../menu/read_petugas.php");
    }else{
        echo"<script>alert('maaf gagal menghapus, data masih terhubung dengan data lain');</script>";
    }


?>