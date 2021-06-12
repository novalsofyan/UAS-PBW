<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />

    <title>Register</title>
  </head>
  <body>
    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-success shadow-sm">
      <div class="container-md">
        <a class="navbar-brand fw-bold fst-italic" href="#">Greeny</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            <a class="nav-link active" href="#about">About</a>
            <a class="nav-link active" href="#donation">Donation</a>
            <a class="nav-link active" href="#adress">Adress</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigasi -->

    <!-- Formulir -->
    <div class="container-md">
      <div align="center">
        <form class="mt-5">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Your Email</label>
            <input type="email" class="form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" />
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control-sm" id="exampleInputPassword1" />
          </div>
          <button type="submit" name="login" class="btn btn-warning">Register</button>
        </form>

        <p class="mt-3">Or</p>
        <a class="btn btn-outline-warning" href="login.php" role="button">Already Have Account</a>
      </div>
    </div>
    <!-- Akhir Formulir -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>
