<?php

use App\Http\Controllers\DealerToCustomerController;
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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::prefix('messageSending')->group(function (){
    Route::controller(DealerToCustomerController::class)->group(function (){
        Route::get('Create','create')->name('CreateMessage');
        Route::post('StoreMessage','store')->name('StoreMessage');
    })->name('DealerToMessage');
})->name('Sending')->middleware('auth');

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'expert',], function () {

    Route::group(['prefix' => 'products',], function () {

        Route::get('/add_to_bundle', function () {
            return view('expertDealer.product.add_to_bundle');
        })->name('expert.add_to_bundle.product');

    });

    Route::group(['prefix' => 'bundles',], function () {

        Route::get('/bundles', function () {
            return view('expertDealer.bundle.index');
        })->name('expert.index.bundle');

        Route::get('/create', function () {
            return view('expertDealer.bundle.create');
        })->name('expert.create.bundle');
    });
})->middleware('auth');


