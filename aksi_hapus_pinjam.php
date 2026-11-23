<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tb_pinjam WHERE id_pinjam='$id'");

if ($query) {
    header("Location: daftar_pinjam.php");
    exit;
} else {
    echo "Data peminjaman gagal dihapus: " . mysqli_error($koneksi);
}
?>
