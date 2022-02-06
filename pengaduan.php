<?php 

session_start();
if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

include 'config/koneksi.php';
include 'config/function.php';

if(isset($_POST['kirim'])) {
    if(kirimPengaduan($_POST) > 0) {
        echo "<script>
                alert('Pengaduan Terkirim! Terima Kasih');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "<script>
                alert('Pengaduan Gagal Terkirim! Silahkan Coba Lagi');
                document.location.href = 'pengaduan.php';
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
    <link rel="icon" type="image/svg" href="src/img/icon.svg">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Pengaduan Masyarakat</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <main>
        <section>
            <div class="container py-5 my-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <h2 class="mb-4 text-start">FORMULIR PENGADUAN</h2>
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" name="nik" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">NIK</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" name="nama" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" name="laporan" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Laporan</label>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" name="gambar">
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <button type="submit" name="kirim" class="btn btn-utama px-4">KIRIM</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <img src="src/img/ilustrasi-formulir.svg" alt="">
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