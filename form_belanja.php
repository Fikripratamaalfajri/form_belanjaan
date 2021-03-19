<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <title></title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-8">
        <form class="form-horizontal">
          <form class="form-horizontal" method="POST" action="form_belanja.php">
            <fieldset>

              <!-- Form Name -->
              <legend>Belanja </legend>

              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="nama">Costumer</label>
                <div class="col-md-4">
                  <input id="nama" name="nama" type="text" placeholder="masukan nama" class="form-control input-md">

                </div>
              </div>
              <br>
              <!-- Multiple Radios (inline) -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="radio">Pilih Produk </label>
                <div class="col-md-4">
                  <label class="radio-inline" for="radio-0">
                    <input type="radio" name="radio" id="radio-0" value="Telivisi" checked="checked">
                    Televisi
                  </label>
                  <label class="radio-inline" for="radio-1">
                    <input type="radio" name="radio" id="radio-1" value="Kulkas">
                    Kulkas
                  </label>
                  <label class="radio-inline" for="radio-2">
                    <input type="radio" name="radio" id="radio-2" value="Mesin Cuci">
                    Mesin Cuci
                  </label>
                </div>
              </div>
              <br>
              <!-- Text input-->
              <div class="form-group">
                <label class="col-md-4 control-label" for="jumlah">Jumlah</label>
                <div class="col-md-4">
                  <input id="jumlah" name="jumlah" type="text" placeholder="Jumlah" class="form-control input-md">

                </div>
              </div>
              <br>
              <!-- Button -->
              <div class="form-group">
                <label class="col-md-4 control-label" for="button"></label>
                <div class="col-md-4">
                  <button id="button" name="button" class="btn btn-primary">Checkout</button>
                </div>
              </div>

            </fieldset>
          </form>


      </div>
      <div class="col-4">
        <ul class="list-group">
          <li class="list-group-item active" aria-current="true">Daftar Harga</li>
          <li class="list-group-item">Tv : 4.200.000</li>
          <li class="list-group-item">Kulkas : 3.100.000</li>
          <li class="list-group-item">Mesin Cuci : 3.800.000</li>
          <li class="list-group-item active" aria-current="true">Harga sewaktu-waktu dapat berubah</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->


</body>

</html>

<?php
$customer = $_GET['nama'];
$belanjaan = $_GET['radio'];
$jumlah = $_GET['jumlahss'];
echo '<br/>Customer : ' . $customer;
echo '<br/>Produk  : ' . $belanjaan;
echo '<br/>Jumlah : ' . $jumlah;

if ($belanjaan  == "Telivisi" ) {
  echo "total harga:".$jumlah.4500000;
}
?>