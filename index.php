<?php 

    session_start();
    include 'config/koneksi.php';
    include 'config/function.php';

?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
    <link rel="icon" type="image/svg" href="src/img/icon.svg">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Communitie</title>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <main>
        <section>
            <div class="container py-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h2 class="judul">Online Aspiration and Complaint Service</h2>
                        <p class="deskripsi">Submit your report directly to the authorities</p>
                        <a href="pengaduan.php" class="btn btn-utama px-3">Write Your Complaint</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="src/img/ilustrasi.svg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="aboutus" class="container py-5 my-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-8 col-md-6 col-sm-12">
                        <h1 class="text-center py-3 judul">About Us</h1>
                        <p class="text-center deskripsi">Communitie People's Online Aspirations and Complaints Service is a nationally integrated service for delivering all aspirations and complaints from the community</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5 my-5">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="src/img/ilustrasii.svg" alt="" class="py-2">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <p class="deskripsi py-2">Don't forget to always report using the complaint feature on the home page and always follow our developments</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container-fluid py-5" style="background-color: rgb(183, 152, 214);">
                <div class="row py-5 d-flex justify-content-center align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <h1 class="text-center text-white judul">The Number Of Public Reports</h1><br>
                        <h1 class="text-center text-white deksripsi">102770</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container py-5 my-5">
                <div class="row py-5 my-5">
                    <h1 class="text-center mb-5 py-5 judul">Collaboration</h1>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h2 class="judul text-center">100</h2>
                        <p class="text-center">Pemerintah</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h2 class="judul text-center">100</h2>
                        <p class="text-center">Pemerintah</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h2 class="judul text-center">100</h2>
                        <p class="text-center">Pemerintah</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <h2 class="judul text-center">100</h2>
                        <p class="text-center">Pemerintah</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container py-4">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-3 col-md-6 col-12">
                    <h4 class="judul mb-4">Support</h4>
                    <p class="deskripsi">Feedback</p>
                    <p class="deskripsi">Support Center</p>
                    <p class="deskripsi">Privacy Policy</p>
                    <p class="deskripsi">Account</p>
                    <p class="deskripsi">Web Sitemap</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <h4 class="judul mb-4">Information</h4>
                    <p class="deskripsi">Sign Up</p>
                    <p class="deskripsi">Blogs</p>
                    <p class="deskripsi">Tips</p>
                    <p class="deskripsi">About Us</p>
                    <p class="deskripsi">Web Sitemap</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <h4 class="judul mb-4">Company</h4>
                    <p class="deskripsi">Terms Of Use</p>
                    <p class="deskripsi">FAQ</p>
                    <p class="deskripsi">Contact Us</p>
                    <p class="deskripsi">Patrnership</p>
                    <p class="deskripsi">Web Sitemap</p>
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <h4 class="judul mb-4">Get In Touch</h4>
                    <p class="deskripsi">Feedback</p>
                    <p class="deskripsi">Support</p>
                    <p class="deskripsi">Privacy</p>
                    <p class="deskripsi">Account</p>
                    <p class="deskripsi">Web</p>
                </div>
            </div>
            <div class="row py-3">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p class="text-center">&copy; Aulia Anggraeni | 2022</p>
                </div>
            </div>
        </div>
    </footer>

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