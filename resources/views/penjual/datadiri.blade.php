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

  
  <form action="{{ route('profil.store') }}" method="POST" style="max-width: 500px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px;">
    @csrf
    <h3 style="text-align: center; margin-bottom: 20px;">Form Data Diri</h3>

    <!-- Nama -->
    <div style="margin-bottom: 15px;">
        <label for="nama" style="display: block; margin-bottom: 5px;">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama Anda" required
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <!-- Nama Toko -->
    <div style="margin-bottom: 15px;">
        <label for="toko" style="display: block; margin-bottom: 5px;">Nama Toko</label>
        <input type="text" id="toko" name="toko" class="form-control" placeholder="Masukkan nama toko" required
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <!-- Nomor HP -->
    <div style="margin-bottom: 15px;">
        <label for="nomor_hp" style="display: block; margin-bottom: 5px;">Nomor HP</label>
        <input type="text" id="nomor_hp" name="nomor_hp" class="form-control" placeholder="Masukkan nomor HP" required
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <!-- Bank -->
    <div style="margin-bottom: 15px;">
        <label for="bank" style="display: block; margin-bottom: 5px;">Bank</label>
        <input type="text" id="bank" name="bank" class="form-control" placeholder="Masukkan nama bank" required
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <!-- Nomor Rekening -->
    <div style="margin-bottom: 20px;">
        <label for="no_rekening" style="display: block; margin-bottom: 5px;">Nomor Rekening</label>
        <input type="text" id="no_rekening" name="no_rekening" class="form-control" placeholder="Masukkan nomor rekening" required
            style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 5px;">
    </div>

    <!-- Tombol Submit -->
    <div style="text-align: center;">
        <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Simpan Data
        </button>
    </div>
</form>
  

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
