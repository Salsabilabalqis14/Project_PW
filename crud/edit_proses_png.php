<?php

if (isset($_POST['simpan'])){
    include ('koneksi.php');
    require ('function.php');

    $no_ktp   = $_POST['no_ktp'];
    $nama     = $_POST['nama'];
    $gender   = $_POST['gender'];
    $jabatan   = $_POST['jabatan'];
    $no_telepon  = $_POST['no_telepon'];
    $status     = $_POST['status'];
    $pasfoto_lama = $_POST['pasfoto_lama'];

    if($_FILES['pasfoto']['error'] === 4){
        $pasfoto = $pasfoto_lama;
    } else {
        $pasfoto = upload(); 
    }

    $update  = mysqli_query($koneksi, "UPDATE data_pengurus set
    
    nama   = '$nama',
    gender = '$gender',
    jabatan  = '$jabatan',
    no_telepon = '$no_telepon',
    status = '$status',
    pasfoto = '$pasfoto'

    where no_ktp = '$no_ktp'");

    if ($update){
        echo "<script>
        alert('Data berhasil diedit');
        document.location.href = 'pengurus.php';
        </script>";
    } else {
        echo "<script>
        alert('Gagal mengedit data');
        document.location.href = 'edit_pengurus.php ?no_ktp = ".$no_ktp."';
        </script>";
    }


    } else {
        echo '<script>window.history.back()</script>';
    }


?>