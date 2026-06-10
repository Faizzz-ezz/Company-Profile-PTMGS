<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

Route::get('/', function () {
    $videos = [];
    $files = File::files(public_path('assets/video'));
    foreach ($files as $file) {
        $ext = strtolower($file->getExtension());
        if (in_array($ext, ['mp4', 'webm', 'ogg', 'mov', 'avi'])) {
            $videos[] = [
                'name' => $file->getFilename(),
                'path' => 'assets/video/' . $file->getFilename(),
            ];
        }
    }
    return view('pages.beranda', compact('videos'));
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
Route::get('/galeri-video', [VideoController::class, 'index'])->name('galeri-video');
Route::post('/galeri-video/upload', [VideoController::class, 'upload'])->name('video.upload');
Route::delete('/galeri-video/{filename}', [VideoController::class, 'destroy'])->name('video.destroy');
