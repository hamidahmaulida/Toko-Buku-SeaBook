<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Konfirmasi Pembayaran</title>
    <?php
    include "../css/link.php";
    ?>
  </head>
  <body>
    <?php
    include "../layout/simple_header.php";
    ?>
    <br>
    <section class="page-title mt-5 mb-2">
      <div class="container d-flex">
        <div class="row justify-content-bet">
          <div class="col">
            <a href="show_data.php" class="btn btn-secondary mt-1">Kembali</a>
          </div>
        </div>
        <div class="col">
          <h1 class="text-end">Konfirmasi Pembayaran</h1>
        </div>
      </div>
    </section>
    <section class="show-table">
        <div class="container">
          <table class="table">
          <thead class="shadow">
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Username</th>
              <th>Virtual Account</th>
              <th>Tanggal Transaksi</th>
              <th>Waktu Transaksi</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody class="shadow">
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th><a href=""></a></th>
          </tbody>
        </table>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>