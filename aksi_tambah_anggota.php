<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$kelas = $_POST['kelas'];
$role = $_POST['role'];

$query = mysqli_query($koneksi, "INSERT INTO tb_user
(nama, email, pass, kelas, role)
VALUES
('$nama', '$email', '$pass', '$kelas', '$role')");

if ($query) {
    header("Location: daftar_anggota.php");
} else {
    echo "Data anggota gagal disimpan: " . mysqli_error($koneksi);
}
?>