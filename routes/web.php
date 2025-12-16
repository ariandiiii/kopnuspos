<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', function(){
    return view('home');
});

Route::get('/', function () {

    $produk = [
        [
            'nama' => 'Meja Kayu',
            'harga' => 1500000
        ],
        [
            'nama' => 'Kursi Santai',
            'harga' => 750000
        ],
        [
            'nama' => 'Lemari Minimalis',
            'harga' => 2500000
        ],
    ];

    return view('produk', compact('produk'));
});
