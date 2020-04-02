<?php
session_start();
include 'koneksi.php';

if(isset($_POST['btnlogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT id_petugas, nama_petugas FROM petugas WHERE username  = '$username' AND password = '$password'";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows('$koneksi');

    if($count == 1){
        $data_login = mysqli_fetch_assoc($res);

        $_SESSION['id_petugas'] = $data_login['id_petugas'];
        $_SESSION['nama_petugas']= $data_login['nama'];

        header("Location:http://localhost/perpus/index.php");
    }else{
        header("Location:http://localhost/perpus/login/index.php");
    }
}
?>