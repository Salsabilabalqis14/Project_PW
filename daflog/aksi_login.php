<?php
    session_start();
    include('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];
    $op = $_GET['op'];

    if($op=="in"){
        $cek = mysqli_query($koneksi,"SELECT * FROM tabel_user WHERE username ='$username' AND password='$password'");
        if(mysqli_num_rows($cek)==1){

            $c = mysqli_fetch_array($cek);
            $_SESSION['username'] = $c['username'];
            $_SESSION['level'] = $c['level'];

                if($c['level']=="admin"){
                    header("location:../admin.php");
                }
                else if($c['level']=="user"){
                    header("location:../user.php");
                }
        }
        else{
            echo "<script> alert('Username atau Password salah'); window.history.back(); </script>";
        }
    }
    else if($op=="out"){
        unset($_SESSION['username']);
        unset($_SESSION['level']);
        header("location:index.php");
    }


?>