<html>
    <head>
        <title>Feedback</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="judul">
        <h2>Testimoni</h2>
        </div>
        </br>

        <?php
            if(isset($_GET['pesan'])){
                $pesan = $_GET['pesan'];
                if($pesan == "input"){
                    echo "Data berhasil di input";
                }else if($pesan == "update"){
                    echo "Data berhasil di update";
                }else if($pesan == "delete"){
                    echo "Data berhasil di hapus";
                }
            }
        ?>
        </br>
        <table border="2" class="table">
            <tr>
                <th>Nomor</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Feedback</th>
                <th colspan="2">Action</th>
            </tr>
        <?php
            include "koneksi.php";
            $result = $koneksi->query("SELECT * from feedback") or die(mysqli_error($koneksi));
            $nomor = 1;
            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $nomor++; ?></td>
                <td><?php echo $row['nama'] ?></td>
                <td><?php echo $row['email'] ?></td>
                <td><?php echo $row['saran'] ?></td>
                <td>
                    <a class="btn btn-outline-dark" href="edit.php?" name="edit" id="edit"<?php echo $row['nama']?>>Edit</a>
                    <a class="btn btn-outline-dark" href="hapus.php?" name="delete" id="delete"<?php echo $row['nama']?>>Hapus</a>
                </td>
                <br>
            </tr>
            <?php } ?>
         </table>

    </body>
</html>