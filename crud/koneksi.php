<?php

    $koneksi = mysqli_connect('localhost', 'root', '', 'desa');

    if (!$koneksi){

        echo 'Please check Your Database Connection';
    }


?>