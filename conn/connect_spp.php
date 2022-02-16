<?php

$host = "localhost";
$db = "db_spp";
$uname = "root";
$pass = "";

// Create connection
$conn = mysqli_connect($host, $uname, $pass, $db);

// Check connection
if (!$conn) {
  echo "Connected failed" . mysqli_connect_error();
}
?>