<?php 

include 'koneksi.php';

function showData($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function deleteUser($data) {
    global $koneksi;
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM users WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function deletePengaduan($data) {
    global $koneksi;
    $id = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function register($data) {
    global $koneksi;
    $nik = strtolower(stripslashes($data["nik"]));
    $nama = strtolower(stripslashes($data["nama"]));
    $email = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $telp = strtolower(stripslashes($data["telp"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);

    // cek email sudah ada atau belum
    $result = mysqli_query($koneksi, "SELECT username FROM users
            WHERE email = '$email'");
    if( mysqli_fetch_assoc($result) ) {
        echo "
            <script>
                alert('Email sudah terdaftar!');
            </script>";
        return false;
    }

    // cek konfirmasi password 
    if( $password !== $password2 ) {
        echo "
            <script>
                alert('Konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // tambahkan user baru ke database
    mysqli_query($koneksi, "INSERT INTO users VALUES('', '2', '$nik', '$nama', '$email', '$username', '$telp', '$password')");
    return mysqli_affected_rows($koneksi);
}

function kirimPengaduan($data) {
    global $koneksi;
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $laporan = htmlspecialchars($data["laporan"]);
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO pengaduan
            VALUES ('', '$nik', '$nama', current_timestamp(), '$laporan', '$gambar', 'Proses')
        ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);

}

function updatePengaduan($data) {
    global $koneksi;
    $tanggapan_id = $data["tanggapan_id"];
    $tanggapan = htmlspecialchars($data["tanggapan"]);
    $id = $data["id"];
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $laporan = htmlspecialchars($data["laporan"]);
    $status = htmlspecialchars($data["status"]);
    $query = "UPDATE pengaduan, tanggapan SET
                pengaduan.nik = '$nik',
                pengaduan.nama = '$nama',
                pengaduan.laporan = '$laporan',
                pengaduan.status = '$status',
                tanggapan.tanggapan = '$tanggapan'
            WHERE pengaduan.id = $id AND tanggapan.id = $tanggapan_id
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);

}

function updateUser($data) {
    global $koneksi;
    $id = $data["id"];
    $role = htmlspecialchars($data["role"]);
    $nik = htmlspecialchars($data["nik"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $username = htmlspecialchars($data["username"]);
    $telp = htmlspecialchars($data["telp"]);
    $query = "UPDATE users SET
                role = '$role',
                nik = '$nik',
                nama = '$nama',
                email = '$email',
                username = '$username',
                telp = '$telp'
            WHERE id = $id
            ";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);

}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if( $error === 4 ) {
        echo "
            <script>
                alert('Pilih Gambar terlebih dahulu');
            </script>
            ";
        return false;
    }

    // cek gambar atau bukan
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'svg'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "
            <script>
                alert('Yang anda upload bukan gambar!');
            </script>
            ";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 4000000 ) {
        echo "
            <script>
                alert('Ukuran gambar terlalu besar');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap di upload
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'src/img/' . $namaFileBaru);
    return $namaFileBaru;

}


?>