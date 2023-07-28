<?php
    session_start();
    include "../daflog/koneksi.php";

    if(!isset($_SESSION['username'])){
        header("location:../daflog/login.php");
    }
    
    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="logo.png" type="image/icon" >
    <title>SEREJO</title>
  </head>

  <body>
    <!-- Awal Navbar -->
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container text-uppercase">
          <a class="navbar-brand fs-3 font-monospace" href="#"> <img src="logo.png" alt="" width="37" height="35">serejo </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"     aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active"  href="../admin.php">Beranda</a>
              <a class="nav-link active" href="penduduk.php">Penduduk</a>
              <a class="nav-link active" href="pengurus.php">Pengurus</a>
              <a class="garis" ></a>
              <a href="logout.php" class="btn text-light rounded" style="background: #007965;">Logout</a>
            </div>
          </div>
        </div>
      </nav>

    <!-- Akhir Navbar -->


  <div class="container" style="margin-top:20px">
    <div class="col-lg-12 text-center mb-5" style="margin-top: 8%;">
		<h1>Tambah Data Pengurus</h1>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle ">
        <form action="tambah_proses_pengurus.php" method="POST" enctype="multipart/form-data">
            <table class="tabel">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" required></td>
            </tr>
            <tr>
                <td>No KTP</td>
                <td>:</td>
                <td>
                    <input type="number" name="no_ktp" required></td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>:</td>
                <td>
                    <select name="gender" required>
                        <option>Gender</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td>
                    <input type="text" name="jabatan" required></td>
            </tr>
            <tr>
                <td>No Telepon</td>
                <td>:</td>
                <td>
                    <input type="number" name="no_telepon" required></td>
            </tr>
            <tr>
                <td>Status</td>
                <td>:</td>
                <td>
                    <input type="text" name="status" required></td>
            </tr>
            <tr>
                <td>Pasfoto</td>
                <td>:</td>
                <td>
                    <input type="file" name="pasfoto" required style="width:225px; border:none;">
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td><input type="submit" name="tambah" class="btn btn-primary" value="Tambah" style="margin-left: 30px;">
					          <a href="pengurus.php" class="btn btn-warning">Kembali</a></td>
            </tr>
            </table>
        
        
        </form>
    </div>
  </div>

  </body>

</html>