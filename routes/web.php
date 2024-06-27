<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ProductController::class, 'landing'])->name('Landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->group(function () {
    Route::get('/User', [UserController::class, 'index'])->name('User-Index');
    Route::post('/User/Store', [UserController::class, 'store'])->name('User-Store');
    Route::put('/User-Update/{id}', [UserController::class, 'update'])->name('User-Update');
    Route::delete('/User/{id}', [UserController::class, 'destroy'])->name('User-Delete');
})->middleware(['auth', 'verified'])->name('User');

Route::middleware('auth')->group(function () {
    Route::get('/Detail/Order', [OrderController::class, 'indexdetail'])->name('Order-Detail-Index');
    Route::get('/Order', [OrderController::class, 'index'])->name('Order-Index');
    Route::get('/Home', [OrderController::class, 'home'])->name('Home');
    Route::get('/Order/create/{id}', [OrderController::class, 'create'])->name('Order-Create');
    Route::get('/Order/detail/{id}', [OrderController::class, 'detail'])->name('Order-Detail');
    Route::post('/Order/Detail/Store', [OrderController::class, 'store_detail'])->name('Order-Detail-Store');
    Route::post('/Order/Store', [OrderController::class, 'store'])->name('Order-Store');
    Route::put('/Order/{id}', [OrderController::class, 'update'])->name('Order-Update');
    Route::delete('/Order/{id}', [OrderController::class, 'destroy'])->name('Order-Delete');
})->middleware(['auth', 'verified'])->name('Order');

Route::middleware('auth')->group(function () {
    Route::get('/Product', [ProductController::class, 'index'])->name('Product-Index');
    Route::post('/Product/Store', [ProductController::class, 'store'])->name('Product-Store');
    Route::put('/Product/{id}', [ProductController::class, 'update'])->name('Product-Update');
    Route::delete('/Product/{id}', [ProductController::class, 'destroy'])->name('Product-Delete');
})->middleware(['auth', 'verified'])->name('Product');

Route::middleware('auth')->group(function () {
    Route::get('/Transactions/All', [TransactionController::class, 'all'])->name('Transactions-all');
    Route::get('/Transactions/Status Produksi/{status}', [TransactionController::class, 'index'])->name('Transactions-Index');
    Route::get('/Transactions/Status Transaksi/{status_transaksi}', [TransactionController::class, 'indextransaksi'])->name('Transactions-Index-Transaksi');
    Route::get('/Transactions/Lunas', [TransactionController::class, 'indexlunas'])->name('Transactions-Index-Lunas');
    Route::post('/Transactions/Pay', [TransactionController::class, 'store'])->name('Transactions-Store');
    Route::put('/Transactions-UpdateStatus/{id}', [TransactionController::class, 'updatestatus'])->name('Transactions-Update');

    Route::delete('/Transactions/{id}', [TransactionController::class, 'destroy'])->name('Transactions-Delete');
})->middleware(['auth', 'verified'])->name('Transactions');




require __DIR__.'/auth.php';
