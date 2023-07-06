<?php
// Check if the ID parameter is provided in the URL
if (isset($_GET['id'])) {
    // Get the ID from the URL
    $id_buku = $_GET['id'];

    // Include the database connection file
    include "../lib/connection.php";

    // Select the image path from the database
    $sql_select = "SELECT gambar FROM buku WHERE id_buku = '$id_buku'";
    $result_select = mysqli_query($link, $sql_select);
    $row_select = mysqli_fetch_assoc($result_select);
    $image_path = $row_select['gambar'];

    // Delete the record from the database
    $sql_delete = "DELETE FROM buku WHERE id_buku = '$id_buku'";
    if (mysqli_query($link, $sql_delete)) {
        // Delete the image file from the server
        if ($image_path != '') {
            unlink($image_path);
        }
        mysqli_close($link);
        header("Location: show_data.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }

    // Close the database connection
    mysqli_close($link);
} else {
    echo "Invalid ID parameter.";
}
?>