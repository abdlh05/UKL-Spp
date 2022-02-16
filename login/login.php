<?php
session_start();
include '../conn/connect_spp.php';

$username = $_POST['username'];
$password = $_POST['password'];

if($username == "" || $password == "")
{
    echo "<script>alert('username/password kosong');location.href='form-login.html';</script>";
}else{
$query = "SELECT * FROM petugas WHERE username = '$username' and password = '".md5($password)."' ";
$manggilnama= mysqli_query($conn,"SELECT nama_petugas FROM petugas WHERE username = '$username'");

$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
if($num == 1){
    $manggil=mysqli_fetch_array($manggilnama);
    $data=mysqli_fetch_array($result);
    $_SESSION['username']=$username;
    header("location:../menu/home.php");
    $_SESSION['level']=$data['level'];
    $_SESSION['nama']=$manggil['nama_petugas'];
}else{
    echo "<script>alert('username/password salah');location.href='form-login.html';</script>";
    
}
}

?>