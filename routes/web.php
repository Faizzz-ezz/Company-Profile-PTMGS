<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/tentang-kami', function () {
    return view('pages.tentang-kami');
})->name('tentang-kami');

Route::get('/mangrove', function () {
    return view('pages.mangrove');
})->name('mangrove');

Route::get('/jenis-mangrove', function () {
    return view('pages.jenis-mangrove');
})->name('jenis-mangrove');

Route::get('/perawatan', function () {
    return view('pages.perawatan');
})->name('perawatan');

Route::get('/hubungi-kami', function () {
    return view('pages.hubungi-kami');
})->name('hubungi-kami');

Route::post('/hubungi-kami/kirim', [ContactController::class, 'sendMessage'])->name('hubungi-kami.kirim');
Route::post('/newsletter/berlangganan', [ContactController::class, 'subscribe'])->name('newsletter.berlangganan');
