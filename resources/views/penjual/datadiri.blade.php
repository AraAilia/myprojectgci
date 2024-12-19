<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MARTCODE</title>

  <!-- favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- custom css link -->
  <link rel="stylesheet" href="assets/css/style_home.css">

  <!-- google font link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- preload banner -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">

  <style>
  body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

.container {
  width: 400px;
  margin: 5px auto;
  padding: 10px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 10px;
}

.form-group {
  margin-bottom: 20px;
}

label {
  display: block;
  margin-bottom: 10px;
}

input, textarea, select {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

button[type="submit"] {
  background-color: #4CAF50;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

button[type="submit"]:hover {
  background-color: #3e8e41;
}
  </style>

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


<body>

  <header>
    <h1>Profil Saya</h1>
  </header>

  <div class="container">
    <h2>Isi Data Diri</h2>
    <form>
      <div class="form-group">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="toko">Nama Toko:</label>
        <textarea id="toko" name="toko" required></textarea>
      </div>
      <div class="form-group">
        <label for="no_hp">No. HP:</label>
        <input type="text" id="no_hp" name="no_hp" required>
      </div>
      <div class="form-group">
        <label for="jenis_bank">Jenis Bank:</label>
        <select id="jenis_bank" name="jenis_bank" required>
          <option value="">Pilih Jenis Bank</option>
          <option value="bri">Bank BRI</option>
          <option value="mandiri">Bank Mandiri</option>
          <option value="bca">Bank BCA</option>
          <option value="lainnya">Lainnya</option>
        </select>
      </div>
      <div class="form-group">
        <label for="no_rek">No. Rekening:</label>
        <input type="text" id="no_rek" name="no_rek" required>
      </div>
      <button type="submit">Simpan</button>
    </form>
  </div>

  <div class="footer-bottom">
    <p>&copy; 2024 MartCode. All rights reserved.</p>
  </div>

</body>

</html>
