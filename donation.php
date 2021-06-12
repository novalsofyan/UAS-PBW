<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

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
            <a class="nav-link active" href="#about">About</a>
            <a class="nav-link active" href="#donation">Donation</a>
            <a class="nav-link active" href="#adress">Adress</a>
            <a class="nav-link active" href="index.php"><img src="img/logout.png" />Logout</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigasi -->

    <!-- Formulir -->
    <div class="container-md" style="margin-top: 100px">
      <form class="form-control-sm">
        <div class="row mb-3">
          <label for="jumlah" class="col-sm-2 col-form-label">Donation Amount</label>
          <div class="col-sm-10">
            <input type="number" id="jumlah" />
          </div>
        </div>
        <fieldset class="row mb-3">
          <legend class="col-form-label col-sm-2 pt-0">Payment Method</legend>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked />
              <label class="form-check-label" for="gridRadios1"> Bank Transfers </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2" />
              <label class="form-check-label" for="gridRadios2"> Credit Card </label>
            </div>
          </div>
        </fieldset>
        <button type="submit" class="btn btn-warning">Donate</button>
      </form>
    </div>
    <!-- Akhir Formulir -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
