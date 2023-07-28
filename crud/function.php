<?php
function upload() {
        $namaFile = $_FILES['pasfoto']['name'];
        $ukuranFile = $_FILES['pasfoto']['size'];
        $tmpName = $_FILES['pasfoto']['tmp_name'];

        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
            echo "<script>
                        alert('Yang anda upload bukan gambar!'); window.history.back();
                    </script>";
            return false;
        }

        if($ukuranFile > 5000000) {
            echo "<script>
                        alert('ukuran gambar terlalu besar'); window.history.back();
                    </script>";
            return false;
        }

        $namaFileBaru = uniqid();
        $namaFileBaru.='.';
        $namaFileBaru.= $ekstensiGambar;

        move_uploaded_file($tmpName, '../upload/'. $namaFileBaru);
        return $namaFileBaru;
    }
?>