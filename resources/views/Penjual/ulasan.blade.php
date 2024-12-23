<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Navbar and Table</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }

    /* Header and Navbar Styling */
    .navbar {
  display: flex;
  justify-content: center; /* Untuk menempatkan menu di tengah */
  align-items: center;
  width: 100%;
  position: relative; /* Membuat tombol kanan tetap terpisah */
}

.navbar-list {
  display: flex;
  gap: 20px; /* Jarak antar item menu */
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-action-list {
  position: absolute; /* Menghapus pengaruh flexbox dari elemen lain */
  right: 20px; /* Menempatkan di sisi kanan */
  display: flex;
  align-items: center;
  gap: 15px; /* Jarak antar elemen dalam daftar */
}


    .header {
      position: sticky;
      top: 0;
      z-index: 1000;
      background: linear-gradient(90deg, #b60d0d, #7a0c0c);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
    }

    .header .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
    }

    .logo img {
      max-height: 50px;
    }

    .navbar {
      display: flex;
      align-items: center;
      gap: 20px;
    }

    .navbar-list {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .navbar-item {
      margin: 0 10px;
    }

    .navbar-link {
      text-decoration: none;
      color: white;
      font-weight: bold;
      transition: color 0.3s;
    }

    .navbar-link:hover {
      color: #ffc107;
    }

    .nav-action-list {
      display: flex;
      align-items: center;
      gap: 15px;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .nav-action-btn {
      display: flex;
      align-items: center;
      gap: 5px;
      font-size: 0.9rem;
      color: white;
      background: transparent;
      border: none;
      cursor: pointer;
      transition: color 0.3s, transform 0.2s;
    }

    .nav-action-btn:hover {
      color: #ffc107;
      transform: scale(1.1);
    }

    .nav-action-badge {
      background-color: #ffc107;
      color: #b60d0d;
      border-radius: 50%;
      padding: 2px 6px;
      font-size: 0.8rem;
    }

    /* Responsive Navbar */
    .nav-open-btn, .nav-close-btn {
      display: none;
      font-size: 2rem;
      background: none;
      border: none;
      color: white;
      cursor: pointer;
    }

    @media screen and (max-width: 768px) {
      .navbar {
        position: fixed;
        top: 0;
        right: -100%;
        height: 100%;
        width: 70%;
        flex-direction: column;
        background-color: #b60d0d;
        padding: 20px;
        transition: right 0.3s;
        box-shadow: -5px 0 10px rgba(0, 0, 0, 0.2);
      }

      .navbar[data-navbar="open"] {
        right: 0;
      }

      .nav-open-btn {
        display: block;
      }

      .nav-close-btn {
        display: block;
        align-self: flex-end;
      }

      .navbar-list {
        flex-direction: column;
        gap: 15px;
      }

      .nav-action-list {
        flex-direction: column;
        gap: 10px;
      }
    }

    .content {
      margin-top: 20px; /* Jarak antara navbar dan konten di bawahnya */
    }

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
        h1 {
            text-align: center;
        }
        .product-section {
            display: flex;
            gap: 20px;
            align-items: flex-start;
        }
        .product-image {
            flex: 1;
            max-width: 300px;
        }
        .product-image img {
            width: 100%;
            border-radius: 8px;
            object-fit: cover;
        }
        .review-list {
            margin-top: 30px;
        }
        .review {
            display: flex;
            gap: 20px;
            border-bottom: 1px solid #ccc;
            padding: 10px 0;
        }
        .review img {
            max-width: 100px;
            border-radius: 8px;
        }
        .review-content {
            flex: 1;
        }
        .rating {
            color: #FFD700;
        }
        .seller-review {
            background-color: #f0f8ff;
            border: 1px solid #b0c4de;
            padding: 10px;
            border-radius: 8px;
            margin-top: 20px;
        }
        .seller-name {
            font-weight: bold;
            color: #2e8b57;
        }
        .seller-rating {
            color: #FFD700;
        }
    .btn-custom {
      font-size: 0.9rem;
      padding: 6px 12px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      color: white;
    }

    .btn-warning {
      background-color: #ffc107;
    }

    .btn-warning:hover {
      background-color: #e0a800;
    }

    .btn-danger {
      background-color: #dc3545;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }

  </style>
</head>
<body>
  <header class="header">
    <div class="container">
      <a href="#" class="logo">
        <img src="./assets/images/logo.svg" alt="Logo">
      </a>
      <button class="nav-open-btn" data-nav-open-btn>
        <i class="fas fa-bars"></i>
      </button>
      <nav class="navbar" data-navbar>
        <button class="nav-close-btn" data-nav-close-btn>
          <i class="fas fa-times"></i>
        </button>
        <ul class="navbar-list">
          <li class="navbar-item"><a href="penjual" class="navbar-link">Dasbor</a></li>
          <li class="navbar-item"><a href="datadiri" class="navbar-link">Profil saya</a></li>
          <li class="navbar-item"><a href="menjual" class="navbar-link">Menggugah</a></li>
          <li class="navbar-item"><a href="ulasan" class="navbar-link">Ulasan</a></li>
        </ul>
        <ul class="nav-action-list">
          <li>
            <a href="#" class="nav-action-btn">
              <i class="fas fa-user"></i>
              <span>Masuk / Daftar</span>
            </a>
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
</body>
</html>