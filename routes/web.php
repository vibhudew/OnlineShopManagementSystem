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
=======
<<<<<<< HEAD
 Route::get('/Sales', function () {
     return view('Sales/addsales');
 });
//Route::get('/Sales', function () {
//     return view('Sales/updatesales');
// });
=======

Route::get('/Products', function () {
    return view('Product/viewproduct');
});


>>>>>>> 8de76703f535ed54966a86d90ac63fadd3663799
Auth::routes();



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





 

>>>>>>> af85ae611ea60834ac7a2348aa111728445ed3da
