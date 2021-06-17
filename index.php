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
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <title>Project PBW A3</title>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            <a class="nav-link active" href="#about">About</a>
            <a class="nav-link active" href="#donation">Donation</a>
            <a class="nav-link active" href="#contact">Contact</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Akhir Navigasi -->

    <!-- Jumbotron -->
    <section class="jumbotron text-center" style="background-color: rgb(197, 245, 229); padding-top: 2rem;">
      <img src="img/bg.jpg" alt="Tree" width="250" class="rounded-circle img-thumbnail mt-5" />
      <p class="display-6">Hello, Greeniers!</hp>
      <p class="lead">Let's plant one million trees for Indonesia!</p>
      <hr class="my-4" />
      <p class="lead">Start Now!</p>
      <a class="btn btn-warning btn-lg" href="register.php" role="button">Register</a>
      <a class="btn btn-warning btn-lg" href="login.php" role="button">Login</a>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,0L30,5.3C60,11,120,21,180,42.7C240,64,300,96,360,128C420,160,480,192,540,181.3C600,171,660,117,720,85.3C780,53,840,43,900,53.3C960,64,1020,96,1080,133.3C1140,171,1200,213,1260,208C1320,203,1380,149,1410,122.7L1440,96L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Jumbotron -->

    <!-- About -->
    <section id="about">
      <div class="container-md">
        <div class="row text-center">
          <div class="col-md mt-5">
            <h2>About</h2>
          </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-8">
            <p>Greeny is online fundraising platform for forest and environmental conservation. Greeny is one of the programs to plant trees through donations that we give to local institutions and communities (around the forest) to maintain trees.</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="rgb(197, 245, 229)" fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,138.7C384,128,480,160,576,186.7C672,213,768,235,864,224C960,213,1056,171,1152,133.3C1248,96,1344,64,1392,48L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Donation -->
    <section id="donation" style="background-color:rgb(197, 245, 229);">
    <div class="container-md">
      <div class="row text-center">
        <div class="col-md mt-5">
          <h2>Donation</h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/pohon.jpeg" class="card-img-top" alt="Ilustrasi bibit pohon buah">
            <div class="card-body">
              <p class="card-text">Bibit Pohon Buah</p>
              <p class="card-text">Rp. 75.000</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <div class="card">
            <img src="img/kayu.jpeg" class="card-img-top" alt="Ilustrasi bibit pohon kayu">
            <div class="card-body">
              <p class="card-text">Bibit Pohon Kayu Keras</p>
              <p class="card-text">Rp. 100.000</p>
            </div>
          </div>
        </div>
        <div class="container-md text-center mt-3">
          <p class="fs-5">Make planting and environmental actions easy, safe and transparent.
            Start Planting Your Tree.</p>
          <p class="fs-5">Donate Without Minimum!</p>
          <a class="btn btn-warning" href="login.php" role="button">Donate Now</a>
        </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,32L48,32C96,32,192,32,288,69.3C384,107,480,181,576,192C672,203,768,149,864,117.3C960,85,1056,75,1152,80C1248,85,1344,107,1392,117.3L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Donation -->

    <!-- Contact -->
    <section id="contact">
      <div class="container-md text-center mb-5">
        <div class="row">
          <div class="col-md mb-3">
            <h2>Contact</h2>
          </div>

        <div class="row">
          <div class="col-md-4 lead fs-6">
            <h6>Social Media</h6>
            <p>Instagram  : @greeny</p>
            <p>Twitter    : @greeny</p>
            <p>Facebook   : Greeny</p>
          </div>
          <div class="col-md-4 lead fs-6">
            <h6>Email</h6>
            <p>cs@greeny.id</p>
          </div>
          <div class="col-md-4 lead fs-6">
            <h6>Adress</h6>
            <p>Universitas Jember</p>
            <p>Jalan Kalimantan No. 37, Kampus Tegalboto, Jember, Jawa Timur, 68121, Indonesia</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir Contact -->

    <!-- Footer -->
    <footer class="text-center fst-italic" style="background-color: rgb(241, 235, 235);">Copyright @Greeny</footer>
    <!-- Akhir Footer -->
    
    <script src="js/bootstrap.js"></script>
    <script src="js/popper.min.js"></script>

  </body>
</html>