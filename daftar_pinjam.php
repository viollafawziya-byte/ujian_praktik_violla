<?php
include 'koneksi.php';
include 'navbar.php';
?>

<style>
    .pink-card {
        border: 1px solid #f3c5d8;
        border-radius: 12px;
        overflow: hidden;
    }

    .pink-card .card-header {
        background-color: #fce4ec;
        color: #8e4564;
        border-bottom: 1px solid #f3c5d8;
    }

    .tabel-pink thead th {
        background-color: #fce4ec;
        color: #8e4564;
        vertical-align: middle;
    }

    .btn-tambah-pink {
        background-color: #d982a5;
        border-color: #d982a5;
        color: white;
    }

    .btn-edit-pink {
        background-color: #e9a6c1;
        border-color: #e9a6c1;
        color: white;
    }

    .btn-hapus-pink {
        background-color: #c75b83;
        border-color: #c75b83;
        color: white;
    }

    .pink-card .card-body {
        padding: 22px;
    }

    .tabel-pink {
        width: 100%;
        font-size: 15px;
    }

    .tabel-pink th,
    .tabel-pink td {
        padding: 12px;
        vertical-align: middle;
    }
</style>

<?php
$query = mysqli_query($koneksi, "
    SELECT tb_pinjam.*, tb_user.nama, tb_buku.judul
    FROM tb_pinjam
    JOIN tb_user ON tb_pinjam.id_user = tb_user.id_user
    JOIN tb_buku ON tb_pinjam.id_buku = tb_buku.id_buku
    ORDER BY tb_pinjam.id_pinjam DESC
");
?>

<div class="container mt-4 mb-4">
    <div class="card pink-card shadow">
        <div class="card-header">
            <h3>Daftar Peminjaman Buku</h3>
        </div>

        <div class="card-body">

            <a href="form_tambah_pinjam.php" class="btn btn-tambah-pink mb-3">
                + Tambah Peminjaman
            </a>

            <div class="table-responsive">
                <table class="table table-bordered table-striped tabel-pink">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Anggota</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                            <th>Jumlah</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                    <?php
                    $no = 1;

                    if ($query && mysqli_num_rows($query) > 0) {
                        while ($baris = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($baris['nama']) ?></td>
                            <td><?= htmlspecialchars($baris['judul']) ?></td>
                            <td><?= $baris['tgl_pinjam'] ?></td>
                            <td><?= $baris['tgl_kembali'] ?></td>
                            <td><?= $baris['jml_pinjam'] ?></td>
                            <td>
                                <a href="form_edit_pinjam.php?id=<?= $baris['id_pinjam'] ?>"
                                   class="btn btn-edit-pink btn-sm">
                                    Edit
                                </a>

                                <a href="aksi_hapus_pinjam.php?id=<?= $baris['id_pinjam'] ?>"
                                   class="btn btn-hapus-pink btn-sm"
                                   onclick="return confirm('Yakin ingin menghapus data peminjaman ini?')">
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    <?php
                        }
                    } else {
                    ?>
                        <tr>
                            <td colspan="7" class="text-center">
                                Belum ada data peminjaman.
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
