<?php 

include '../../config/koneksi.php';
include '../../config/function.php';

$id = $_GET['id'];
if(deletePengaduan($_POST) > 0) {
    echo "<script>
            alert('Pengaduan berhasil dihapus!');
            document.location.href = 'pengaduan.php';
        </script>
    ";
} else {
    echo "<script>
            alert('Pengaduan gagal dihapus!');
            document.location.href = 'pengaduan-update.php';
        </script>
    ";
}


?>