<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// html file
Route::get('/html', function () {
    return view('program_web_dasar.html_dasar');
});


// semantic
Route::get('/semantic', function () {
    return view('program_web_dasar.semantic_html');
});

// media
Route::get('/media', function () {
    return view('program_web_dasar.media_html');
});

// table dan form
Route::get('/tableform', function () {
    return view('program_web_dasar.table_dan_form');
});

// css style dasar
Route::get('/css', function () {
    return view('program_web_dasar.css_in_html');
});

// contoh desain
Route::get('/contoh', function () {
    return view('program_web_dasar.contoh_desain');
});

// contoh desain2
Route::get('/contoh2', function () {
    return view('program_web_dasar.contoh_desain2');
});

// contoh desain3
Route::get('/contoh3', function () {
    return view('program_web_dasar.contoh_desain3_responsif');
});

// minggu ke dua profile html
Route::get('/profile-html', function () {
    return view('minggu_kedua_program_dasar.profile_with_html');
});
// minggu ke dua animasi dan transisi
Route::get('/animasi-transisi', function () {
    return view('minggu_kedua_program_dasar.animasi_transisi');
});
// minggu ke dua profile css
Route::get('/profile-css', function () {
    return view('minggu_kedua_program_dasar.profile_with_css');
});
// minggu ke dua halaman with bootstrap
Route::get('/halaman-bootstrap', function () {
    return view('minggu_kedua_program_dasar.halaman_with_bootstrap');
});
// minggu ke dua kalkulator with javascript
Route::get('/kakulator-js', function () {
    return view('minggu_kedua_program_dasar.kalkulator_with_javasript');
});
// minggu ke tiga Doom Manipulation (Mengubah konten HTML dengan JavaScript )
Route::get('/html-with-js', function () {
    return view('minggu_ketiga.ubah_konten_html_with_javascript');
});
// minggu ke tiga Doom Manipulation event listener (Membuat tombol interaktif )
Route::get('/tombol-interaktif', function () {
    return view('minggu_ketiga.tombol_interaktif');
});
// minggu ke tiga Doom Manipulation (Membuat daftar dinamis )
Route::get('/tombol-interaktif', function () {
    return view('minggu_ketiga.membuat_daftar_dinamis');
});

