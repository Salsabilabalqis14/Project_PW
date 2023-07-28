<?php
    include "daftar_proses.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="../crud/style.css">
    <link rel="icon" href="logo.png" type="image/icon" >
    <title>Halaman Registrasi</title>
</head>

<style>
    a{
        text-decoration: none;
        color: #16c79a;
        font-size: 20px;
    }
    ul{
        display: flex;
    }
    li{
        list-style: none;
        margin: 0 50px;
    }
</style>

<body>
<div class="container" style="margin-top:20px">
    <div class="col-lg-12 text-center mb-5" style="margin-top: 2%;">
		<h1>Daftar Akun</h1>
        <a href="login.php" class="btn tambah">Kembali</a>
    </div>
</div>
<div class="container" style="margin-top: -30px;">
    <div class="row">
        <div class="col-md-6" >
            <img src="1.png" alt="" width="600px" height="500px">
        </div>
        <div class="col-md-6">
            <form action="daftar.php" method="POST">
                <table class="tabel" style="margin-top : 100px; margin-left:30px;">
                    <tr>
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" placeholder="Username" required></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder="Nama" required></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="pass1" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td>:</td>
                        <td><input type="password" name="pass2" placeholder="Confirm Password" required></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td></td>
                        <td><input type="submit" name="buatakun" value="Buat Akun" class="btn btn-primary">
                        <input type="reset" name="hapus" value="Reset" class="btn btn-warning"></td>
                    </tr>
                    <tr>
                        <td><a href="login.php">Masuk? Klik di sini ya.</a></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>
</html>