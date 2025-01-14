<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tentang', function () {
    return view('tentang');
});
Route::get('/jurusan', function () {
    return view('jurusan');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/akademik', function () {
    return view('akademik');
});
