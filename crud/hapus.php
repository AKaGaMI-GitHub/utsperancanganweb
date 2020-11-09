<?php
    include "koneksi.php";
    if (isset($_GET['delete'])){
        $id = $_GET['delete'];
        $koneksi->query("DELETE FROM feedback WHERE feedback.nama=$id") or 
                die($koneksi->error());
    }
    header("location:index.php?pesan=delete");
?>