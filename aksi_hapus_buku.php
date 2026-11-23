<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tb_buku WHERE id_buku='$id'");

if ($query) {
    header("Location: daftar_buku.php");
} else {
    echo "Data gagal dihapus: " . mysqli_error($koneksi);
}
?>