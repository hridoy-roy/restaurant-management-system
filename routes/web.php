<?php

use App\Http\Controllers\ItemsController;
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

Route::get('/admin', function () {
    return view('admin.blank-page');
});

// Route::get('/item-info', function () {
//     return view('admin.inventory.item-info');
// });

Route::post('/add/item', [ItemsController::class, 'insert']);

Route::get('/item-info', [ItemsController::class,'show']);

Route::post('/delete/item', [ItemsController::class, 'delete']);
