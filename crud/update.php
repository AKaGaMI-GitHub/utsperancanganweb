<?php
    include "koneksi.php";
    if (isset($_POST['ganti'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $feedback = $_POST['saran'];
    }

    mysqli_query("UPDATE feedback SET nama='$nama',email='$email',saran='$feedback'");
    header("location:index.php?pesan=update");
?>