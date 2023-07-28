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
    <link rel="stylesheet" href="slider/lightslider.css"/>

    <script type="text/javascript" src="slider/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="slider/lightslider.js"></script>
    <link rel="icon" href= "img/logo.png" type="image/icon" >
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
              <a class="nav-link active" href="#aboutus">Tentang</a>
              <a class="nav-link active" href="#team">Pengurus</a>
              <a class="nav-link active" href="#footer">Kontak</a>
              <a class="garis" ></a>
              <a href="daflog/login.php" class="btn text-light rounded" style="background: #007965;">Login</a>
            </div>
          </div>
        </div>
      </nav>

    <!-- Akhir Navbar -->

    <!-- Awal Carousel -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="img/bg4.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block ps-6 pe-6">
            <h5 class="text-uppercase fs-1 fw-bold">Serejo</h5>
            <p class="fs-2">Desa dengan penuh kehangatan dan kenyamanan.</p>
            <a href="daflog/daftar.php" class="btn text-uppercase mt-3 text-light rounded" style="width: 160px;">Regritrasi</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bg2.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block ps-6 pe-6">
            <h5 class="text-uppercase fs-1 fw-bold">Sawah</h5>
            <p class="fs-2">Pesona indah Desa Serejo.</p>
            <a href="daflog/daftar.php" class="btn text-uppercase mt-3 text-light rounded" style="width: 160px;">Regritrasi</a>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/bg-3.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block ps-6 pe-6">
            <h5 class="text-uppercase fs-1 fw-bold ">UMKM</h5>
            <p class="fs-2 ">Pemberdayaan UMKM masyarakat Desa Serejo.</p>
            <a href="daflog/daftar.php" class="btn text-uppercase mt-3 text-light rounded" style="width: 160px;">Regritrasi</a>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    <!-- Akhir Carousel -->

    <!-- Awal About Us -->

        <div id="aboutus" class="about d-flex align-items-center">
            <div class="container">
            <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-text">
                            <h2><span>Serejo</span><br>Fitur Platform Desa</h2>
                            <p id="ket">SEREJO merupakan platform tata kelola desa yang menawarkan sejumlah layanan seperti sistem informasi pembangunan desa, administrasi, kependudukan, pelayanan publik, anggaran, dan berbagai layanan lainnya.</p>
                            <a href="" class="btn text-uppercase text-light rounded">Login</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                    <img src="img/bg-2.png" alt="" height="400" width="480">
                    </div>
                </div>
            </div>
        </div> 


    <!-- Akhir About Us -->


    <!-- Awal Team -->

    <section  id="team" class="team">
        <div class="container text-center">
          <div class="row mb-5">
            <div class="col">
              <h1 class="text-uppercase">Anggota Pengurus Desa</h1>
              <p>Berikut adalah anggota kepengurusan Desa Sendang Rejo Periode 2021-2026</p>

       
                <!--slider------------------->
                <ul id="autoWidth" class="cs-hidden">
                <!--1------------------------------>
                    <li class="item-a">
                        <div class="box">
                            <img src="img/ag-1.jpg" class="model">
                            <div class="details">
                                <h3 >Joko Wiharjo</h3>
                                <h5>Kepala Desa</h5>
                                <p>Wajah baru<br>desa </p>
                                <ul class="sosmed">
                                    <li class="sosmed-item"><i class="fa fa-facebook"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-instagram"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!--2------------------------------>
                    <li class="item-a">
                        <div class="box">
                            <img src="img/ag-2.jpg" class="model">
                            <div class="details">
                                <h3>Wiranto Andi</h3>
                                <h5>Sekretasis Desa</h5>
                                <p>Menuju desa<br>digital </p>
                                <ul class="sosmed">
                                    <li class="sosmed-item"><i class="fa fa-facebook"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-instagram"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!--3------------------------------>
                    <li class="item-a">
                        <div class="box">
                            <img src="img/ag-3.jpg" class="model">
                            <div class="details">
                                <h3>Didi Siregar</h3>
                                <h5>Bendahara Desa</h5>
                                <p>Transaksi lebih <br>mudah </p>
                                <ul class="sosmed">
                                    <li class="sosmed-item"><i class="fa fa-facebook"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-instagram"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </li>

                    <!--4------------------------------>
                    <li class="item-a">
                        <div class="box">
                            <img src="img/ag-4.jpg" class="model">
                            <div class="details">
                                <h3>Anton Agung</h3>
                                <h5>Humas</h5>
                                <p>Informasi mudah <br>didapat</p>
                                <ul class="sosmed">
                                    <li class="sosmed-item"><i class="fa fa-facebook"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-instagram"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </li>


                    <!--5------------------------------>
                    <li class="item-a">
                        <div class="box">
                            <img src="img/ag-5.jpg" class="model">
                            <div class="details">
                                <h3>Tegar Herman</h3>
                                <h5>Dep. Keamanan Desa</h5>
                                <p>Desa aman <br>hati tenang</p>
                                <ul class="sosmed">
                                    <li class="sosmed-item"><i class="fa fa-facebook"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-instagram"></i></li>
                                    <li class="sosmed-item"><i class="fa fa-twitter"></i></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
         
        </div>
    </div>
</section>

 <!-- Akhir Team -->



 <!-- Awal Peta -->

   <section  id="map" class="map text-center">
    <div class="container my-3 py-5 text-center">
      <div class="row">
        <div class="col">
          <h1 class="text-uppercase">Lokasi Keberadaan Desa</h1>
          <p >Sendang Rejo, Kec. Binjai Utara, Kota Binjai, <br>Sumatera Utara 20746</p>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31853.4419298553!2d98.45490380551584!3d3.6601246079336343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3030d59cd8807e5f%3A0xaa2d1829af400a5c!2sSendang%20Rejo%2C%20Binjai%2C%20Kabupaten%20Langkat%2C%20Sumatera%20Utara!5e0!3m2!1sid!2sid!4v1623472598007!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>
  

 <!-- Akhir Peta -->


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