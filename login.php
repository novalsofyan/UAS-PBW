<?php
session_start();
require("dbUsers.php");
//cek cookie
if(isset($_COOKIE['token'])) {
  $token = $_COOKIE['token'];
  $result = $db->readUser();
  
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $target = hash('sha256', $row["email"]);
      if($token === $target) {
        $_SESSION['login'] = true;
        break;
      } else {
        $_SESSION['login'] = false;
      }
    }
  }
}

if (isset($_SESSION["login"])) {
  header("Location: home.php");
  exit;
}

if(isset($_POST["login"])) {

  $email = $_POST["email"];
  $passwd = $_POST["passwd"];
  
  $db->loginUser($email, $passwd);
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

    <title>Login</title>
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
            <a class="nav-link active" href="index.php#about">About</a>
            <a class="nav-link active" href="#donation">Donation</a>
            <a class="nav-link active" href="index.php#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigasi -->

    <!-- Formulir -->
    <div class="container-md d-flex justify-content-center">
      <div align="center">
        <form class="mt-5" action="" method="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control-sm" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" />
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control-sm" id="exampleInputPassword1" name="passwd" />
          </div>
          <button type="submit" name="login" class="btn btn-warning">Login</button>
        </form>

        <p class="mt-3">Or</p>
        <a class="btn btn-outline-warning" href="register.php" role="button">Buat Akun Baru</a>
      </div>
    </div>
    <!-- Akhir Formulir -->

    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>
    
  </body>
</html>
