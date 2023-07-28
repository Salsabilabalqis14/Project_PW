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


<!-- edit data penduduk -->

    <?php

        include ('koneksi.php');

        $no_ktp = $_GET['no_ktp'];
        $show = mysqli_query($koneksi,"SELECT * FROM penduduk where no_ktp = '$no_ktp'");

        if (mysqli_num_rows($show) == 0){
            echo "<script>alert('Data tidak ditemukan');</script>";
        } else {
            $d = mysqli_fetch_assoc($show);
        }

    ?>

<div class="container" style="margin-top:20px">
    <div class="col-lg-12 text-center mb-5" style="margin-top: 8%;">
		<h1>Edit Data Penduduk</h1>
    </div>
    <div class="position-absolute top-50 start-50 translate-middle ">
        <form action="edit_proses_pdk.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="no_ktp" value="<?php echo $no_ktp ?>">
            <input type="hidden" name="pasfoto_lama" value="<?php echo $d['pasfoto']; ?>">
            <table class="tabel" style=" margin-top: 200px;">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <select name="gender" required>
                            <option value="">Pilih</option>
                            <option value="Pria" <?php if($d['gender'] == 'Pria'){echo 'selected';} ?> >Pria</option>
                            <option value="Wanita" <?php if($d['gender'] == 'Wanita'){echo 'selected';} ?>>Wanita</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="alamat" value="<?php echo $d['alamat']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>No Telepon</td>
                    <td>:</td>
                    <td>
                        <input type="number" name="no_telepon" value="<?php echo $d['no_telepon']; ?>" required>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <input type="text" name="status" value="<?php echo $d['status']; ?>" required>
                    </td>
                </tr>
                    <tr>
                    <td>Pasfoto</td>
                    <td>:</td>
                    <td>
                    <img src="../upload/<?php echo $d["pasfoto"]; ?>" width="100" height="90" style="display: block; margin-bottom:10px;">
                        <input type="file" name="pasfoto" style="width:225px; border:none;">
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td></td>
                    <td><input type="submit" name="simpan" class="btn btn-primary" value="Simpan" style="margin-left: 30px;">
					          <a href="penduduk.php" class="btn btn-warning">Kembali</a></td>
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>
  </body>

</html>