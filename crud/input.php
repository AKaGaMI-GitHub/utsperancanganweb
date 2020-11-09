<?php
    include "koneksi.php";
    if (isset($_POST['login'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $feedback = $_POST['saran'];
        
        $koneksi->query("INSERT INTO feedback (nama,email,saran) VALUES ('$nama','$email','$feedback')") or
                die($koneksi->error);
    }
    header("location:index.php?pesan=input");
?>