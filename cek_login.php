<?php
require_once('asset/koneksi.php');
// aktifkan start session
session_start();
// menangklap data yg di kirim form
    $cabang = $_POST['nama_cabang'];
    $password = $_POST['password'];
    // seleksi data user dengan email dan password  yang sesuai dengan database
    $query = "SELECT * FROM users WHERE 'nama_cabang'=$cabang, 'password'=$password";
    $data = mysqli_query($koneksi, $query);
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['nama_cabang'] = $cabang;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");
}


?>