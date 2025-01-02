<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MARTCODE</title>


</head>

<body id="top">

  <!-- Header -->
  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" width="160" height="50" alt="Footcap logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/logo.svg" width="190" height="50" alt="Footcap logo">
        </a>

        <ul class="navbar-list">
          <li class="navbar-item"><a href="penjual" class="navbar-link">Dashboard</a></li>
          <li class="navbar-item"><a href="datadiri" class="navbar-link">Profil saya</a></li>
          <li class="navbar-item"><a href="menjual" class="navbar-link">Upload</a></li>
          <li class="navbar-item"><a href="ulasan" class="navbar-link">Ulasan</a></li>
        </ul>

        <ul class="nav-action-list">
          <li>
            <button class="nav-action-btn">
              <ion-icon name="search-outline" aria-hidden="true"></ion-icon>
              <span class="nav-action-text">Search</span>
            </button>
          </li>
          <li>
            <a href="#" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>
          <li>
            <button class="nav-action-btn">
              <ion-icon name="bag-outline" aria-hidden="true"></ion-icon>
              <data class="nav-action-text" value="318.00">Basket: <strong>$318.00</strong></data>
              <data class="nav-action-badge" value="4" aria-hidden="true">4</data>
            </button>
          </li>
        </ul>

      </nav>

    </div>
  </header>


  <div class="container">
      <h1>Profil Penjual</h1>
      <p><strong>Nama:</strong> {{ $penjual->nama }}</p>
      <p><strong>Toko:</strong> {{ $penjual->toko }}</p>
      <p><strong>Nomor HP:</strong> {{ $penjual->nomor_hp }}</p>
      <p><strong>Bank:</strong> {{ $penjual->bank }}</p>
      <p><strong>No Rekening:</strong> {{ $penjual->no_rekening }}</p>
      <a href="/edit-profil">Edit Profil</a>
  </div>

  
  

  
<!-- custom css link -->
<link rel="stylesheet" href="assets/css/style_home.css">

<!-- google font link -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

<!-- preload banner -->
<link rel="preload" href="./assets/images/hero-banner.png" as="image">

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</body>

</html>
