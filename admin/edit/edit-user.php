<!DOCTYPE html>
<html lang="en">
<?php
include '../../koneksi.php';
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
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <?php
        $i = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM t_user where id='$i'");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <form action="edit-act.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                <div class="card shadow rounded col-md-4 offset-md-4 mt-5 rounded-4">
                    <div class="text-center mt-3">
                        <i class="bi bi-person-circle" style="color: #FFFF; font-size: 4rem;"></i>
                        <div class="card-body">
                            <div class="col-md-10 offset-md-1">
                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $d['username']; ?>">
                            </div>
                            <div class="col-md-10 offset-md-1 mt-3">
                                <select class="form-select" style="background-color: #E8E8E8;" name="level" aria-label="Default select example">
                                    <option selected disabled>Level</option>
                                    <option value="1">Admin</option>
                                    <option value="2">User</option>
                                </select>
                            </div>
                            <div class="col-md-10 offset-md-1 mt-3">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="text-center mt-4 pb-4 d-grid gap-2">
                                <button type="submit" class="btn text-white col-4 mx-auto">UPDATE</button>
                                <a href="../index.php" class="mt-2 link-secondary">Go back</a>
                            </div>
                        </div>
                    </div>
            </form>
        <?php
        }
        ?>
    </div>
</body>

</html>