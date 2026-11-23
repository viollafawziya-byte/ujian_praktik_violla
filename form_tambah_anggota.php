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
            <h3>Tambah Anggota</h3>
        </div>

        <div class="card-body">
            <form action="aksi_tambah_anggota.php" method="POST">

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control" required>
                </div>

                <input type="hidden" name="role" value="anggota">

                <button type="submit" class="btn btn-simpan-pink">Simpan</button>
                <a href="daftar_anggota.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>