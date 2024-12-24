<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MenjualController;
use App\Http\Controllers\ProdukController;


//Perintah untuk landingpage

Route::get('/',[HomeController::class,'home']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/product',[HomeController::class,'product']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/login',[HomeController::class,'login']);


//perintah untuk pembeli

Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli.index');
Route::get('/kategori',[PembeliController::class,'kategori']);
Route::get('/profile-index',[PembeliController::class,'profile']);
Route::get('/jadipenjual',[PembeliController::class,'jadipenjual']);
Route::get('/mulaimenjual',[PembeliController::class,'mulaimenjual']);

//perintah untuk penjual

Route::get('/penjual',[MenjualController::class,'index']);
Route::get('/menjual',[MenjualController::class,'menjual']);
Route::get('/datadiri',[MenjualController::class,'datadiri']);
Route::get('/isidata',[MenjualController::class,'isidata'])->name('isidata.form');
Route::post('/isidata',[MenjualController::class,'store'])->name('isidata.post');
Route::get('/ulasan',[MenjualController::class,'ulasan']);

//perintah untuk produk 
route::get('/unggah',[ProdukController::class,'index']);

//Perintah untuk admin
require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';

Route::middleware(['auth', 'Admin'])->group(function () {
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/mulaimenjual', [PembeliController::class, 'index'])->name('pembeli.dashboard');
Route::get('/penjual-dashboard', [MenjualController::class, 'index'])->name('penjual.dashboard');
 });

Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/dashboard/barang',function(){
    return view('adminViews.components.barang');
});

Route::get('/admin/dashboard/users',[AdminController::class,'users']);
Route::get('/admin/dashboard/total',[AdminController::class,'total']);
Route::get('/admin/dashboard/kategoriproduk',[AdminController::class,'kategoriproduk']);
Route::put('/users/{id}/update',[AdminController::class,'update'])->name('users-update');
Route::get('/admin/dashboard/produk',function(){
    return view('adminViews.components.produk');
});
Route::get('/admin/dashboard/penjual',function(){
    return view('adminViews.penjual');
});
Route::get('/admin/dashboard/pemesanan',function(){
    return view('adminViews.pemesanan');
});

Route::post('/accept-user/{id}', [UserController::class, 'accept'])->name('user.accept');
Route::post('/reject-user/{id}', [UserController::class, 'rejectUser']);
Route::post('/block-user/{id}', [UserController::class, 'blockUser']);
Route::post('/accept-user/{id}', [UserController::class, 'acceptUser'])->name('accept.user');

Route::get('/admin/dashboard/produk',[AdminController::class,'produk']);

Route::get('/pembeli/dashboard', [PembeliController::class, 'index'])->name('pembeli.index');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rute untuk menolak pengguna
Route::post('/reject-user/{id}', [UserController::class, 'reject'])->name('user.reject');

// Rute untuk menampilkan cart
Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

// Rute untuk menambahkan item ke cart
Route::post('/cart/add/{id}', [CartController::class, 'addToCart'])->name('cart.add');

// Rute untuk menghapus item dari cart
Route::get('/cart/remove/{id}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// routes/web.php
Route::resource('kategori', KategoriController::class);
Route::delete('admin/dashboard/kategoriproduk/{id}', [KategoriController::class, 'destroy']);
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');


//route auth
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/auth/register', function () {
    return view('auth.register');
})->name('auth.register');