<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::get('/home', HomeController::class)->middleware(['auth'])->name('home');

Route::get('/', [ItemController::class, 'index'])->middleware(['auth'])->name('items.index');
Route::post('/', [ItemController::class, 'index'])->middleware(['auth'])->name('items.index');
Route::get('/show/{item}', [ItemController::class, 'show'])->middleware(['auth'])->name('items.show');
Route::get('/create', [ItemController::class, 'create'])->middleware(['auth'])->name('items.create');
Route::post('/create', [ItemController::class, 'create'])->middleware(['auth'])->name('items.create');

Route::get('/edit/{item}', [ItemController::class, 'edit'])->middleware(['auth'])->name('items.edit');
Route::put('/edit/{item}', [ItemController::class, 'update'])->middleware(['auth'])->name('items.update');


// Route::get('/addToCart/{movie}', [CartController::class, 'getAddToCart'])->Middleware(['auth'])->name('movies.addToCart');
// Route::get('/addToCart/{movie}', [CartController::class, 'getAddToCart'])->Middleware(['auth'])->name('movies.addToCart');

// Route::get('/shopping-cart', [CartController::class, 'getCart'])->Middleware(['auth'])->name('movies.shoppingCart');