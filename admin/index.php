<!DOCTYPE html>
<html lang="en">
<?php
include '../koneksi.php'
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #52438F;">
        <div class="container-fluid">
            <a class="navbar-brand my-1 ms-5 text-white" href="#">Admin</a>
            <li class="d-flex">
                <a class="btn btn-sm btn-danger me-5" onclick="return confirm('Want to logout?')" href="../logout.php">
                    <i class="bi bi-box-arrow-in-left me-1"></i>Log out</a>
            </li>
        </div>
    </nav>
    <?php
    session_start();
    if ($_SESSION['status'] != 'login') {
        header('location:../index.php?data=back');
    }

    ?>
    <div class="container">
        <div class="d-flex justify-content-between mb-4">
            <div class="pt-5">
                <h3>Dashboard</h3>
            </div>
            <div class="pt-5 col-md-5">
                <a href="register/register.php" class="btn btn-sm col-md-4 offset-md-8 text-white" style="background-color: #6F5CC3" ;>
                    <i class="bi bi-person-add me-1"></i>Add User</a>
            </div>
        </div>
        <div class="card mt-1 border-light shadow-sm rounded px-2 py-2 col-md-12 rounded-2" style="max-height: 23rem;">
            <div class="px-4 my-3 table-responsive">
                <table class="table table-borderless align-middle">
                    <thead class="t-row text-muted opacity-50">
                        <tr style="position:sticky;">
                            <th class="col-md-1">No.</th>
                            <th class="col-md-3">Date</th>
                            <th class="col-md-3">Username</th>
                            <th class="col-md-3">Level</th>
                            <th class="col-md-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                            $data = mysqli_query($koneksi, "SELECT * FROM t_user");
                            $number = 1;
                            while ($d = mysqli_fetch_array($data)) {
                            ?>
                                <tr>
                                    <td><?php echo $number++ ?></td>
                                    <td><?php echo $d['date'] ?></td>
                                    <td><?php echo $d['username'] ?></td>
                                    <td><?php echo $d['level'] ?></td>
                                    <td>
                                        <a href="edit/edit-user.php?id=<?php echo $d['id'] ?>" class="btn btn-sm text-white" style="background-color: #6F5CC3">
                                            <i class="bi bi-pencil"></i></a>
                                        <a href="delete-act.php?id=<?php echo $d['id'] ?>" onclick="return confirm('Delete <?php echo $d['username'] ?>?')" class="btn btn-sm btn-danger">
                                            <i class="bi bi-trash"></i></a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
    <script src="../bootstrap/js/bootstrap.js"></script>
</body>

</html>