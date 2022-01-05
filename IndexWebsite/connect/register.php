<?php
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$jeniskelamin = $_POST['jeniskelamin'];
$datebirth = $_POST['datebirth'];

mysqli_query($host, "INSERT INTO registeration VALUES ('', '$email', '$password', '$repassword', '$jeniskelamin', '$datebirth')");
header("location:../index.php?pesan=berhasil");
?>