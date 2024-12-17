<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Produk Marketplace</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .category-card {
            border: none;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }
        .category-card:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
        }
        .category-icon {
            font-size: 3rem;
        }
        .ecommerce-icon {
            color: #007bff;
        }
        .blog-icon {
            color: #28a745;
        }
        .business-icon {
            color: #17a2b8;
        }
        .education-icon {
            color: #ffc107;
        }
        .admin-icon {
            color: #6c757d;
        }
        .landingpage-icon {
            color: #fd7e14;
        }
        .btn-view-more {
            margin-top: 15px;
            border-radius: 20px;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">Kategori Produk Marketplace</h1>
        <div class="row g-4">
            <!-- Produk E-Commerce -->
            <div class="col-md-4">
                <div class="card category-card text-center p-4 shadow">
                    <div class="category-icon ecommerce-icon mb-3">
                        <i class="bi bi-bag"></i>
                    </div>
                    <h5 class="card-title">Produk E-Commerce</h5>
                    <p class="card-text">Solusi lengkap untuk toko online, termasuk fitur keranjang belanja, pembayaran aman, dan pengelolaan produk.</p>
                    <a href="#" class="btn btn-primary btn-view-more">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <!-- Blog -->
            <div class="col-md-4">
                <div class="card category-card text-center p-4 shadow">
                    <div class="category-icon blog-icon mb-3">
                        <i class="bi bi-chat-dots"></i>
                    </div>
                    <h5 class="card-title">Blog</h5>
                    <p class="card-text">Platform interaktif untuk berbagi ide, pengalaman, dan cerita dengan fitur komentar dan langganan.</p>
                    <a href="#" class="btn btn-success btn-view-more">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <!-- Web Bisnis -->
            <div class="col-md-4">
                <div class="card category-card text-center p-4 shadow">
                    <div class="category-icon business-icon mb-3">
                        <i class="bi bi-briefcase"></i>
                    </div>
                    <h5 class="card-title">Web Bisnis</h5>
                    <p class="card-text">Website profesional yang dirancang untuk meningkatkan kredibilitas perusahaan Anda dengan fitur portofolio dan kontak.</p>
                    <a href="#" class="btn btn-info btn-view-more">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <!-- Web Pendidikan -->
            <div class="col-md-4">
                <div class="card category-card text-center p-4 shadow">
                    <div class="category-icon education-icon mb-3">
                        <i class="bi bi-book"></i>
                    </div>
                    <h5 class="card-title">Web Pendidikan</h5>
                    <p class="card-text">Platform pembelajaran yang interaktif dengan fitur kursus online, jadwal kelas, dan forum diskusi.</p>
                    <a href="#" class="btn btn-warning btn-view-more">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <!-- Admin -->
            <div class="col-md-4">
                <div class="card category-card text-center p-4 shadow">
                    <div class="category-icon admin-icon mb-3">
                        <i class="bi bi-gear"></i>
                    </div>
                    <h5 class="card-title">Admin</h5>
                    <p class="card-text">Panel kontrol canggih untuk pengelolaan aplikasi Anda, termasuk statistik pengguna dan analitik.</p>
                    <a href="#" class="btn btn-secondary btn-view-more">Pelajari Lebih Lanjut</a>
                </div>
            </div>
            <!-- Landing Page -->
            <div class="col-md-4">
                <div class="card category-card text-center p-4 shadow">
                    <div class="category-icon landingpage-icon mb-3">
                        <i class="bi bi-box-arrow-in-right"></i>
                    </div>
                    <h5 class="card-title">Landing Page</h5>
                    <p class="card-text">Halaman promosi yang dirancang untuk meningkatkan konversi dan menarik pelanggan potensial.</p>
                    <a href="#" class="btn btn-orange btn-view-more" style="background-color: #fd7e14; color: white;">Pelajari Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
