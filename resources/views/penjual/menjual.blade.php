<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MARTCODE</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style_home.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!-- Preload Banner -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .btn-add {
      background-color: #28a745;
      color: white;
      border: none;
      border-radius: 4px;
      padding: 10px 15px;
      margin-bottom: 15px;
      cursor: pointer;
      font-size: 1rem;
      display: inline-block;
    }

    .btn-add:hover {
      background-color: #218838;
    }

    .table-custom {
      border-collapse: collapse;
      width: 100%;
      margin: 20px 0;
    }

    .table-custom th {
      background-color: #b60d0d;
      color: white;
      padding: 15px;
      text-align: center;
    }

    .table-custom td {
      padding: 15px;
      text-align: center;
      vertical-align: middle;
    }

    .table-custom tbody tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .table-custom tbody tr:nth-child(odd) {
      background-color: #fff;
    }

    .table-custom tbody tr:hover {
      background-color: #e8f5fe;
    }

    .table-responsive {
      overflow-x: auto;
      margin: 20px 0;
    }

    .btn-custom {
      padding: 5px 10px;
      font-size: 0.875rem;
      border-radius: 4px;
    }

    .btn-warning {
      background-color: #ffc107;
      color: #212529;
      border: none;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
      border: none;
    }

    .btn-warning:hover {
      background-color: #e0a800;
    }

    .btn-danger:hover {
      background-color: #c82333;
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
            <a href="#" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              <span class="nav-action-text">Login / Register</span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <div class="content">
    <button class="btn-add" onclick="location.href='unggah.php';">Tambah Data Baru</button>
  </div>

  <div class="table-responsive">
    <table class="table table-custom">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Kategori</th>
          <th>Deskripsi</th>
          <th>Harga</th>
          <th>Image</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Sepatu Nike</td>
          <td>Olahraga</td>
          <td>Sepatu olahraga yang nyaman untuk segala medan.</td>
          <td>$100</td>
          <td><img src="path_to_nike_image" alt="Sepatu Nike"></td>
          <td>
            <button class="btn btn-warning btn-custom">Edit</button>
            <button class="btn btn-danger btn-custom">Hapus</button>
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Sepatu Adidas</td>
          <td>Olahraga</td>
          <td>Sepatu yang cocok untuk berlari dan aktivitas sehari-hari.</td>
          <td>$120</td>
          <td><img src="path_to_adidas_image" alt="Sepatu Adidas"></td>
          <td>
            <button class="btn btn-warning btn-custom">Edit</button>
            <button class="btn btn-danger btn-custom">Hapus</button>
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Sepatu Puma</td>
          <td>Kasual</td>
          <td>Sepatu dengan desain kasual yang stylish.</td>
          <td>$90</td>
          <td><img src="path_to_puma_image" alt="Sepatu Puma"></td>
          <td>
            <button class="btn btn-warning btn-custom">Edit</button>
            <button class="btn btn-danger btn-custom">Hapus</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Scripts -->
  <script>
    const navOpenBtn = document.querySelector('[data-nav-open-btn]');
    const navCloseBtn = document.querySelector('[data-nav-close-btn]');
    const navbar = document.querySelector('[data-navbar]');

    navOpenBtn.addEventListener('click', () => {
      navbar.setAttribute('data-navbar', 'open');
    });

    navCloseBtn.addEventListener('click', () => {
      navbar.setAttribute('data-navbar', 'close');
    });
  </script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>
