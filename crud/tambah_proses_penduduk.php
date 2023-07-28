<?php

    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        require ('function.php');

        $nama = $_POST['nama'];
        $no_ktp = $_POST['no_ktp'];
        $gender = $_POST['gender'];
        $alamat = $_POST['alamat'];
        $no_telepon = $_POST['no_telepon'];
        $status = $_POST['status'];

        $pasfoto = upload();
        if (!$pasfoto) {
            return false;
        } 

        $input = mysqli_query($koneksi, "INSERT INTO penduduk values ('$nama', '$no_ktp', '$gender', '$alamat', '$no_telepon', '$status', '$pasfoto')");

        if($input){
            echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'penduduk.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal menambahkan data');
            document.location.href = 'tambah_penduduk.php';
            </script>";
        }
    } else {
        echo "<script>window.history.back()</script>";
    }

?>