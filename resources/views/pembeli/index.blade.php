<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
=======

>>>>>>> a550c6faa6725be05dc0db278ece1e4eeb810fbf
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MARTCODE</title>

<<<<<<< HEAD
=======
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
  
>>>>>>> a550c6faa6725be05dc0db278ece1e4eeb810fbf
  <style>
 /* Kontainer untuk posisi tengah */
.centered-container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 100%; /* Mengisi lebar layar */
  max-width: 600px; /* Batas lebar form */
  text-align: center; /* Tengah secara horizontal */
  padding: 20px; /* Tambah sedikit ruang */
}

/* Tata letak form */
.search-form {
  display: flex;
  gap: 10px; /* Jarak antar elemen */
}

/* Gaya input */
.form-control {
  flex: 1; /* Isi seluruh ruang yang tersedia */
  padding: 5px;
  border-radius: 5px;
  border: 1px solid #ddd;
  font-size: 1rem;
}

/* Gaya tombol */
.btn {
  padding: 10px 20px;
  border-radius: 5px;
  font-size: 1rem;
  color: white;
  background-color: #007bff;
  border: none;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.btn:hover {
  background-color: #0056b3;
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
            <a href="home" class="navbar-link">Home</a>
          </li>
          <li class="navbar-item">
            <a href="kategori" class="navbar-link">Kategori</a>
          </li>
          <li class="navbar-item">
            <a href="product" class="navbar-link">Download</a>
          </li>
          <li class="navbar-item">
            <a href="mulaimenjual" class="navbar-link">Mulai Menjual</a>
          </li>
        </ul>
      
        <ul class="nav-action-list">

          <!-- Button -->




<!-- JavaScript to perform search -->
<script>
  function performSearch() {
    // Get the search input and list items
    const searchQuery = document.getElementById('searchInput').value.toLowerCase();
    const items = document.querySelectorAll('#searchList li');
    
    // Loop through each list item and hide those that don't match the search query
    items.forEach(item => {
      const itemName = item.textContent.toLowerCase();
      if (itemName.includes(searchQuery)) {
        item.style.display = '';
      } else {
        item.style.display = 'none';
      }
    });
  }
</script>

<!-- JavaScript -->
<script>
  function performSearch() {
    const query = document.getElementById('searchInput').value;
    
    // Cek jika input pencarian kosong
    if (query.trim() === '') {
      alert('Please enter a search query!');
      return;
    }

    // Tampilkan hasil pencarian (di sini hanya alert untuk demonstrasi)
    alert(`You searched for: ${query}`);
    
    // Di sini, Anda bisa melakukan pencarian ke server atau menyaring data berdasarkan query
  }
</script>



          <li>
            <a href="/login" class="nav-action-btn">
              <ion-icon name="person-outline" aria-hidden="true"></ion-icon>
              @if (auth()->check())
              <span>Logout</span>
                  
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
 
  <div class="container d-flex justify-content-center" style="margin-top: 20px;"> <!-- Jarak dengan navbar -->
    <form class="search-form d-flex">
      <input class="form-control me-2" type="search" placeholder="Search Products" aria-label="Search">
      <button class="btn btn-primary" type="submit">Search</button>
    </form>
  </div>
  

 
      <!-- 
<<<<<<< HEAD
        COMPONENT INI BERMASALAH COBA DI CEK KEMBALI HEHEHEHEHEH
      {{-- @include('home.product') --}}
=======
      @include('home.product')
>>>>>>> a550c6faa6725be05dc0db278ece1e4eeb810fbf
        - #PRODUCT
      -->

      <section class="section product">
        <div class="container">

          <h2 class="h2 section-title">Bestsellers Products</h2>

          <ul class="filter-list">

            <li>
              <button class="filter-btn  active">All</button>
            </li>

            <li>
              <button class="filter-btn">Blog</button>
            </li>

            <li>
              <button class="filter-btn">Website Bisnis</button>
            </li>

            <li>
              <button class="filter-btn">Portal Berita</button>
            </li>

            <li>
              <button class="filter-btn">Website Pendidikan</button>
            </li>

            <li>
              <button class="filter-btn">E-commerce</button>
            </li>

          </ul>

          <ul class="product-list">

            <li class="product-item">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/webschool.jpg" width="312" height="350" loading="lazy"
                    alt="Website Pendidikan" class="image-contain">

                  <div class="card-badge">New</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">

                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  

                  <h3 class="h3 card-title">
                    <a href="#">Website Pendidikan</a>
                  </h3>

                  <data class="card-price" value="180.85">$180.85</data>

                </div>

              </div>
            </li>

            <li class="product-item">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/portal.jpg" width="312" height="350" loading="lazy"
                    alt=" " class="image-contain">

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

<<<<<<< HEAD
                    <li class="card-action-ite">
=======
                    <li class="card-action-item">
>>>>>>> a550c6faa6725be05dc0db278ece1e4eeb810fbf

                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                 

                  <h3 class="h3 card-title">
                    <a href="#">Portal Berita</a>
                  </h3>

                  <data class="card-price" value="190.85">$190.85</data>

                </div>

              </div>
            </li>

            <li class="product-item">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/ecom.jpg" width="312" height="350" loading="lazy"
                    alt="Simple Fabric Shoe" class="image-contain">

                  <div class="card-badge">New</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">

                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">
                    <a href="#">Website Ecommerce</a>
                  </h3>

                  <data class="card-price" value="160.85">$160.85</data>

                </div>

              </div>
            </li>

            <li class="product-item">
              <div class="product-card" tabindex="0">

                <figure class="card-banner">
                  <img src="./assets/images/bussi.jpg" width="312" height="350" loading="lazy"
                    alt="Air Jordan 7 Retro " class="image-contain">

                  <div class="card-badge"> -25%</div>

                  <ul class="card-action-list">

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-1">
                        <ion-icon name="cart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-1">Add to Cart</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-2">
                        <ion-icon name="heart-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-2">Add to Whishlist</div>
                    </li>

                    <li class="card-action-item">
                      <button class="card-action-btn" aria-labelledby="card-label-3">
                        <ion-icon name="eye-outline"></ion-icon>
                      </button>

                      <div class="card-action-tooltip" id="card-label-3">Quick View</div>
                    </li>

                    <li class="card-action-item">

                    </li>

                  </ul>
                </figure>

                <div class="card-content">

                  

                  <h3 class="h3 card-title">
                    <a href="#">Website Bussines </a>
                  </h3>

                  <data class="card-price" value="170.85">$170.85 <del>$200.21</del></data>

                </div>

              </div>
            </li>

            <li class="product-item">
              <div class="product-card" tabindex="0">

              </div>
            </li>

          </ul>

          
  <footer class="footer">

    <div class="footer-top section">
      <div class="container">

       

          </ul>

        </div>

        <div class="footer-link-box">

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">Contact Us</p>
            </li>

            <li>
              <address class="footer-link">
                <ion-icon name="location"></ion-icon>

                <span class="footer-link-text">
                  JL.HR.Soebrantas,Sidomulyo Bar.,Kec.Tampan,Kota Pekanbaru,Riau 28293
                </span>
              </address>
            </li>

            <li>
              <a href="tel:+557343673257" class="footer-link">
                <ion-icon name="call"></ion-icon>

                <span class="footer-link-text">+85825133018</span>
              </a>
            </li>

            <li>
              <a href="mailto:footcap@help.com" class="footer-link">
                <ion-icon name="mail"></ion-icon>

                <span class="footer-link-text">martcode@gmail.com</span>
              </a>
            </li>

          </ul>

          <ul class="footer-list">

            <li>
              <p class="footer-list-title">My Account</p>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">My Account</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">View Cart</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">Wishlist</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">Compare</span>
              </a>
            </li>

            <li>
              <a href="#" class="footer-link">
                <ion-icon name="chevron-forward-outline"></ion-icon>

                <span class="footer-link-text">New Products</span>
              </a>
            </li>

          </ul>

          
              </tbody>
            </table>

         
        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="#" class="copyright-link">Martcode</a>
        </p>

      </div>
    </div>


        </div>
      </section>
<<<<<<< HEAD
      
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
 
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@400;500;700&display=swap"
    rel="stylesheet">

  <!-- 
    - preload banner
  -->
  <link rel="preload" href="./assets/images/hero-banner.png" as="image">
  
=======
>>>>>>> a550c6faa6725be05dc0db278ece1e4eeb810fbf
       <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>