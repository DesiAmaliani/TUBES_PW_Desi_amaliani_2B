<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script type="text/javascript" src="tinymce/tiny_mce.js"></script>
  <script type="text/javascript">
    tinymce.init({
      mode:"textareas",
      theme:"advanced",
    });
  </script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <title>coba boostrap</title>
</head>
<body>
  <nav class="navbar navbar-dark fixed-top" style="background-color: green;">
    <!-- Navbar content -->
    <a class="navbar-brand"><img src="" height="40" width="40"></a>
    <ul class="nav justify-content-end nav-tabs">
      <li class="nav-item">
        <a class="nav-link " href="#mypage" style="color: white;">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Profil" style="color: white;">Profil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#Galeri" style="color: white;">Galeri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#daftar" style="color: white;">Daftar Fansclub</a>
      </li>
    </ul>
  </nav>
  <div id="mypage">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
     <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="img/22.png" alt="First slide" height="600" width="100">
        <div class="carousel-caption d-none d-md-block" style="color: yellow;">
          <h5>Selamat Datang Di Web Kami</h5>
          <p>Ini Merupakan Website K-POP Bagi Penggemar K-POP Silahkan Liat Liat</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/img.jpg" alt="Second slide" height="600" width="100">
        <div class="carousel-caption d-none d-md-block" style="color: yellow;">
          <h5>Selamat Datang Di Web Kami</h5>
          <p>Ini Merupakan Website K-POP Bagi Penggemar K-POP Silahkan Liat Liat</p>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="img/ii.png" alt="Third slide" height="600" width="100">
        <div class="carousel-caption d-none d-md-block" style="color: yellow;">
          <h5>Selamat Datang Di Web Kami</h5>
          <p>Ini Merupakan Website K-POP Bagi Penggemar K-POP Silahkan Liat Liat</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<div style="background-color: #8B4513;" id="Profil">
  <h2 align="center" style="font-family: Decorative; color: white;">Profil</h2>
  <div class="container" align="center">
    <center>
      <a button type="button" class="btn btn-primary" href="index.php?module=home">BTS</button></a>
      <a button type="button" class="btn btn-success" href="index.php?module=got7&act=view">GOT7</button></a>
      <a button type="button" class="btn btn-danger" href="index.php?module=blackpink&act=view">BlackPink</button></a></center><br><br>
      <div class="row">
        <div class="col-sm" class="text" id="content">
        <?php include "galeri.php"; ?>
      </div>
    </div>
  </div>
        <div style="background-color: #F0E68C;" id="daftar">
          <h2 align="center" style="font-family: Decorative; color: black;">Daftar Fansclub</h2><br>
          <div class="container">
            <p style="font-family: book antiqua; font-size: 15px">Yang Mau Daftar Sebagai Anggota Fansclub,<br>Silahkan isi data dibawah ini : </p>
            <div class="col-sm-6" style="background-color: white">
              <form action="aksi_tambah_anggota.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama" name="nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="alamat" name="alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Hp</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="no_hp" name="no_hp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Fans</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nama_fans" name="nama_fans">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Foto</label><br>
                  <input type="file" id="exampleInputFile" name="foto">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alasan Masuk</label>
                  <textarea  name="alasan" class="form-control"></textarea>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Kirim</button><br><br>
              </form>
            </div><br><br>
          </div>
        </div>
        <footer style="background-color: #FFFFF0; text-align: center;"><br>
          <p>@Author Desi Amaliani</p>
          <p>
            <a href="#mypage">Back to top</a>
          </p>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

      </body>
      </html>