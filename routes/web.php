<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});
//Dashboard umum
Route::get('/dashboardpermintaan', function () {
    return view('permintaanproduksi/dashboardpermintaan');
});
Route::get('/dashboardworksheet', function () {
    return view('worksheet/dashboardworksheet');
});

//Permintaan Produksi
Route::get('/permintaanblmacc', function () {
    return view('permintaanproduksi/permintaanblmacc');
});
Route::get('/permintaanacc', function () {
    return view('permintaanproduksi/permintaanacc');
});
Route::get('/inputpermintaan', function () {
    return view('permintaanproduksi/inputpermintaan');
});
Route::get('/detailpermintaan', function () {
    return view('permintaanproduksi/detailpermintaan');
});

//Approval Permintaan
Route::get('/dashboardapprovalpermintaan', function () {
    return view('approvalpermintaan/dashboardapprovalpermintaan');
});
Route::get('/approvalpermintaan', function () {
    return view('approvalpermintaan/approvalpermintaan');
});

//Worksheet
Route::get('/dashboardworksheetproduksi', function () {
    return view('worksheet/dashboardworksheetproduksi');
});
Route::get('/inputworksheet', function () {
    return view('worksheet/inputworksheet');
});
Route::get('/detailworksheet', function () {
    return view('worksheet/detailworksheet');
});