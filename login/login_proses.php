<?php 
session_start();
 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$result = mysqli_query($koneksi,"SELECT * FROM user where username='$username' and password='$password'");

$cek = mysqli_num_rows($result);
 
if($cek > 0) {
	$data = mysqli_fetch_assoc($result);
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "sudah_login";
	header("location:../admin/index.php");
} else {
	header("location:login.php?pesan=gagal login data tidak ditemukan.");
}
?>