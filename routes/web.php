<?php

use App\Http\Controllers\InventoryController;
use App\Http\Middleware\isAdmin;
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
Route::group(['middleware' => 'isAdmin'], function () {
    Route::group(['prefix' => 'admin'], function () {

        Route::get('/inventory', 'InventoryController@index')->name('inventory');
        Route::get('/pengembalian_barang/create', 'PengembalianBarangController@create')->name('PengembalianBarang.create');
        Route::post('/pengembalian_barang/store', 'PengembalianBarangController@store')->name('PengembalianBarang.store');
        Route::get('/pengembalian_barang', 'PengembalianBarangController@index')->name('PengembalianBarang.index');
        Route::get('/pemasukan_barang', 'PemasukanBarangController@index')->name('PemasukanBarang');
        Route::get('/kategoriInventory', 'KategoriInventoryController@index')->name('kategori_inventory');
        Route::get('/inventory/create', 'InventoryController@create')->name('inventory.create');
        Route::post('/inventory/store', 'InventoryController@store')->name('inventory.store');
        Route::get('/pengajuan/create', 'PengajuanController@create')->name('pengajuan.create');
        Route::post('/pengajuan/store', 'PengajuanController@store')->name('pengajuan.store');
        Route::post('/kategori/store', 'KategoriInventoryController@store')->name('kategori.store');
        Route::get('/kategori/create', 'KategoriInventoryController@create')->name('kategori.create');
        Route::get('/peminjaman/create', 'PeminjamanController@create')->name('peminjaman.create');
        Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman.index');
        Route::get('/pemasangan/create', 'PemasanganController@create')->name('pemasangan.create');
        Route::post('/pemasangan/store', 'PemasanganController@store')->name('pemasangan.store');
        Route::get('/pemasangan', 'PemasanganController@index')->name('pemasangan.index');
        Route::get('/dashboard', 'DashboardAdminController@index')->name('dashboard');
        Route::get('/inventory/delete/{id}', 'InventoryController@destroy')->name('inventory.destroy');
    });
});

Route::get('/userpinjam/create', 'UserpinjamController@index')->name('userpinjam');
Route::post('/peminjaman/store', 'UserpinjamController@store')->name('peminjaman.store');
