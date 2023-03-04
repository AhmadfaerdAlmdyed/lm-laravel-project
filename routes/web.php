<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

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
    return view('admin.home');
});

// Route::prefix('admin')->group(function(){
//     Route::get('/hosptial/index', [HosptialController::class, 'index'])->name('hospital.index');
//     Route::get('/hosptial/create' , [HosptialController::class , 'create']);
//     Route::post('/hosptial/store', [HosptialController::class, 'store']);
//     Route::get('/hosptial/show/{id}', [HosptialController::class, 'show']);
//     Route::put('/hosptial/edit/{id}', [HosptialController::class, 'edit']);
//     Route::post('/hosptial/update/{id}', [HosptialController::class, 'update']);
//     Route::delete('/hosptial/destroy/{id}', [HosptialController::class, 'destroy']);
// });

// Route::get('/welcome', 'WelcomeController@welcome');
// Route::get('/welcome' , [WelcomeController::class , 'welcome']);


Route::resource('hospitals', HospitalController::class);
Route::resource('majors' , MajorController::class);
Route::resource('doctors', DoctorController::class);
Route::fallback(function () {
    return view('error404');
});

// /*
//  WelcomeController@welcome
// */
// // Route::post();
// // Route::delete();
// /*
// get
// post
// put
// patch
// delete
// options
// head
// */

// /*
// model binding
// attribute binging
