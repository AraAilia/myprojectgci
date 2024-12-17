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
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f4f4f4;
      padding: 20px;
    }

    h1, p {
      text-align: center;
      margin: 0 0 10px 0;
      color: #333;
    }
    h2, p {
      text-align: center;
      margin: 0 0 10px 0;
      color: #333;
    }

    .icon-wrapper {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 60px;
      margin-top: 20px;
    }

    .icon-container {
      text-align: center;
    }

    .icon-container i {
      font-size: 100px;
      color: #333;
      transition: transform 0.2s ease, color 0.2s ease;
      cursor: pointer;
    }

    .icon-container i:hover {
      transform: scale(1.1);
      color: #007bff;
    }

    .icon-container p {
      margin-top: 10px;
      font-size: 1.5rem;
      color: #555;
    }

    .footer-bottom {
      background-color: #333;
      color: #fff;
      padding: 30px 20px;
      text-align: center;
      margin-top: 150px;
      width: 100%;
    }

    .copyright {
      margin: 0;
      font-size: 14px;
      line-height: 1.6;
    }

    .copyright-link {
      color: #28a745;
      text-decoration: none;
      font-weight: bold;
    }

    .copyright-link:hover {
      text-decoration: underline;
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
        <h1>Ulasan dan Rating Produk</h1>
    </header>

    <div class="container">
        <div class="product-section">
            <div class="product-image">
                <img src="https://via.placeholder.com/300x300" alt="Produk">
            </div>
            <div class="product-info">
                <h2>Nama Produk</h2>
                <p>Deskripsi singkat produk.</p>
            </div>
        </div>

        <div class="review-list">
            <h2>Ulasan Terbaru</h2>
            <!-- Ulasan Pengguna -->
            <div class="review">
                <img src="https://via.placeholder.com/100" alt="Produk">
                <div class="review-content">
                    <p><strong>Nama:</strong> Jane Doe</p>
                    <p><strong>Rating:</strong> <span class="rating">⭐⭐⭐⭐⭐</span></p>
                    <p><strong>Ulasan:</strong> Tempat ini luar biasa, pelayanannya sangat ramah!</p>
                </div>
            </div>

            <div class="review">
                <img src="https://via.placeholder.com/100" alt="Produk">
                <div class="review-content">
                    <p><strong>Nama:</strong> Mark Smith</p>
                    <p><strong>Rating:</strong> <span class="rating">⭐⭐⭐⭐</span></p>
                    <p><strong>Ulasan:</strong> Produk sangat bagus, namun pengirimannya agak lambat.</p>
                </div>
            </div>

            <!-- Ulasan Penjual -->
            <div class="review seller-review">
                <img src="https://via.placeholder.com/100" alt="Produk">
                <div class="review-content">
                    <p><span class="seller-name">Penjual: John Doe</span></p>
                    <p><strong>Rating:</strong> <span class="seller-rating">⭐⭐⭐⭐⭐</span></p>
                    <p><strong>Ulasan:</strong> Produk ini sangat bagus, kualitas luar biasa dan sangat direkomendasikan!</p>
                </div>
            </div>

            <div class="review seller-review">
                <img src="https://via.placeholder.com/100" alt="Produk">
                <div class="review-content">
                    <p><span class="seller-name">Penjual: Sarah Smith</span></p>
                    <p><strong>Rating:</strong> <span class="seller-rating">⭐⭐⭐⭐</span></p>
                    <p><strong>Ulasan:</strong> Sangat puas dengan produk ini, pengiriman cepat dan layanan sangat baik.</p>
                </div>
            </div>
        </div>
    </div>
 
  <!-- Scripts -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</body>

</html>
