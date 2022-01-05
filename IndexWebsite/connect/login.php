<?php
session_start();

include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];

$data = mysqli_query($host, "SELECT * FROM registeration WHERE email='$email' and password='$password'");
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['email'] = $email;
	$_SESSION['status'] = "login";
    header("location:../admin/admin.php?pesan=berhasil");
}else{
    header("location:index_login.php?pesan=gagal");
}
?>