<?php
include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM tb_user WHERE id_user='$id' AND role='anggota'");

if ($query) {
    header("Location: daftar_anggota.php");
} else {
    echo "Data anggota gagal dihapus: " . mysqli_error($koneksi);
}
?>
