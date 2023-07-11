<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <br /><br />
    <?php
    include "css/link_user.php";
    ?>
</head>

<body>
    <br />


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
                $result = mysqli_query($link, $sql) ?>
                <?php while ($perproduk = mysqli_fetch_assoc($result)) { ?>
                    <div class="col-md-2 g-6">
                        <div class="thumbnail">
                            <?php
                            // Buat placeholder kalau gaada image
                            $image = imagecreatetruecolor(120, 180);
                            $backgroundColor = imagecolorallocate($image, 255, 255, 255);
                            imagefill($image, 0, 0, $backgroundColor);
                            $textColor = imagecolorallocate($image, 0, 0, 0);
                            $imageText = "Image";
                            $imageTextWidth = imagefontwidth(5) * strlen($imageText);
                            $imageTextHeight = imagefontheight(5);
                            $imageTextX = (120 - $imageTextWidth) / 2;
                            $imageTextY = (180 - $imageTextHeight * 2 - 10) / 2;
                            imagestring($image, 5, $imageTextX, $imageTextY, $imageText, $textColor);
                            $unavailableText = "Unavailable";
                            $unavailableTextWidth = imagefontwidth(5) * strlen($unavailableText);
                            $unavailableTextHeight = imagefontheight(5);
                            $unavailableTextX = (120 - $unavailableTextWidth) / 2;
                            $unavailableTextY = $imageTextY + $imageTextHeight + 10; // Gap
                            imagestring($image, 5, $unavailableTextX, $unavailableTextY, $unavailableText, $textColor);
                            ob_start();
                            imagepng($image);
                            $imageData = ob_get_clean();
                            imagedestroy($image);

                            $base64Image = base64_encode($imageData);
                            $dataUriWrong = 'data:image/png;base64,' . $base64Image;


                            $imagePath = $perproduk['gambar'];

                            $imagePath = substr($imagePath, strpos($imagePath, '/') + 1);

                            if (is_file($imagePath)) {
                                $mimeType = mime_content_type($imagePath);

                                $imageData = file_get_contents($imagePath);

                                $base64Image = base64_encode($imageData);

                                $dataUri = 'data:' . $mimeType . ';base64,' . $base64Image;

                                echo '<img src="' . $dataUri . '" alt="" width="120px" height="180px">';
                            } else {
                                echo '<img src="' . $dataUriWrong . '" alt="Image Not Available" width="120px" height="180px">';
                            }
                            ?>

                            <div class="caption">
                                <h6><?php echo $perproduk['judul_buku']; ?></h6>
                                <h6>Rp. <?php echo $perproduk['harga']; ?></h6>
                                <a class="btn btn-primary" href="">Beli</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <br />

            </div>
        </div>
    </section>


    <?php
    include "layout/footer.php";
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>