<?php
session_start();
include '../conn/connect_spp.php';

    $nisn = $_POST['nisn'];
    if($nisn == ""){
        echo "<script>alert('NISN kosong');location.href='form-login-siswa.html';</script>";
    }else{
    $cari = mysqli_query($conn, "SELECT * FROM siswa WHERE nisn='$nisn'");
    $manggilnama= mysqli_query($conn,"SELECT nama FROM siswa WHERE nisn = '$nisn'");
    $hasil = mysqli_fetch_assoc($cari);
    $num = mysqli_num_rows($cari);

        if($num == 1){
            $manggil=mysqli_fetch_array($manggilnama);
            $_SESSION['nama']=$manggil['nama'];
            $_SESSION['nisn']=$nisn;
            header("location:../menu/home-siswa.php");
        }else{
            echo "<script>alert('nisn belum terdaftar!');location.href='form-login-siswa.html';</script>";
        }
    }
?>