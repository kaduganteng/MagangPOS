<?php

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
    return view('welcome');
});

Route::get('/manu', function () {
    return view('manu');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/inventory', 'InventoryController@index')->name('inventory');
Route::get('/pengembalian_barang', 'PengembalianBarangController@index')->name('PengembalianBarang');
Route::get('/pemasukan_barang', 'PemasukanBarangController@index')->name('PemasukanBarang');
Route::get('/kategoriInventory', 'KategoriInventoryController@index')->name('kategori_inventory');
