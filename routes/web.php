<?php

use App\Http\Controllers\FileController;
use App\Models\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
    $file = File::all();
    return view('welcome',compact('file'));
});

Route::get('/downloadPdf',[FileController::class,'downloadPdf']);
