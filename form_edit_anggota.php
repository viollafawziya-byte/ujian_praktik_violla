<?php
include 'koneksi.php';
include 'navbar.php';

$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM tb_user WHERE id_user='$id'");
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
</style>

<div class="container mt-4 mb-4">
    <div class="card pink-card shadow">
        <div class="card-header">
            <h3>Edit Anggota</h3>
        </div>

        <div class="card-body">
            <form action="aksi_edit_anggota.php" method="POST">

                <input type="hidden" name="id_user"
                       value="<?= $data['id_user'] ?>">

                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" name="nama" class="form-control"
                           value="<?= htmlspecialchars($data['nama']) ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control"
                           value="<?= htmlspecialchars($data['email']) ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="text" name="pass" class="form-control"
                           value="<?= htmlspecialchars($data['pass']) ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control"
                           value="<?= htmlspecialchars($data['kelas']) ?>" required>
                </div>

                <input type="hidden" name="role" value="anggota">

                <button type="submit" class="btn btn-simpan-pink">Update</button>
                <a href="daftar_anggota.php" class="btn btn-secondary">Kembali</a>

            </form>
        </div>
    </div>
</div>