<html>
    <head>
        <title>Edit Data</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
    <?php
        include "koneksi.php";
    ?>
    <h3>Edit Data</h3>
        <form action="update.php">
            <label for="nama">Name</label>
            <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Your Name"><br>
            <label for="email">E-Mail</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your E-Mail"><br>
            <label for="pesan">Feedback</label>
            <textarea class="form-control" name="saran" id="saran" rows="10" placeholder="Your Feedback"></textarea><br>
            <input type="submit" value="Post" class="btn btn-outline-dark" name="ganti" id="ganti">

        </form>
    </body>
</html>