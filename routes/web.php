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
use App\Http\Controllers\ProfileController;

//Perintah untuk landingpage

Route::get('/',[HomeController::class,'home']);
Route::get('/about',[HomeController::class,'about']);
Route::get('/product',[HomeController::class,'product']);
Route::get('/contact',[HomeController::class,'contact']);
Route::get('/login',[HomeController::class,'login']);


//perintah untuk pembeli

Route::get('/home',[HomeController::class,'pembeli.index']);
Route::get('/pembeli', [PembeliController::class, 'index']);
Route::get('/kategori',[PembeliController::class,'kategori']);
Route::get('/jadipenjual',[PembeliController::class,'jadipenjual']);
Route::get('/mulaimenjual',[PembeliController::class,'mulaimenjual']);
Route::get('/unduh',[PembeliController::class,'unduh']);

//redirect index
Route::get('/pembeli/index', function () {
    return redirect('/pembeli');
});

//Edit Profil pembeli
Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');


//perintah untuk profil
Route::post('/datadiri', [ProfileController::class, 'store'])->name('profil.store');



//perintah untuk penjual

Route::get('/penjual',[MenjualController::class,'index']);
Route::get('/menjual',[MenjualController::class,'menjual']);
Route::get('/datadiri',[MenjualController::class,'datadiri']);
Route::get('/isidata',[MenjualController::class,'isidata'])->name('isidata.form');
Route::post('/isidata',[MenjualController::class,'store'])->name('isidata.post');
Route::get('/ulasan',[MenjualController::class,'ulasan']);

//perintah untuk produk 
route::get('/unggah',[ProdukController::class,'index']);

//rachel
route::post('/penjual/store',[ProfileController::class,'store'])->name('penjual.store');

//Perintah untuk admin
require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';

//Route::middleware(['auth', 'Admin'])->group(function () {


//Route::get('/penjual-dashboard', [MenjualController::class, 'index'])->name('penjual.dashboard');
// });
Route::middleware(['auth'])->group(function () {
    Route::get('/pembeli/index', [PembeliController::class, 'index'])->name('pembeli.index');
});

// routes/web.php

//use App\Http\Controllers\PenjualController;

// Rute untuk halaman Isi Data penjual
Route::middleware(['auth'])->group(function () {
    Route::get('/penjual/isi-data', [MenjualController::class, 'showForm'])->name('penjual.isiData');
});

Route::get('/admin/dashboard',[AdminController::class,'index']);
Route::get('/admin/dashboard/barang',function(){
    return view('adminViews.components.barang');
});

Route::get('/admin/dashboard/users',[AdminController::class,'users']);
Route::get('/admin/dashboard/kategoriproduk',[AdminController::class,'kategoriproduk']);
Route::put('/users/{id}/update',[AdminController::class,'update'])->name('users-update');
Route::get('/admin/dashboard/produk',function(){
    return view('adminViews.components.produk');});
Route::get('/admin/dashboard/penjual',function(){
    return view('adminViews.penjual');});
Route::get('/admin/dashboard/pemesanan',function(){
    return view('adminViews.pemesanan');});

Route::resource('kategori', KategoriController::class);
Route::post('/accept-user/{id}', [UserController::class, 'accept'])->name('user.accept');
Route::post('/reject', [UserController::class, 'reject']);
Route::post('/block-user/{id}', [UserController::class, 'blockUser']);
Route::post('/accept-user/{id}', [UserController::class, 'acceptUser'])->name('accept.user');

Route::get('/admin/dashboard/produk',[AdminController::class,'produk']);

Route::get('/pembeli/dashboard', [PembeliController::class, 'index'])->name('pembeli.index');




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

// kategoricontroller
Route::get('/kategoriproduk', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');
Route::delete('/kategori/{id}', [KategoriController::class, 'destroy'])->name('kategori.destroy');
Route::get('/kategoriproduk/{id}/edit', [KategoriController::class, 'edit'])->name('kategori.edit');
Route::put('/kategori/{id}', [KategoriController::class, 'update'])->name('kategori.update');
Route::resource('kategori', KategoriController::class);





