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
            <h3>Tambah Buku</h3>
        </div>

        <div class="card-body">

            <form action="simpan_buku.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Judul Buku</label>
                    <input type="text" name="judul"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Penerbit</label>
                    <input type="text" name="penerbit"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Tahun Terbit</label>
                    <input type="number" name="tahun_terbit"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok"
                           class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi</label>
                    <textarea name="deskripsi"
                              class="form-control"
                              rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-simpan-pink">
                    Simpan
                </button>

                <a href="daftar_buku.php" class="btn btn-secondary">
                    Kembali
                </a>

            </form>

        </div>
    </div>
</div>
