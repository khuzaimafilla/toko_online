<?php
  session_start();
  if ($_SESSION['status_login'] != true) {
    header('location:login_petugas.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>
<body>

  <div class="b-example-divider"></div>

<header>
  <div class="px-3 py-2 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <li>
            <a href="home_pelanggan.php" class="nav-link text-white">
              Home
            </a>
          </li>
          <li>
            <a href="cart.php" class="nav-link text-white">
              Cart
            </a>
          </li>
          <li>
            <a href="transaksi.php" class="nav-link text-white">
              Check Out
            </a>
          </li>
          <li>
            <a href="profil.php" class="nav-link text-white">
              Profile
            </a>
          </li>
          <li>
            <a href="logout.php" class="nav-link text-white">
              Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>
</body>
</html>