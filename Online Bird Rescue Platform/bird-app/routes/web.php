<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use Laravel\Socialite\Facades\Socialite;

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ArticelsController;
use App\Http\Controllers\frontend\BirdsController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\DonateController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\RescueController;
use App\Http\Controllers\frontend\ScienceController;
use App\Http\Controllers\frontend\Doel1Controller;
use App\Http\Controllers\frontend\Shalik1Controller;
use App\Http\Controllers\frontend\Tiya1Controller;
use App\Http\Controllers\frontend\Kingfisher1Controller;
use App\Http\Controllers\frontend\Woodpecker1Controller;
use App\Http\Controllers\frontend\Sparrow1Controller;
use App\Http\Controllers\frontend\SdiseasesController;
use App\Http\Controllers\frontend\Ds2Controller;
use App\Http\Controllers\frontend\Ds3Controller;
use App\Http\Controllers\frontend\VetsController;

use App\Http\Controllers\frontend\MsgController;
use App\Http\Controllers\VerifiedController;

use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\DashboardController;

//Routes

Route::get('/', [HomeController::class, 'index']);
Route::post('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/articles', [ArticelsController::class, 'index']);
Route::get('/birds', [BirdsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/donate', [DonateController::class, 'index']);
Route::post('/donate', [DonateController::class, 'index']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/rescue', [RescueController::class, 'index']);
Route::get('/science', [ScienceController::class, 'index']);
Route::get('/doel1', [Doel1Controller::class, 'index']);
Route::get('/shalik1', [Shalik1Controller::class, 'index']);
Route::get('/tiya1', [Tiya1Controller::class, 'index']);
Route::get('/kingfisher1', [Kingfisher1Controller::class, 'index']);
Route::get('/woodpecker1', [Woodpecker1Controller::class, 'index']);
Route::get('/sparrow1', [Sparrow1Controller::class, 'index']);
Route::get('/sdiseases', [SdiseasesController::class, 'index']);
Route::get('/ds2', [Ds2Controller::class, 'index']);
Route::get('/ds3', [Ds3Controller::class, 'index']);
Route::get('/vets', [VetsController::class, 'index']);

Route::get('/verified', [VerifiedController::class, 'index']);




//Route::get('/dashboard', function () {
 //   return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

 
Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
 
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);

Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);

Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);

Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);

Route::get('/exampleEasycheckout', function () {
    return view('exampleEasycheckout');
})->name('exampleEasycheckout');

Route::post('/exampleEasycheckout', function () {
    return view('exampleEasycheckout');
})->name('exampleEasycheckout');

Route::get('/exampleHosted', function () {
    return view('exampleHosted');
})->name('exampleHosted');

Route::post('/exampleHosted', function () {
    return view('exampleHosted');
})->name('exampleHosted');

//SSLCOMMERZ END

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');



