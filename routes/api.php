<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\http\Controllers\Api\ProvinsiController;    
use App\http\Controllers\Api\ApiController;    
    
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//api provinsi
Route::get('provinsi',            [ApiController::class, 'Provinsi']);
Route::post('api/store',          [ApiController::class, 'store']);
//api kota
Route::get('kota',                [ApiController::class, 'Kota']);

//api kecamatan
Route::get('kecamatan',           [ApiController::class, 'Kecamatan']);

//api kelurahan
Route::get('kelurahan',           [ApiController::class, 'Kelurahan']);

//api Rw
Route::get('rw',                  [ApiController::class, 'Rw']);

//other
// Route::get('provinsi',            [ProvinsiController::class, 'index']);
Route::get('positif',              [ApiController::class, 'Positif']);
Route::get('sembuh',               [ApiController::class, 'Sembuh']);
Route::get('meninggal',            [ApiController::class, 'Meninggal']);
Route::get('global',              [ApiController::class, 'global']);
Route::get('indonesia',           [ApiController::class, 'indonesia']);
