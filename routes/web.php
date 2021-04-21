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
// Route::get('/Sales', function () {
//     return view('Sales/viewsales');
// });
  Route::get('/Sales', function () {
      return view('Sales/addsales');
  });
//Route::get('/Sales', function () {
//     return view('Sales/updatesales');
// });

Route::get('/Products', function () {
    return view('Product/viewproduct');
});

Route::get('/Manufacturing1', function () {
    return view('Manufacturing/addRecipe');
});

Route:: get('/Manufacturing',function(){
    return view('Manufacturing/Recipe');
});

Route:: post('/saveRecipe','RecipeController@store');


Auth::routes();


 //Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route:: post('/savesales','AddsalesController@store');
 Route:: post('/savesales','AddsalespaymentsController@store');





 

