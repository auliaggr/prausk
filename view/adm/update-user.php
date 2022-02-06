<?php 
    session_start();
    include 'akses.php';
    include '../../config/koneksi.php';
    include '../../config/function.php';

    $id = $_GET["id"];
    $result = showData("SELECT * FROM users WHERE id = $id")[0];

if( isset($_POST["update"]) ) {
    if( updateUser($_POST) > 0 ) {
        echo "
            <script>
                alert('User berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('User gagal diubah!');
            document.location.href = 'update-user.php';
        </script>
        "; 
    }
}

    
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
    <link rel="stylesheet" href="../../src/css/style.css">
    <title>Update Communitie</title>
</head>
<body>
    <main>
        <section>
            <div class="container py-4 my-4">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <form action="" method="POST">
                            <div class="text-center mb-4">
                                <a href="index.php">
                                    <img src="src/img/icon.svg" alt="" class="mb-3">
                                </a>
                                <h1 class="">UPDATE USER</h1>
                            </div>
                            <input type="hidden" name="id" value="<?= $result["id"]; ?>">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?= $result["nik"];?>" name="nik" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Nik</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?= $result["nama"];?>" name="nama" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Nama</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select form-select-sm mb-3" name="role" aria-label="form-select-lg example">
                                    <option selected><?= $result["role"]; ?></option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                <label for="">Status</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?= $result["email"];?>" name="email" id="floatingInput" placeholder="username">
                                <label for="floatingInput">Email</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?= $result["username"];?>" name="username" id="floatingInput" placeholder="username">
                                <label for="floatingInput">Username</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" value="<?= $result["telp"];?>" name="telp" id="floatingInput" placeholder="username">
                                <label for="floatingInput">No Telepon</label>
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <button type="submit" name="update" class="btn btn-utama px-5">UPDATE</button><br>
                            </div>
                        </form>
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