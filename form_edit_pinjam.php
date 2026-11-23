<?php
include 'koneksi.php';
include 'navbar.php';

$id = $_GET['id'];

// Mengambil data peminjaman
$query = mysqli_query($koneksi, "SELECT * FROM tb_pinjam WHERE id_pinjam='$id'");
$data = mysqli_fetch_assoc($query);

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
</style>

<div class="container mt-4 mb-4">
    <div class="card pink-card shadow">
        <div class="card-header">
            <h3>Edit Peminjaman Buku</h3>
        </div>

        <div class="card-body">
            <form action="aksi_edit_pinjam.php" method="POST">

                <input type="hidden" name="id_pinjam"
                       value="<?= $data['id_pinjam'] ?>">

                <div class="mb-3">
                    <label class="form-label">Nama Anggota</label>
                    <select name="id_user" class="form-control" required>
                        <?php while ($a = mysqli_fetch_assoc($anggota)) { ?>
                            <option value="<?= $a['id_user'] ?>"
                                <?= $a['id_user'] == $data['id_user'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($a['nama']) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <select name="id_buku" class="form-control" required>
                        <?php while ($b = mysqli_fetch_assoc($buku)) { ?>
                            <option value="<?= $b['id_buku'] ?>"
                                <?= $b['id_buku'] == $data['id_buku'] ? 'selected' : '' ?>>
                                <?= htmlspecialchars($b['judul']) ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Pinjam</label>
                    <input type="date" name="tgl_pinjam"
                           class="form-control"
                           value="<?= $data['tgl_pinjam'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tanggal Kembali</label>
                    <input type="date" name="tgl_kembali"
                           class="form-control"
                           value="<?= $data['tgl_kembali'] ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Jumlah Pinjam</label>
                    <input type="number" name="jml_pinjam"
                           class="form-control"
                           value="<?= $data['jml_pinjam'] ?>" min="1" required>
                </div>

                <button type="submit" class="btn btn-simpan-pink">
                    Update
                </button>

                <a href="daftar_pinjam.php" class="btn btn-secondary">
                    Kembali
                </a>

            </form>
        </div>
    </div>
</div>
