<?php
include 'koneksi.php';

$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "INSERT INTO tb_buku
(judul, penerbit, tahun_terbit, stok, deskripsi)
VALUES
('$judul', '$penerbit', '$tahun', '$stok', '$deskripsi')");

if ($query) {
    header("Location: daftar_buku.php");
} else {
    echo "Data gagal disimpan: " . mysqli_error($koneksi);
}
?>
