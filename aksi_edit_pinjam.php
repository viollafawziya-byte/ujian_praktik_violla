<?php
include 'koneksi.php';

$id = $_POST['id_pinjam'];
$id_user = $_POST['id_user'];
$id_buku = $_POST['id_buku'];
$tgl_pinjam = $_POST['tgl_pinjam'];
$tgl_kembali = $_POST['tgl_kembali'];
$jml_pinjam = $_POST['jml_pinjam'];

$query = mysqli_query($koneksi, "UPDATE tb_pinjam SET
id_user='$id_user',
id_buku='$id_buku',
tgl_pinjam='$tgl_pinjam',
tgl_kembali='$tgl_kembali',
jml_pinjam='$jml_pinjam'
WHERE id_pinjam='$id'");

if ($query) {
    header("Location: daftar_pinjam.php");
} else {
    echo "Data peminjaman gagal diupdate: " . mysqli_error($koneksi);
}
?>
