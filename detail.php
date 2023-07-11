<?php
include 'lib/connection.php';
// Mendapatkan data buku berdasarkan id_buku
$detail = array(); // Define empty array
if (isset($_GET['id'])) {
    $id_buku = $_GET['id'];
    $sql = "SELECT * FROM buku WHERE id_buku='$id_buku'";
    $ambil = mysqli_query($link, $sql);
    $detail = mysqli_fetch_assoc($ambil);
}
echo "<pre>";
print_r($detail);
echo "</pre>";
?>
<br>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Buku</title>
    <?php
    include "css/link.php";
    ?>
</head>
<body>
<section class="kontent">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <img src="assets/img/buku/<?php echo $detail["gambar"];?>" alt="">
            </div>
        </div>

    </div>
</section>

    <?php
    include "../layout/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>