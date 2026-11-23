<?php
include 'koneksi.php';

$id = $_POST['id_user'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$kelas = $_POST['kelas'];
$role = $_POST['role'];

$query = mysqli_query($koneksi, "UPDATE tb_user SET
nama='$nama',
email='$email',
pass='$pass',
kelas='$kelas',
role='$role'
WHERE id_user='$id'");

if ($query) {
    header("Location: daftar_anggota.php");
} else {
    echo "Data anggota gagal diupdate: " . mysqli_error($koneksi);
}
?>