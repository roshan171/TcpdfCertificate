<?php

use App\Http\Controllers\demoController;
use App\Http\Controllers\MarksheetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificateController;


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




Route::get('/certificate', [CertificateController::class, 'marksheet']);
Route::get('/marksheet', [MarksheetController::class, 'index']);

Route::get('/demo',[demoController::class,'demo']);
