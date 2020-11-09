<?php
  session_start();

  //cek apakah sesuai status sudah login? kalau belum akan kembali ke form login
  if($_SESSION['status']!="sudah_login"){
  //melakukan pengalihan
  header("location:../login.php");
  } 
?>
<!DOCTYPE html>
      <head>
          <title>Replica Apple</title>
          <link rel="stylesheet" type="text/css" href="../css/style.css">
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
      </head>
      <body>
          <!--navbar-->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="p">
                  <a class="navbar-brand" href="#">Menu</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
              </div>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav justify-content-center fixed-top">
                  <li class="nav-item active">
                      <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item active">
                    <a class="nav-link" href="#product">Product</a>
                  </li>
                  <li class="nav-item active">
                      <a class="nav-link" href="../crud/index.php">Feedback</a>
                  </li>
                </ul>
              </div>
            </nav>
          <!--jumbotron-->
          <div class="jumbotron text-center">
              <img src="../img/apple.png" weight="150px" height="150px">
          </div>
          <!--home-->
          <section class="home" id="home">
              <div class="row">
                  <div class="col-sm-12">
                      <h2 class="text-center">Apple</h2>
                  </div>
                  <div class="col-sm-12">
                      <p class="text-center">Apple Inc. is an American multinational tecnology company based in Cupertino,California.</p>
                  </div>
              </div>
          </section>
          <br>
          <!--product-->
          <section class="product" id="product">
              <div class="row">
                  <div class="col-sm-12">
                      <h2 class="text-center">Product</h2>
                  </div>
                  <div class="col-sm-6">
                      <img src="../img/iphone 11.png" weight="400px" height="400px" class="center">
                      <h3 class="text-center">Iphone 11</h3>
                      <div class="text-center">
                        <input type="submit" class="btn btn-outline-dark" value="Buy">
                      </div>
                  </div>
                  <div class="col-sm-6">
                      <img src="../img/iphone_11 promax.png" weight="400px" height="400px" class="center">
                      <h3 class="text-center">Iphone 11 Pro</h3>
                      <div class="text-center">
                        <input type="submit" class="btn btn-outline-dark" value="Buy">
                      </div>
                  </div>  
                  <div class="col-sm-12">
                      <img src="../img/iphone_11 promax.png" weight="450px" height="450px" class="center">
                      <h3 class="text-center">Iphone 11 Pro Max</h3>
                    <div class="text-center">
                      <input type="submit" class="btn btn-outline-dark" value="Buy">
                    </div>
                </div>  
              </div>
          </section>
          <br>
          <!--contact us-->
          <form action="../crud/input.php" method="post" onSubmit="validasiform()" name="formsar" enctype="multipart/form-data">
              <section class="testimoni" id="testimoni">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12 text-center">
                        <h1>Your Feedback</h1>
                        <hr>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-12 col-sm-offset-2">
                        <form>
                          <div class="form-group">
                            <label for="nama">Name</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Enter Your Name"><br>
                            <small style="color: red" id="err_nama"></small>
                          </div>
                          <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Your E-Mail"><br>
                            <small style="color: red" id="err_email"></small>
                          </div>
                          <div class="form-group">
                            <label for="pesan">Feedback</label>
                            <textarea class="form-control" name="saran" id="saran" rows="10" placeholder="Your Feedback"></textarea><br>
                            <small style="color: red" id="err_saran"></small>
                          </div>
                          <div class="form-group">
                            <label for="upload">Upload Foto</label>
                            <input type="file" name="file">
                            <small style="color: red" id="err_upload"></small>
                          </div>
                          <div class="text-center">
                            <input type="submit" value="Post" class="btn btn-outline-dark" name="login" id="login">
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </section>
          </form>
          <!--footer-->
          <footer class="footer" align="center">
              <p>Made with ♡ | Made Anantha Yoga</p>
          </footer>
      <!--Java Script-->
          <script src="../js/script.js"></script>
      </body>
</html>