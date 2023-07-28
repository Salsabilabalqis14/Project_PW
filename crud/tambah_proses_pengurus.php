<?php

    if(isset($_POST['tambah'])){
        include_once 'koneksi.php';
        require ('function.php');
        
        $nama = $_POST['nama'];
        $no_ktp = $_POST['no_ktp'];
        $gender = $_POST['gender'];
        $jabatan = $_POST['jabatan'];
        $no_telepon = $_POST['no_telepon'];
        $status = $_POST['status'];

        $pasfoto = upload();
        if (!$pasfoto) {
            return false;
        } 

        $input = mysqli_query($koneksi, "INSERT INTO data_pengurus values ('$nama', '$no_ktp', '$gender', '$jabatan', '$no_telepon', '$status', '$pasfoto')");

        if($input){
            echo "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'pengurus.php';
            </script>";
        } else {
            echo "<script>
            alert('Gagal menambahkan data');
            document.location.href = 'tambah_pengurus.php';
            </script>";
        }
    } else {
        echo "<script>window.history.back()</script>";
    }

?>