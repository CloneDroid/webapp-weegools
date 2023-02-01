<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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

Route::middleware(['auth'])->get('/', [HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('announcements')->group(function () {
        Route::get('/', [AnnouncementController::class, 'index'])->name('announcements.index');
        Route::get('/create', [AnnouncementController::class, 'create'])->name('announcements.create');
        Route::post('/', [AnnouncementController::class, 'store'])->name('announcements.store');
        Route::get('/{id}', [AnnouncementController::class, 'show'])->name('announcements.show');
        Route::get('/{id}/edit', [AnnouncementController::class, 'edit'])->name('announcements.edit');
        Route::put('/{id}', [AnnouncementController::class, 'update'])->name('announcements.update');
        Route::delete('/{id}', [AnnouncementController::class, 'destroy'])->name('announcements.destroy');
    });
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('menus')->group(function () {
        Route::get('/', [MenuController::class, 'index'])->name('menus.index');
        Route::get('/create', [MenuController::class, 'create'])->name('menus.create');
        Route::post('/', [MenuController::class, 'store'])->name('menus.store');
        Route::get('/{id}', [MenuController::class, 'show'])->name('menus.show');
        Route::get('/{id}/edit', [MenuController::class, 'edit'])->name('menus.edit');
        Route::put('/{id}', [MenuController::class, 'update'])->name('menus.update');
        Route::delete('/{id}', [MenuController::class, 'destroy'])->name('menus.destroy');
    });
});


Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'admin'])->name('admin');
        Route::get('/users', [AdminController::class,'users'])->name('admin.users');
        Route::delete('users/{user}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
        Route::get('/announcements', [AnnouncementController::class, 'index'])->name('admin.announcements.index');
        Route::get('/announcements/create', [AnnouncementController::class, 'create'])->name('admin.announcements.create');
        Route::post('announcements/', [AnnouncementController::class, 'store'])->name('admin.announcements.store');
        Route::get('announcements/{id}', [AnnouncementController::class, 'show'])->name('admin.announcements.show');
        Route::get('announcements/{id}/edit', [AnnouncementController::class, 'edit'])->name('admin.announcements.edit');
        Route::put('announcements/{id}', [AnnouncementController::class, 'update'])->name('admin.announcements.update');
        Route::delete('announcements/{id}', [AnnouncementController::class, 'destroy'])->name('admin.announcements.destroy');
        Route::get('/menus', [MenuController::class, 'index'])->name('admin.menus.index');
        Route::get('/menus/create', [MenuController::class, 'create'])->name('admin.menus.create');
        Route::post('menus/', [MenuController::class, 'store'])->name('admin.menus.store');
        Route::get('menus/{id}', [MenuController::class, 'show'])->name('admin.menus.show');
        Route::get('menus/{id}/edit', [MenuController::class, 'edit'])->name('admin.menus.edit');
        Route::put('menus/{id}', [MenuController::class, 'update'])->name('admin.menus.update');
        Route::delete('menus/{id}', [MenuController::class, 'destroy'])->name('admin.menus.destroy');
    });
});

require __DIR__.'/auth.php';
