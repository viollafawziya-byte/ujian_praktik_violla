<?php
include 'koneksi.php';
include 'navbar.php';

// Mengambil data anggota
$anggota = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE role='anggota'");

// Mengambil data buku
$buku = mysqli_query($koneksi, "SELECT * FROM tb_buku");
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
    }

    .btn-simpan-pink {
        background-color: #d982a5;
        border-color: #d982a5;
        color: white;
    }

    .btn-simpan-pink:hover {
        background-color: #c75b83;
        color: white;
    }

    .pink-card .card-body {
        padding: 22px;
    }
</style>

<div class="container mt-4 mb-4">
    <div class="card pink-card shadow">
        <div class="card-header">
            <h3>Tambah Peminjaman Buku</h3>
        </div>

        <div class="card-body">
            <form action="aksi_tambah_pinjam.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Nama Anggota</label>
                    <select name="id_user" class="form-control" required>
                        <option value="">-- Pilih Anggota --</option>

                        <?php while ($data = mysqli_fetch_assoc($anggota)) { ?>
                            <option value="<?= $data['id_user'] ?>">
                                <?= htmlspecialchars($data['nama']) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <select name="id_buku" class="form-control" required>
                        <option value="">-- Pilih Buku --</option>

                        <?php while ($data = mysqli_fetch_assoc($buku)) { ?>
                            <option value="<?= $data['id_buku'] ?>">
                                <?= htmlspecialchars($data['judul']) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah Pinjam</label>
                    <input type="number" name="jml_pinjam" class="form-control" min="1" required>
                </div>

                <button type="submit" class="btn btn-simpan-pink">
                    Simpan
                </button>

                <a href="daftar_pinjam.php" class="btn btn-secondary">
                    Kembali
                </a>

            </form>
        </div>
    </div>
</div>
