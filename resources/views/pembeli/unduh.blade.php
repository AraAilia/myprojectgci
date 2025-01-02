<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MARTCODE</title>


  <!-- - favicon -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- - custom css link-->
  <link rel="stylesheet" href="assets/css/style_home.css">
  
  <!-- - google font link-->
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- - preload banner-->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">

</head>

<body id="top">

<!-- 
@include('home.header')
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a href="#" class="logo">
        <img src="./assets/images/logomm.jpg" width="160" height="50" alt="Martcode logo">
      </a>

      <button class="nav-open-btn" data-nav-open-btn aria-label="Open Menu">
        <ion-icon name="menu-outline"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <button class="nav-close-btn" data-nav-close-btn aria-label="Close Menu">
          <ion-icon name="close-outline"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/logomm.jpg" width="190" height="50" alt="Martcode logo">
        </a>

        <ul class="navbar-list">
          <li class="navbar-item">
            <a href="pembeli" class="navbar-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="pembeli/kategori" class="navbar-link">Kategori</a>
          </li>
          <li class="navbar-item">
            <a href="unduh" class="navbar-link">Download</a>
          </li>
          <li class="navbar-item">
            <a href="mulaimenjual" class="navbar-link">Mulai Menjual</a>
          </li>
        </ul>
      
        <ul class="nav-action-list">
          <li>
            <li class="profile-item">
              @if (auth()->check())
              <div style="text-align: center; width: 100%; margin-top: 20px;">
                <b style="font-weight: bold;">Profil</b>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
                  </form>
                  <div class="profile-dropdown">
                      <a href="{{ route('dashboard') }}" class="nav-action-btn">
                          <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
                          <span>Akun Saya</span> <!-- Teks tetap 'Akun Saya' -->
                      </a>
                      <a href="pembeli.index" class="nav-action-btn" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                          <ion-icon name="exit-outline" aria-hidden="true"></ion-icon>
                          <span>Logout</span>
                      </a>
                  
              @else
              <span>Login / Register</span>
                  
              @endif
            </a>
          </li>
          
          <li>
            <a href="/cart/index">
                <button class="nav-action-btn">
                    <!-- Icon keranjang -->
                    <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                
                    <!-- Informasi badge untuk jumlah item -->
                    <span class="nav-action-badge" id="\card" aria-hidden="true">4</span>
                </button>
            </a>
        </li>
        
        </ul>

      </nav>

    </div>
  </header>
  
<!-- - ionicon link -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>