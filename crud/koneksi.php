<?php 
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "crud_db";

	$koneksi = new mysqli($host, $user, $pass, $db) or die(mysqli_error($koneksi));
?>