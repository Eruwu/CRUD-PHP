<?php 
include '../koneksi.php';

$i = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM t_user WHERE id='$i'");

header('location:index.php')
?>