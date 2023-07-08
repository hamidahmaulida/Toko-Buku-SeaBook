<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <?php
    include "../css/link.php";
    ?>
</head>
<body>
    <?php
    include "../layout/simple_header.php";
    ?>
    <br>
    <div class="container mt-5">
        <?php // Koneksi ke database
        include "../lib/connection.php";
        // Mendapatkan data buku berdasarkan id_buku
        $data = array(); // Define empty array
        if (isset($_GET['id'])) {
            $id_buku = $_GET['id'];
            $sql =  "SELECT * FROM buku WHERE id_buku='$id_buku'";
            $result = mysqli_query($link, $sql);
            $data = mysqli_fetch_assoc($result);
        }
        ?>
        <h1 class="mt-4 mb-4 text-info-emphasis">Edit Buku - ID: <?php echo $id_buku; ?></h1>
        <form method="POST" action="edit_action.php" enctype="multipart/form-data" class="mb-3">
            <input type="hidden" name="id_buku" value="<?php echo $id_buku; ?>">
            <div class="mb-3">
                <label for="judul_buku" class="form-label">Judul Buku</label>
                <input type="text" class="form-control" id="judul_buku" name="judul_buku" required value="<?php echo $data['judul_buku']; ?>">
            </div>

            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis</label>
                <input type="text" class="form-control" id="penulis" name="penulis" required value="<?php echo $data['penulis']; ?>">
            </div>
            <div class="mb-3">
                <label for="penerbit" class="form-label">Penerbit</label>
                <input type="text" class="form-control" id="penerbit" name="penerbit" required value="<?php echo $data['penerbit']; ?>">
            </div>

            <div class="mb-3">
                <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                <input type="date" class="form-control" id="tanggal_terbit" name="tanggal_terbit" required value="<?php echo $data['tanggal_terbit']; ?>">
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <input type="text" class="form-control" id="kategori" name="kategori" required value="<?php echo $data['kategori']; ?>">
            </div>

            <div class="mb-3">
                <label for="bahasa" class="form-label">Bahasa</label>
                <input type="text" class="form-control" id="bahasa" name="bahasa" required value="<?php echo $data['bahasa']; ?>">
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga" required value="<?php echo $data['harga']; ?>">
            </div>

            <div class="mb-3">
                <label for="stok_buku" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok_buku" name="stok_buku" required value="<?php echo $data['stok_buku']; ?>">
            </div>

            <div class="mb-3">
            <label for="deskripsi" class="form-label">deskripsi</label>
            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3"><?php echo $data['deskripsi']; ?></textarea>
            </div>
            
            <div class="mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" value="<?php echo $data['gambar']; ?>">
            </div>
            

            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
            <a href="show_data.php" class="btn btn-secondary">Kembali</a>
        </form>
        <br>
    </div>
</body>
</html>