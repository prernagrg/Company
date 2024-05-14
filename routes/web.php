<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SiteConfigController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return view('Company.index');
});

Route::get('/about', function () {
    return view('Company.about');
});

Route::get('/blog-single', function () {
    return view('Company.blog-single');
});

Route::get('/blog', function () {
    return view('Company.blog');
});

Route::get('/contact', function () {
    return view('Company.contact');
});

Route::get('/portfolio-details', function () {
    return view('Company.portfolio-details');
});

Route::get('/portfolio', function () {
    return view('Company.portfolio');
});

Route::get('/pricing', function () {
    return view('Company.pricing');
});

Route::get('/services', function () {
    return view('Company.services');
});

Route::get('/team', function () {
    return view('Company.team');
});

Route::get('/testimonials', function () {
    return view('Company.testimonials');
});

Route::prefix('/admin')-> middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('Company.admin.index');
    });
    Route::resource('/Services', ServicesController::class);
    Route::resource('/Files',FileController::class);
    Route::resource('/About',AboutController::class);
    Route::resource('/Team',TeamController::class);
    Route::resource('/Skills', SkillController::class);
    Route::resource('/Settings', SiteConfigController::class);
    Route::resource('/Carousel', CarouselController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
