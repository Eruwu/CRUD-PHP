<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi, "select * from t_user where username='$username'");

$cek = mysqli_num_rows($data);

if($cek>0){ 
session_start();
$row = mysqli_fetch_assoc($data);
password_verify($password, $row['password']);
    $_SESSION['username'] = $username;
    $_SESSION['status'] = 'login';
    header("location:admin/index.php");
 } else {
    header("location:index.php?data=gagal");
 }
