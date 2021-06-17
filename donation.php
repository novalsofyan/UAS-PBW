<?php
session_start();
require("dbDataDonate.php");

if ( !isset($_SESSION["login"])) {
  header("Location: index.php");
  exit;
}

if(isset($_POST["donate"])) {

  $jumlah = $_POST["jumlah"];
  $pay_method = $_POST["pay_method"];

  $dbData->tambahData($jumlah, $pay_method);

}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Donation</title>
  </head>
  <body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success shadow-sm">
      <div class="container-md">
        <a class="navbar-brand fw-bold fst-italic" href="#">Greeny</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
            <a class="nav-link active" href="home.php#about">About</a>
            <a class="nav-link active" href="#0">Donation</a>
            <a class="nav-link active" href="home.php#contact">Contact</a>
            <a class="nav-link active" href="logout.php"><img src="img/logout.png" />Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigasi -->

    <!-- Formulir -->
    <div class="container-md" style="margin-top: 100px">
      <form class="form-control-sm" action="" method="post">
        <div class="row mb-3">
          <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Donasi (Rp)</label>
          <div class="col-sm-10">
            <input type="number" id="jumlah" name="jumlah" />
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Metode Pembayaran</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pay_method" id="gridRadios1" value="Bank Transfers" checked/>
              <label class="form-check-label" for="gridRadios1"> Bank Transfers </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="pay_method" id="gridRadios2" value="Credit Card"/>
              <label class="form-check-label" for="gridRadios2"> Credit Card </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-warning" name="donate">Donate</button>
      </form>
    </div>
    <!-- Akhir Formulir -->

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
  </body>
</html>
