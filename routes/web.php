<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WelcomeController;

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

// Cette route permet d'afficher la page d'accueil
Route::get('/', [WelcomeController::class, "index"])->name("welcome");

// Cette route permet d'ajouter un produit au panier
Route::get('/add-to-cart/{product}', [CartController::class, "add"])->name("cart.add");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
