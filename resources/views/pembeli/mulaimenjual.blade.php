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
    - preload banner
  -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">
<style>.navbar {
  display: flex;
  justify-content: space-between; /* Elemen tersebar di kiri dan kanan */
  align-items: center; /* Selaraskan elemen secara vertikal */
}

</style>

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
        <img src="./assets/images/logomm.jpg" width="160" height="50" alt="Footcap logo">
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
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <article>

      <!-- - #HERO-->
      <section class="section hero" style="background-image: url('./assets/images/harus.png')">
        <div class="container">

        <h2 class="h1 hero-title" style="font-size: 50px;">
  <strong>Temukan Lebih dari 2 Juta </strong></h2>
  <h3 class="h1 hero-title" style="font-size: 50px;">
  <strong>Alasan untuk Berkarya! </strong> </h3>
<p class="hero-text" style="font-size: 20px;">
  "ingin Menjadi penjual dan menjual karya anda di Martcode?"
</p>  
<!-- Tombol Tambah menjadi penulis-->
<button class="nav-action-btn">
  <a href="/isidata" class="btn success">Menjadi Penulis Martcode</a>

        </div>
      </section>
      <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">Martcode</a>
        </p>
      </div>
    </div>