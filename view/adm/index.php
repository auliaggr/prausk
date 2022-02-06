<?php 

session_start();
include 'akses.php';
include '../../config/koneksi.php';
include '../../config/function.php';

$result = showData("SELECT * FROM users");

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" type="image/svg" href="../../src/img/icon.svg">
    <title>Communitie</title>
</head>
<body>
    
<?php include 'navbar.php'; ?>

<main>'
    <section>
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-5">PENGGUNA</h2>
                <div class="col">
                    <a href="../../register.php" class="btn btn-primary mb-3">Tambah User</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Nik</th>
                            <th scope="col" class="text-center">Nama</th>
                            <th scope="col" class="text-center">Role</th>
                            <th scope="col" class="text-center">Email</th>
                            <th scope="col" class="text-center">Username</th>
                            <th scope="col" class="text-center">Telepon</th>
                            <th scope="col" class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($result as $row) : ?>
                            <tr>
                                <th class="text-center"><?= $i; ?></th>
                                <td class="text-center"><?= $row["nik"]; ?></td>
                                <td class="text-center"><?= $row["nama"]; ?></td>
                                <td class="text-center"><?= $row["role"]; ?></td>
                                <td class="text-center"><?= $row["email"]; ?></td>
                                <td class="text-center"><?= $row["username"]; ?></td>
                                <td class="text-center"><?= $row["telp"]; ?></td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="update-user.php?id=<?= $row["id"]; ?>" class="btn mx-1 btn-warning">Edit</a>
                                    <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?')" class="btn mx-1 btn-danger">Delete</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                        </table>
                </div>
            </div>
        </div>
    </section>
</main>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
</html>