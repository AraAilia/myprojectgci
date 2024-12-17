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
        <li>
          <!-- Tombol Tambah menjadi penulis-->
              <button class="nav-action-btn">
              <a href="#" class="btn success">Menjadi Penulis Martcode</a>
         <!-- Tombol Tambah menjadi sign-->
              <a href="#" class="btn success">Masuk</a>
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
<a href="{{ route('unggah') }}" class="btn-primary">Masuk</a>

        </div>
      </section>
      <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">Martcode</a>
        </p>
      </div>
    </div>