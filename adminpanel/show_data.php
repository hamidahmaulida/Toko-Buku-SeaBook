<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" type="image/x-icon" href="../assets/img/Icon.png">
  </head>
  <body class="d-flex flex-column" style="min-height: 100vh">
    <?php
    include "../layout/admin_header.php";
    ?>
    <br>
    <section class="page-title">
        <div class="container mt-5">
            <div class="row">
                <div class="col">
                    <h1 class="mb-3">CRUD Seabook</h1>
                </div>
                <div class="col mt-2">
                    <form class="d-flex input-group" role="search" method="GET" action="">
                        <input type="search" name="search" class="form-control" placeholder="  Cari Judul Buku" aria-label="Search" aria-describedby="button-addon2" value="<?php if(isset($_GET['search'])) echo $_GET['search'];?>">
                        <button class="btn btn-outline-secondary pb-2 pe-3" type="submit" id="button-addon2">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                          </svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="show-table flex-grow-1">
        <div class="container">   
            <?php
            include "../lib/connection.php";

            $search = '';
            if(isset($_GET['search'])){
                $search = $_GET['search'];
                $sql = "SELECT * FROM buku WHERE judul_buku LIKE '%$search%'";
            } else {
                $sql = "SELECT * FROM buku";  
            }

            $result = mysqli_query($link, $sql);
            ?>
                <table class="table">
                    <thead class="shadow">
                        <tr>
                            <th>No</th>
                            <th>Gambar</th>
                            <th>Judul Buku</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tanggal Terbit</th>
                            <th>Kategori</th>
                            <th>Bahasa</th>
                            <th>Harga</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                            
                        </tr>
                    </thead>
                    <tbody class="shadow">
                        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                            <tr>
                                <td><?php echo $row['id_buku']; ?></td>
                                <td><img src="<?php echo $row['gambar']; ?>" alt="" width="50px"></td>
                                <td><?php echo $row['judul_buku']; ?></td>
                                <td><?php echo $row['penulis']; ?></td>
                                <td><?php echo $row['penerbit']; ?></td>
                                <td><?php echo $row['tanggal_terbit']; ?></td>
                                <td><?php echo $row['kategori']; ?></td>
                                <td><?php echo $row['bahasa']; ?></td>
                                <td><?php echo $row['harga']; ?></td>
                                <td><?php echo substr($row['deskripsi'], 0, 50)."..."; ?></td>
                                <td>
                                    <a href="form_edit.php?id= <?php echo $row['id_buku']; ?>" class="btn btn-primary mb-2">Edit</a>
                                    <a href="delete.php?id= <?php echo $row['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            <a href="form_add.php" class="btn btn-success">Tambah Buku</a>
        </div> 
    </section>
    
    <?php
    include "../layout/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>