<?php

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

Route::get('pdf/view', 'PDFcontroller@generatePDF')->name('pdf.view');
Route::get('pdf/download', 'PDFcontroller@downloadPDF')->name('pdf.download');
