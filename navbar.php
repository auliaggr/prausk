<header>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="src/img/icon.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
                <span class="">COMMUNITIE</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#aboutus">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="pengaduan.php">Complaint</a>
                    </li>
                    <?php if(isset($_SESSION['login'])) : ?>
                    <li class="nav-item">
                        <a class="btn btn-utama" aria-current="page" href="logout.php">Logout</a>
                    </li>
                    <?php else : ?>
                    <li class="nav-item">
                        <a class="btn btn-utama mx-2" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-utama" href="register.php">Register</a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
</header>

<form class="d-flex">
                    <ul class="navbar-nav">
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                            <?php if(isset($_SESSION['user'])) : ?>
                            <li>
                                <a class="btn btn-dark" href="logout.php">LOGOUT</a>
                            </li>
                            <?php else : ?>
                            <li>
                                <a class="btn btn-danger" href="login.php">LOGIN</a>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </ul>
                </form>