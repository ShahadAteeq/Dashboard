<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\DashboardController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ItemsController::class,'ShowItemGroup'])->name('welcome');
Route::get('/showproduct/{id}',[ItemsController::class,'Showproduct'])->name('showproduct');
Route::get('/addtocart/{id}',[ItemsController::class,'Addtocart'])->name('addtocart');
Route::get('/checkout',[ItemsController::class,'Checkout'])->name('checkout');
Route::get('/bills',[ItemsController::class,'Bills'])->name('bills');

//cpanel
Route::get('/cpanel',[DashboardController::class,'DisplayItem'])->name('controlpanel');

Route::get('/additem',[DashboardController::class,'displayadditemgroup'])->name('additem');

Route::get('/Additems',[ItemsController::class,'displayadditem'])->name('Additems');

Route::get('/logout',[DashboardController::class,'logout'])->name('logout');
//end cpanel

// groupitem in database
Route::get('/groupitems',[ItemsController::class,'GetItemGroup'])->name('groupitems');

Route::post('saves',[ItemsController::class,'SaveGroupsItems'])->name('saves');

Route::get('saves',[ItemsController::class,'SaveGroupsItems'])->name('saves');

Route::get('/del{x}',[ItemsController::class,"del"])->name('del');

Route::get('/edit{x}',[ItemsController::class,'edit'])->name('edit');

Route::post('/update',[ItemsController::class,'update'])->name('update');
// end groupitem in database
 
//items in database
Route::get('/items',[ItemsController::class,'GetItem'])->name('items');

Route::get('save',[ItemsController::class,'SaveItems'])->name('save');

Route::post('save',[ItemsController::class,'SaveItems'])->name('save');

Route::get('/delete{x}',[ItemsController::class,"delete"])->name('delelet');

Route::get('/edit{x}',[ItemsController::class,'Edite'])->name('edit');

Route::post('/update',[ItemsController::class,'Updite'])->name('update');
// end items in database

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
