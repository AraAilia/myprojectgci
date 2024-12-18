<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\AuthController;



route::get('/',[HomeController::class,'home']);
route::get('/about',[HomeController::class,'about']);
route::get('/product',[HomeController::class,'product']);
route::get('/contact',[HomeController::class,'contact']);
route::get('/login',[HomeController::class,'login']);

route::get('/penjual',[PenjualController::class,'index']);
route::get('/menjual',[PenjualController::class,'menjual']);
route::get('/datadiri',[PenjualController::class,'datadiri']);
route::get('/isidata',[PenjualController::class,'isidata'])->name('isidata.form');
route::post('/isidata',[PenjualController::class,'store'])->name('isidata.post');
route::get('/ulasan',[PenjualController::class,'ulasan']);
route::get('/unggah',[PenjualController::class,'unggah']);

route::get('/pembeli',[PembeliController::class,'index']);
Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli.index');
route::get('/kategori',[PembeliController::class,'kategori']);
route::get('/profile-index',[PembeliController::class,'profile']);
route::get('/jadipenjual',[PembeliController::class,'jadipenjual']);
route::get('/mulaimenjual',[PembeliController::class,'mulaimenjual']);


// Route::prefix('pembeli')->middleware('auth:pembeli')->group(function () {
//     route::get('/penjual',[PenjualController::class,'index']);
//     route::get('/menjual',[PenjualController::class,'menjual']);
//     route::get('/datadiri',[PenjualController::class,'datadiri']);
//     route::get('/isidata',[PenjualController::class,'isidata'])->name('isidata.form');
//     route::post('/isidata',[PenjualController::class,'store'])->name('isidata.post');
//     route::get('/ulasan',[PenjualController::class,'ulasan']);
//     route::get('/unggah',[PenjualController::class,'unggah']);
    
//     Route::get('/pembeli', [PembeliController::class, 'index'])->name('pembeli.index');
//     route::get('/kategori',[PembeliController::class,'kategori']);
//     route::get('/profile-index',[PembeliController::class,'profile']);
//     route::get('/jadipenjual',[PembeliController::class,'jadipenjual']);
//     route::get('/mulaimenjual',[PembeliController::class,'mulaimenjual']);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
    
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

require __DIR__.'/admin-auth.php';

// Route::middleware(['auth', 'Admin'])->group(function () {
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
//     Route::get('/mulaimenjual', [PembeliController::class, 'index'])->name('pembeli.dashboard');
//     Route::get('/penjual-dashboard', [PenjualController::class, 'index'])->name('penjual.dashboard');
// });

route::get('/admin/dashboard',[AdminController::class,'index']);
route::get('/admin/dashboard/barang',function(){
    return view('adminViews.components.barang');
});
route::get('/admin/dashboard/users',[AdminController::class,'users']);
route::get('/admin/dashboard/total',[AdminController::class,'total']);
route::put('/users/{id}/update',[AdminController::class,'update'])->name('users-update');
route::get('/admin/dashboard/produk',function(){
    return view('adminViews.components.produk');
});
route::get('/admin/dashboard/penjual',function(){
    return view('adminViews.penjual');
});
route::get('/admin/dashboard/pemesanan',function(){
    return view('adminViews.pemesanan');
});

Route::post('/accept-user/{id}', [UserController::class, 'acceptUser']);
Route::post('/reject-user/{id}', [UserController::class, 'rejectUser']);
Route::post('/block-user/{id}', [UserController::class, 'blockUser']);
Route::post('/accept-user/{id}', [UserController::class, 'acceptUser'])->name('accept.user');

route::get('/admin/dashboard/produk',[AdminController::class,'produk']);

Route::get('/index', function () {
    return view('livewire/admin.index');
});

// x

Route::get('/auth/register', function () {
    return view('auth.register');
})->name('auth.register');




// Rute untuk menerima pengguna
Route::post('/accept-user/{id}', [UserController::class, 'accept'])->name('user.accept');

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

