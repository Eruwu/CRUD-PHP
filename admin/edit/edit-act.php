<?php
include '../../koneksi.php'; 

$i = $_POST['id'];
$u = $_POST['username'];
$p = $_POST['password'];
$l = $_POST['level'];

mysqli_query($koneksi, "UPDATE t_user SET username='$u', password='$p', level='$l' WHERE id='$i'");

header('location:edit-user.php');
?>