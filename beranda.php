<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <br/><br/>
    <?php
    include "css/link_user.php";
    ?>
</head>
<body>
    <br/>


<?php
    include "layout/user_header.php";
?>

<!-- konten -->
<section class="konten">
    <div class="container">
        <h5>Buku Metode Penelitian</h5>

        <div class="row">
            <?php 
            include 'lib/connection.php';
            $sql = "SELECT * FROM buku LIMIT 6";
            $result = mysqli_query($link, $sql)?>
            <?php while ($perproduk= mysqli_fetch_assoc($result)){ ?>
            <div class="col-md-2 g-6">
                <div class="thumbnail">
                    <img src="assets/img/buku/<?php echo $perproduk['gambar'];?>"<?php echo $data['gambar']; ?> alt="" width="120px" height="180px">
                    <div class="caption">
                        <h6><?php echo $perproduk['judul_buku'];?></h6>
                        <h6>Rp. <?php echo $perproduk['harga']; ?></h6>
                        <a class="btn btn-primary" href="">Beli</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <br/>
            
        </div>
    </div>
</section>


<?php
    include "layout/footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>