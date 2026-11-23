<?php
include 'koneksi.php';
include 'navbar.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_buku WHERE id_buku='$id'");
$data = mysqli_fetch_assoc($query);
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
</style>

<div class="container mt-4 mb-4">

    <div class="card pink-card shadow">

        <div class="card-header">
            <h3>Edit Buku</h3>
        </div>

        <div class="card-body">

            <form action="aksi_edit_buku.php" method="POST">

                <input type="hidden" name="id_buku"
                       value="<?= $data['id_buku'] ?>">

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" name="judul"
                           class="form-control"
                           value="<?= htmlspecialchars($data['judul']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" name="penerbit"
                           class="form-control"
                           value="<?= htmlspecialchars($data['penerbit']) ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit"
                           class="form-control"
                           value="<?= $data['tahun_terbit'] ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok"
                           class="form-control"
                           value="<?= $data['stok'] ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              class="form-control"
                              rows="3" required><?= htmlspecialchars($data['deskripsi']) ?></textarea>
                </div>

                <button type="submit" class="btn btn-simpan-pink">
                    Update
                </button>

                <a href="daftar_buku.php" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</div>
