<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sistem Informasi Perpustakaan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        
        .navbar-pink {
            background-color: #fce4ec;
        }

        .navbar-brand {
            color: #8e4564 !important;
            font-weight: bold;
        }

        

        .nav-link:hover {
            color: #c75b83 !important;
        }
    </style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-pink shadow-sm">
    <div class="container">

        <a class="navbar-brand" href="daftar_buku.php">
             Perpustakaan
        </a>

        <button class="navbar-toggler" type="button"
            data-bs-toggle="collapse"
            data-bs-target="#menuNavbar"
            aria-controls="menuNavbar"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menuNavbar">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="daftar_buku.php">
                        Buku
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="daftar_anggota.php">
                        Anggota
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="daftar_pinjam.php">
                        Peminjaman
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
