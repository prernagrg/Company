<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FeatureController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PortfolioImgController;
use App\Http\Controllers\PricingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SiteConfigController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'index'])->name('home');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/services', [FrontendController::class, 'services'])->name('services');
Route::get('/team', [FrontendController::class, 'team'])->name('team');
Route::get('/portfolio',[FrontendController::class,'portfolio'])->name('portfolio');
Route::get('/pricing',[FrontendController::class,'pricing'])->name('pricing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog-single', function () {
    return view('Company.blog-single');
});

Route::get('/blog', function () {
    return view('Company.blog');
});



Route::get('/portfolio-details', function () {
    return view('Company.portfolio-details');
});

Route::get('/testimonials', function () {
    return view('Company.testimonials');
});

Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('Company.admin.index');
    });
    Route::resource('/Services', ServicesController::class);
    Route::resource('/Files', FileController::class);
    Route::resource('/About', AboutController::class);
    Route::resource('/Team', TeamController::class);
    Route::resource('/Skills', SkillController::class);
    Route::resource('/Settings', SiteConfigController::class);
    Route::resource('/Carousel', CarouselController::class);
    Route::resource('/Client', ClientController::class);
    Route::resource('/Feature', FeatureController::class);
    Route::resource('/App',AppController::class);
    Route::resource('/Web',WebController::class);
    Route::resource('/Card',CardController::class);
    Route::resource('/Pricing', PricingController::class);
    Route::resource('/Portfolio_img',PortfolioImgController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
