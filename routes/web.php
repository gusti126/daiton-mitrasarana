<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\KomentarController;
use App\Http\Controllers\FrontController;
use App\Http\Livewire\Banner;
use App\Http\Livewire\Blog;
use App\Http\Livewire\BlogDetail;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\EditBlog;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.admin');
});

// halaman depan
Route::get('/', [FrontController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/dashboard', Dashboard::class)->name('livewire-dashboard');
Route::get('blog', Blog::class)->name('livewire-blog');
Route::get('blog/{id}', BlogDetail::class)->name('livewire-blog-detail');
Route::get('blog/edit/{id}', EditBlog::class)->name('livewire-edit-blog');
Route::post('blog/update/{id}', [BlogController::class, 'update'])->name('blog-update');
Route::get('blog/hapus/{id}', [BlogController::class, 'destroy'])->name('hapus-blog');
Route::post('reply-komen/{id_komentar}', [KomentarController::class, 'balasKomentar'])->name('reply-komen');
Route::get('komentar/hapus/{id}', [KomentarController::class, 'hapusKomentar'])->name('hapus-komentar');

Route::get('banner', Banner::class)->name('livewire-banner');
