<?php 
include '../../koneksi.php';

$id = $_POST['id'];
$tl = date('Y-m-d',strtotime($_POST['tl']));
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['c_password'];
$level = $_POST['level'];
$options = [
    'cost' => 11
];
$hashed_password = password_hash($password, PASSWORD_BCRYPT, $options);

if(empty($username && $tl && $password && $level)){
    header("location:register.php?failed=empty");
}elseif($cpassword != $password){
    header("location:register.php?failed=confirm");
}else{
    mysqli_query($koneksi, "INSERT INTO t_user VALUES('$id', '$tl', '$username', '$hashed_password', '$level') ");
    header("location:register.php?data=success");
}

?>