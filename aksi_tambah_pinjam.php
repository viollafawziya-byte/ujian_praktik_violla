<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id_user = $_POST['id_user'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $jml_pinjam = $_POST['jml_pinjam'];

    $query = mysqli_query($koneksi, "INSERT INTO tb_pinjam
    (id_user, id_buku, tgl_pinjam, tgl_kembali, jml_pinjam)
    VALUES
    ('$id_user', '$id_buku', '$tgl_pinjam', '$tgl_kembali', '$jml_pinjam')");

    if ($query) {
        header("Location: daftar_pinjam.php");
        exit;
    } else {
        echo "Data gagal disimpan: " . mysqli_error($koneksi);
    }

} else {
    echo "Form belum mengirim data dengan benar.";
}
?>
