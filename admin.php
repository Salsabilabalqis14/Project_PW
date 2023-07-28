<?php
    session_start();
    include "daflog/koneksi.php";

    if(!isset($_SESSION['username'])){
        header("location:login.php");
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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">

    <link rel="stylesheet" href="utama.css">
    <link rel="icon" href="img/logo.png" type="image/icon" >
    <title>SEREJO</title>
  </head>
  <body>
    <!-- Awal Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container text-uppercase">
          <a class="navbar-brand fs-3 font-monospace" href="#"> <img src="img/logo.png" alt="" width="37" height="35">serejo </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"     aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link active"  href="#">Beranda</a>
              <a class="nav-link active" href="crud/penduduk.php">Penduduk</a>
              <a class="nav-link active" href="crud/pengurus.php">Pengurus</a>
              <a class="garis" ></a>
              <a href="daflog/logout.php" class="btn text-light rounded" style="background: #007965;">Logout</a>
            </div>
          </div>
        </div>
      </nav>

    <!-- Akhir Navbar -->

    <!-- Awal Main-->

    <div class="main">
        <div class="container text-center ">
          <div class="row">
            <div class="col-lg-12 col-md-6">
            <h1 class="text-uppercase ">Selamat Datang <br> <?php echo "$username";?></h1>
            </div>
           </div>
        </div>
    </div>

    <!-- Akhir Main -->

     <!-- AWal pariwisata -->

     <div id="pariwisata">
            <div class="menu-top">
                <div class="container text-center">
                    <div class="row mb-5 ">
                        <div class="col">
                            <h2>Potensi Parawisata</h2>
                            <h3>Sawah Lukis </h1>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-12">
                <div class="card">
                  <img src="img/pr-1.jpeg" class="card-img-top" alt="..." height="300px">
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="card" >
                  <img src="img/pr-2.jpg" class="card-img-top" alt="..." height="300px">
                </div>
              </div>
              <div class="col-lg-4 col-md-12">
                <div class="card" >
                  <img src="img/pr-4.jpg" class="card-img-top" alt="..." height="300px">
                </div>
              </div>
            </div>
        </div>

        <div class="container info">
            <div class="row">
                <ul>
                    <li><i class="fa fa-check-circle"></i></li>
                    <li><h3>Sawah Lukis lebih kepada wisata yang menyediakan swafoto di tengah sawah. Pengunjung juga bisa menikmati kuliner khas pedesaan.</h3></li>
                </ul>
                <ul>
                    <li><i class="fa fa-check-circle"></i></li>
                    <li><h3>Apabila pengunjung merasa lapar, mereka bisa langsung menuju Saung Dusun Padi untuk menikmati berbagai macam kuliner yang disediakan.</h3></li>
                </ul>
                <ul>
                    <li><i class="fa fa-check-circle"></i></li>
                    <li><h3>Jam operasionalnya adalah setiap hari mulai pukul 09.00–19.00 WIB, dan setiap akhir pekan mulai pukul 07.00–19.00 WIB.</h3></li>
                </ul>
            </div>
        </div>

    </div>


    <!-- Akhir Pariwisata-->

    <!-- Awal Video -->
    <section  id="yt">
      <div class="container my-3 py-5 text-center">
        <div class="row yt">
          <div class="col">
            <h2 class="mt-4">Video Dokumenter Wisata Sawah Lukis</h2>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/BjkTsLMKylo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Video -->

    <!-- Awal Festival -->

    <div id="aboutus" class="about d-flex align-items-center" style="margin-top: 0;">
        <div class="container">
        <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-text">
                        <h2><span>Festival Budaya Serejo</span></h2>
                        <p id="ket">Festival Kebudayaan Serejo akan menampilkan beragam aksi dan kegiatan kedaerahan. Festival ini akan diselenggarakan di Lapangan Merderka pada tanggal 12 Mei 2030 hingga 20 Mei 2030.</p>
                        <a href="" class="btn text-uppercase text-light rounded">Login</a>
                    </div>
                </div>
                <div class="col-lg-6">
                <img src="img/fes-1.jpeg" alt="" height="400" width="480" style="border-radius :100px;">
                </div>
            </div>
        </div>
    </div> 


    <!-- Akhir Festival -->

    
    <!-- Awal Jadwal Ronda -->
    <section id="jadwal">
        <div class="container text-center jadwal-top">
          <div class="row">
            <div class="col">
              <h2>Rangkaian Kegiatan Festival <span><br>Serejo</span></h2>
            </div>
          </div>
          <div class="row">
            <table class="table table-striped mb-5">
                <thead>
                    <tr>
                    <th>Tanggal</th>
                    <th>12 Mei</th>
                    <th>14 Mei</th>
                    <th>15 Mei</th>
                    <th>18 Mei</th>
                    <th>20 Mei</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>07.00 - 09.00</th>
                        <td>Upacara <br>Pembukaan</td>
                        <td></td>
                        <td>Lomba <br>Kreasi</td>
                        <td></td>
                        <td>Konvoi <br>Baju Adat</td>
                    </tr>
                    <tr>
                        <th>09.00 - 11.00</th>
                        <td></td>
                        <td>Aksi Tari</td>
                        <td></td>
                        <td></td>
                        <td>Layar Lebar</td>
                    </tr>
                    <tr>
                        <th>13.00 - 14.30</th>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Makan Bersama</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>17.00 - 18.00</th>
                        <td></td>
                        <td>Acara Adat</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <th>20.00 - 22.00</th>
                        <td>Malam <br>Keakraban</td>
                        <td></td>
                        <td>Pertunjukan <br>Wayang</td>
                        <td></td>
                        <td>Upacara<br>Penutupan</td>
                    </tr>
                </tbody>
            </table>
          </div>
        </div>
        </div>
    </div>
</section>
    <!-- Akhir Jadwal Ronda -->

 <!-- Awal Footer -->
 <footer class="pt-2" id="footer">
        <div class="footer-content d-flex text-center align-items-center flex-column">
            <h1 class="mt-3">Serejo</h1>
            <p class="mt-1 mb-3 fw-normal">Serejo adalah desa digital di Indonesia <br>dengan smart system terintegrasi</p>
            <ul class="contact mb-6 d-flex fs-4">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom text-center">
            <p class="pb-2 pt-2 mb-0 fs-6">copyright &copy;2021 <span class="text-uppercase">serejo</span>. Designed by <span style="color: #49443A;">SeKDes</span></p>
        </div>
    </footer>
<!-- Akhir Footer -->

    <script src="js/script.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
  </body>
</html>