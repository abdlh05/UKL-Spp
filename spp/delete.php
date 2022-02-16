<?php
include '../conn/connect_spp.php';

    $id = $_GET['id'];
    $hapus = mysqli_query($conn," DELETE FROM spp WHERE id_spp='$id' ");
    if($hapus){
        header("location:../menu/read_spp.php");
    }else{
        echo"<script>alert('maaf gagal menghapus, data masih terhubung dengan data lain');</script>";
    }


?>