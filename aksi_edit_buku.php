<?php
include 'koneksi.php';

$id = $_POST['id_buku'];
$judul = $_POST['judul'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$stok = $_POST['stok'];
$deskripsi = $_POST['deskripsi'];

$query = mysqli_query($koneksi, "UPDATE tb_buku SET
judul='$judul',
penerbit='$penerbit',
tahun_terbit='$tahun',
stok='$stok',
deskripsi='$deskripsi'
WHERE id_buku='$id'");

if ($query) {
    header("Location: daftar_buku.php");
  echo "Data berhasil diubah:";
} else {
    echo "Data gagal diupdate: " . mysqli_error($koneksi);
}
?>
