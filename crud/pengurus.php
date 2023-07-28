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
    <div class="col-lg-12 text-center mb-5" style="margin-top: 10%;">
		<h1>DATA PENGURUS</h1>
    </div>
    <a href="tambah_pengurus.php" class="btn tambah">Tambah Data</a>

    <form action="" method="post" style="float: right;">
      <input type="text" name="keyword" size="30" autofocus>
      <button type="submit" name="cari" class="btn btn-warning">Cari</button>
    </form>	

    <table class="table table-striped" style="text-align: center; margin-top:20px;">

        <thead class="table-success">
            <th>No.</th>
            <th>Pasfoto</th>
            <th>Nama</th>
            <th>No KTP</th>
            <th>Gender</th>
            <th>Jabatan</th>
            <th>No Telepon</th>
            <th>Status</th>
            <th>Opsi</th>
        </thead>

     <!-- menampilkan data -->

        <?php
            include_once 'koneksi.php';

            $no = 1;
            $data = mysqli_query($koneksi, "SELECT * FROM data_pengurus");

            if( isset($_POST["cari"]) ) {
              $data = mysqli_query($koneksi, "SELECT * FROM data_pengurus where no_ktp LIKE '%".$_POST['keyword']."%' or nama LIKE '%".$_POST['keyword']."%'");
            } 

            if(mysqli_num_rows($data)){
            while ($d=mysqli_fetch_array($data)){
        ?>

            <tr>
                <td><?php echo $no++; ?></td>
                <td><img src="../upload/<?php echo $d["pasfoto"]; ?>" width="90" height="90"></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['no_ktp']; ?></td>
                <td><?php echo $d['gender']; ?></td>
                <td><?php echo $d['jabatan']; ?></td>
                <td><?php echo $d['no_telepon']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td>
                    <a href="edit_pengurus.php ?no_ktp=<?php echo $d['no_ktp'];?>" class="btn btn-secondary btn-sm">Edit</a>
                    <a href="hapus_pengurus.php ?no_ktp=<?php echo $d['no_ktp'];?>" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
            <?php
                } } else {
                  echo '<tr><td colspan="8">Data tidak ada</td></tr>';
                }

            ?>
		</table>
		</div>	
	</div>


  </body>
</html>