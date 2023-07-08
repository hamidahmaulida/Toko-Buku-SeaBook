<?php
    if (isset($_POST['judul_buku'])) {
        include "../lib/connection.php";
        // Mendapatkan data dari form

        $id_buku = $_POST['id_buku'];
        $gambar = $_FILES['gambar'];
        $filename = $_FILES["gambar"]["name"];
        $tempname = $_FILES["gambar"]["tmp_name"];
        $folder = "../assets/img/buku/".$filename;
        move_uploaded_file($tempname, $folder);
        $judul_buku = $_POST['judul_buku'];
        $penulis = $_POST['penulis'];
        $penerbit = $_POST['penerbit'];
        $tanggal_terbit = $_POST['tanggal_terbit'];
        $kategori = $_POST['kategori'];
        $bahasa = $_POST['bahasa'];
        $harga = $_POST['harga'];
        $stok_buku = $_POST['stok_buku'];
        $deskripsi = $_POST['deskripsi'];

        // Query tambah data mahasiswa
        $sql = "INSERT INTO buku (id_buku, gambar, judul_buku, penulis, penerbit, tanggal_terbit, kategori, bahasa, harga, stok_buku, deskripsi) VALUES ('$id_buku', '$folder', '$judul_buku','$penulis', '$penerbit', '$tanggal_terbit', '$kategori', '$bahasa', '$harga', '$stok_buku', '$deskripsi')" ;

        if (mysqli_query($link, $sql)) {
            session_start();
            $_SESSION['alert'] = 'berhasil';
            header("location:form_add.php");
        } else {
            echo "Gagal Menambahkan";
        }
    } else {
        echo "Gagal Menambahkan";
    }
mysqli_close($link);
?>
    