<?php 

include '../../config/koneksi.php';
include '../../config/function.php';

$id = $_GET['id'];
if(deleteUser($_POST) > 0) {
    echo "<script>
            alert('Pengaduan berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "<script>
            alert('Pengaduan gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}

?>