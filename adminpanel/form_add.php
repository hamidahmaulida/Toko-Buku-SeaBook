<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/Icon.png">
</head>
<body>
    <?php
    include "../layout/simple_header.php";
    ?>
    <br>
    <div class="container mt-5 page-title">
        <h1 class="mt-4 mb-4">Tambah Buku</h1>
        <form method="POST" action="save_action.php" enctype="multipart/form-data" class="mb-3">
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Pengarang</label>
                <input type="text" class="form-control" id="penulis" name="penulis" required>
            </div>

            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required>
            </div>

            <div class="mb-3">
                <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                <input type="date" class="form-control" id="tanggal_terbit" name="tanggal_terbit" required>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required>
            </div>

            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa</label>
                <input type="text" class="form-control" id="bahasa" name="bahasa" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required>
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"show_data.php></textarea>
            </div>
            
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="show_data.php" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</body>
</html>