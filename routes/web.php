<?php

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
    return view('home');
});

Route::get('/Expenses', function () {
    return view('Expense/view');
});
<<<<<<< HEAD

 Route::get('/Sales', function () {
     return view('Sales/addsales');
 });
=======
<<<<<<< HEAD
Route::get('/Sales', function () {
    return view('Sales/viewsales');
});
//  Route::get('/Sales', function () {
//      return view('Sales/addsales');
//  });
//Route::get('/Sales', function () {
//     return view('Sales/updatesales');
// });
=======
>>>>>>> f1b791e322b6d2e2918fa9b59bae482d4d1792c3

 Route::get('/Sales', function () {
     return view('Sales/addsales');
 });

Route::get('/Sales', function () {
    return view('Sales/updatesales');
});
>>>>>>> 9980bf0415f889d5438a03716c262972338fd752

Route::get('/Products', function () {
    return view('Product/viewproduct');
});

Route::get('/Manufacturing', function () {
    return view('Manufacturing/addRecipe');
});


Auth::routes();

<<<<<<< HEAD
=======

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> f1b791e322b6d2e2918fa9b59bae482d4d1792c3


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
=======




 

>>>>>>> f1b791e322b6d2e2918fa9b59bae482d4d1792c3
