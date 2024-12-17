<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MARTCODE</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="assets/css/style_home.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload banner
  -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">

</head>

<body id="top">
<style>.monthly-report-table {
  width: 100%;
  border-collapse: collapse;
  margin: 20px 0;
  font-size: 1em;
  text-align: left;
  border: 1px solid #ddd;
}

.monthly-report-table thead {
  background-color: #f4f4f4;
}

.monthly-report-table th, 
.monthly-report-table td {
  padding: 12px 15px;
}

.monthly-report-table th {
  font-weight: bold;
  color: #333;
}

.monthly-report-table tr:nth-child(even) {
  background-color: #f9f9f9;
}

.monthly-report-table tr:hover {
  background-color: #f1f1f1;
}

.monthly-report-table td {
  color: #555;
}

@media (max-width: 768px) {
  .monthly-report-table thead {
    display: none;
  }

  .monthly-report-table tr {
    display: block;
    margin-bottom: 15px;
  }

  .monthly-report-table td {
    display: block;
    text-align: right;
    font-size: 0.9em;
    border-bottom: 1px solid #ddd;
    position: relative;
    padding-left: 50%;
  }

  .monthly-report-table td::before {
    content: attr(data-label);
    position: absolute;
    left: 10px;
    text-align: left;
    font-weight: bold;
    color: #333;
  }
}
</style>
  <!-- 
@include('home.header')
    - #HEADER
  -->

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

          <li class="navbar-item">
            <a href="penjual" class="navbar-link">Dashboard </a>
          </li>

          <li class="navbar-item">
            <a href="datadiri" class="navbar-link">Profil saya</a>
          </li>

          <li class="navbar-item">
            <a href="menjual" class="navbar-link">Upload</a>
          </li>
          <li class="navbar-item">
            <a href="ulasan" class="navbar-link">Ulasan</a>
          </li>

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
  <table class="monthly-report-table">
  <thead>
    <tr>
      <th>Bulan</th>
      <th>Pendapatan</th>
      <th>Transaksi</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td data-label="Bulan">Januari</td>
      <td data-label="Pendapatan">$1,200.00</td>
      <td data-label="Transaksi">50</td>
      <td data-label="Status">Selesai</td>
    </tr>
    <tr>
      <td data-label="Bulan">Februari</td>
      <td data-label="Pendapatan">$1,500.00</td>
      <td data-label="Transaksi">65</td>
      <td data-label="Status">Selesai</td>
    </tr>
    <tr>
      <td data-label="Bulan">Maret</td>
      <td data-label="Pendapatan">$1,800.00</td>
      <td data-label="Transaksi">75</td>
      <td data-label="Status">Selesai</td>
    </tr>
  </tbody>
</table>

    <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>