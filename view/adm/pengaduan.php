<?php 

    session_start();
    include 'akses.php';
    include '../../config/koneksi.php';
    include '../../config/function.php';

    $join = "SELECT pengaduan.id, pengaduan.nik, pengaduan.nama, pengaduan.tgl_pengaduan, pengaduan.laporan, pengaduan.gambar, pengaduan.status, tanggapan.tanggapan FROM pengaduan LEFT JOIN tanggapan ON tanggapan.pengaduan_id = pengaduan.id"; 
    $result = showData($join);

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
    <title>Pengaduan Communitie</title>
</head>
<body>
<?php include 'navbar.php'; ?>

<main>'
    <section>
        <div class="container">
            <div class="row">
                <h2 class="text-center mb-5">PENGADUAN MASYARAKAT</h2>
                <div class="col">
                    <a href="../../pengaduan.php" class="btn btn-primary mb-3">Tambah Pengaduan</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Nik</th>
                            <th scope="col" class="text-center">Nama</th>
                            <th scope="col" class="text-center">Tanggal Pengaduan</th>
                            <th scope="col" class="text-center">Gambar</th>
                            <th scope="col" class="text-center">Laporan</th>
                            <th scope="col" class="text-center">Tanggapan</th>
                            <th scope="col" class="text-center">Status</th>
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
                                <td class="d-flex justify-content-center align-items-center"><?= $row["tgl_pengaduan"]; ?></td>
                                <td class="text-center"><img src="../../src/img/<?= $row["gambar"]; ?>" alt="" width="50"></td>
                                <td class="text-center">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop-<?= $i; ?>">
                                    Lihat Laporan
                                    </button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="staticBackdrop-<?= $i; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Isi Laporan</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <?= $row["laporan"]; ?>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><?= $row["tanggapan"]; ?></td>
                                <td class="text-center">
                                    <?= $row["status"]; ?>
                                </td>
                                <td class="d-flex justify-content-center align-items-center">
                                    <a href="pengaduan-update.php?id=<?= $row["id"]; ?>" class="btn mx-1 btn-warning">Edit</a>
                                    <a href="delete-pengaduan.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?')" class="btn mx-1 btn-danger">Delete</a>
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