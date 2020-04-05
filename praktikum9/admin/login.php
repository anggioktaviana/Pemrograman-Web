<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'connect.php';

// menangkap data yang dikirim dari form
$user     = $_POST['user'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($connect,"SELECT * from login where user='$user' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
    $_SESSION['user'] = $user;
    $_SESSION['status'] = "login";
    header("location:cetak.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>