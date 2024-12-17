<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\PenjualContoller;

route::get('/',[HomeController::class,'home']);
route::get('about',[HomeController::class,'about']);


route::get('pembeli',[PembeliController::class,'index']);

route::get('penjual',[PenjualContoller::class,'index']);
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


route::get('/admin/dashboard',[AdminController::class,'index']);
route::get('/admin/dashboard/barang',function(){
    return view('adminViews.components.barang');
});
route::get('/admin/dashboard/users',[AdminController::class,'users']);
route::put('/users/{id}/update',[AdminController::class,'update'])->name('users-update');
route::get('/admin/dashboard/produk',function(){
    return view('adminViews.components.produk');
});

route::get('/admin/dashboard/produk',[AdminController::class,'produk']);

Route::get('/index', function () {
    return view('livewire/admin.index');
});
