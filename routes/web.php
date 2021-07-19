<?php

use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\CustomersController;
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
    return view('index');
});

Route::get('/faktury', [InvoiceController::class,'index'])->name('invoices.index');
Route::get('/faktury/add', [InvoiceController::class, 'create'])->name('invoices.create');
Route::post('/faktury/save', [InvoiceController::class, 'store'])->name('invoices.store');
Route::get('/faktury/edit/{id}', [InvoiceController::class, 'edit'])->name('invoices.edit');
Route::put('/faktury/change/{id}', [InvoiceController::class, 'update'])->name('invoices.update');
Route::delete('/faktury/delete/{id}', [InvoiceController::class, 'delete'])->name('invoices.delete');
Route::get('/faktury/{id}', [InvoiceController::class, 'show'])->name('invoices.show');

Route::resource('klienci',CustomersController::class,['names'=> 'customers']);