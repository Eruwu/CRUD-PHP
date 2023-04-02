<!DOCTYPE html>
<html lang="en">
<?php
include 'koneksi.php';
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login cuy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <form action="login.php" method="POST">
            <div class="card shadow rounded col-md-4 offset-md-4 mt-5 rounded-4">
                <div class="text-center mt-3">
                    <i class="bi bi-person-circle" style="color: #FFFF; font-size: 4rem;"></i>
                <div class="card-body">
                    <?php
                    if (isset($_GET['data'])) {
                        if ($_GET['data'] == 'gagal') {
                            echo '<div class="alert alert-warning text-center col-sm-10 offset-md-1 p-2">login failed</div>';
                        } elseif ($_GET['data'] == 'berhasil') {
                            echo '<div class="alert alert-success text-center col-sm-10 offset-md-1 p-2">logout success</div>';
                        } elseif ($_GET['data'] == 'back') {
                            echo '<div class="alert alert-danger text-center col-sm-10 offset-md-1 p-2">Login please!</div>';
                        }
                    } ;
                    ?>
                    <div class="col-md-10 offset-md-1">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                    <div class="col-md-10 offset-md-1">
                        <input type="password" class="form-control mt-3" name="password" placeholder="Password">
                    </div>
                    <div class="text-center mt-4 pb-4">
                        <button type="submit" class="btn btn-idx text-white col-md-4">LOG IN</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>