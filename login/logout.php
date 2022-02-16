<?php
session_start();
session_destroy();
if ($_SESSION['username']) {
    header("location: form-login.html");
} else if ($_SESSION['nisn']) {
    header("location: form-login-siswa.html");
}
?>