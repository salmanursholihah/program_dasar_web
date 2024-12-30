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

