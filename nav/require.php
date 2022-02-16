<?php
session_start();
require_once('../conn/connect_spp.php');

if (!isset($_SESSION['username'])) {
    header("location:../login/form-login.html");
}else{
    $username = $_SESSION['username'];
}
?>