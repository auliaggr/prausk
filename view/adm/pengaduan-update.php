<?php 

session_start();

include 'akses.php';
include '../../config/function.php';
include '../../config/koneksi.php';

$id = $_GET["id"];
$join = "SELECT pengaduan.id, pengaduan.nik, pengaduan.nama, pengaduan.tgl_pengaduan, pengaduan.laporan, pengaduan.gambar, pengaduan.status, tanggapan.tanggapan, tanggapan.id as tanggapan_id FROM pengaduan LEFT JOIN tanggapan ON tanggapan.pengaduan_id = pengaduan.id WHERE pengaduan.id = $id"; 
$result = showData($join)[0];

if( isset($_POST["update"]) ) {
    if( updatePengaduan($_POST) > 0 ) {
        echo "
            <script>
                alert('Pengaduan berhasil diubah!');
                document.location.href = 'pengaduan.php';
            </script>
        ";
    } else {
        echo "
        <script>
            alert('Pengaduan gagal diubah!');
            document.location.href = 'pengaduan-update.php';
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
    <title>Update Pengaduan</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <main>
        <section>
            <div class="container py-4 my-4">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <form action="" method="POST">
                            <h2 class="mb-4 text-start">FORMULIR PENGADUAN</h2>
                            <input type="hidden" name="id" value="<?= $result["id"] ?>">
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" value="<?= $result["nik"]; ?>" name="nik" id="floatingInput" placeholder="nik">
                                <label for="floatingInput">NIK</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" value="<?= $result["nama"]; ?>" name="nama" id="floatingInput" placeholder="nik">
                                <label for="floatingInput">Nama</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="text" required class="form-control" value="<?= $result["laporan"]; ?>" name="laporan" id="floatingInput" placeholder="loremipsum">
                                <label for="floatingInput">Laporan</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="hidden" name="tanggapan_id" value="<?= $result["tanggapan_id"]; ?>">
                                <input type="text" required class="form-control" value="<?= $result["tanggapan"]; ?>" name="tanggapan" id="floatingInput" placeholder="loremipsum">
                                <label for="floatingInput">Tanggapan</label>
                            </div>
                            <div class="form-floating">
                                <select class="form-select form-select-sm mb-3" name="status" aria-label="form-select-lg example">
                                    <option selected><?= $result["status"]; ?></option>
                                    <option value="Proses">Proses</option>
                                    <option value="Selesai">Selesai</option>
                                </select>
                                <label for="">Status</label>
                            </div>
                            <div class="mb-3">
                                <input type="file" class="form-control" value="" name="gambar">
                            </div>
                            <div class="d-flex justify-content-center align-items-center">
                                <button type="submit" name="update" class="btn btn-utama px-4">UPDATE</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center align-items-center">
                        <img src="../../src/img/ilustrasi-formulir.svg" alt="">
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