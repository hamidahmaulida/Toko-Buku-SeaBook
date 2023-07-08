<?php
if (isset($_GET['status'])) {
	$status = $_GET['status'];
	include '../lib/connection.php';

	if ($status == 'Menunggu') {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$query = "UPDATE transaksi SET status_transaksi = 'Dikemas' WHERE id_transaksi = '$id'";
			$result = mysqli_query($link, $query);
			if ($result) {
				header('location: confirmation.php');
			} else {
				header('location: confirmation.php');
			}
		} else {
			echo "Invalid ID parameter";
		}
	} elseif ($status == 'Dikemas') {
		if (isset($_GET['id'])) {
			$id = $_GET['id'];

			$query = "UPDATE transaksi SET status_transaksi = 'Dikirim' WHERE id_transaksi = '$id'";
			$result = mysqli_query($link, $query);
			if ($result) {
				header('location: confirmation.php');
			} else {
				header('location: confirmation.php');
			}
		} else {
			echo "Invalid ID parameter";
		}
	}
} else {
	echo "Invalid STATUS parameter";
}
mysqli_close($link);
?>