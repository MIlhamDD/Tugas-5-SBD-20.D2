<?php
$host = "localhost";
$user = "adminklinik";
$pass = "312010167";
$db = "klinik_312010167";
$conn = mysqli_connect ($host, $user, $pass, $db);
if ($conn == false)
{
echo "koneksi ke server gagal.";
die();
} #else echo "koneksi berhasil";
?>

