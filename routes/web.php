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
 Route::get('/Sales1', function () {
     return view('Sales/viewsales');
  });
 Route::get('/Sales1', function () {
      return view('Sales/addsales');
   });

=======

Route::get('/AddExpenses', function () {
    return view('Expense/add');
});

 Route::get('/Sales', function () {
     return view('Sales/addsales');
 });

Route::get('/Sales', function () {
    return view('Sales/viewsales');
});
//  Route::get('/Sales', function () {
//      return view('Sales/addsales');
//  });
//Route::get('/Sales', function () {
//     return view('Sales/updatesales');
// });
>>>>>>> eb9400e22570fc942b94d11d7c890c260ec5683f

Route::get('/Products', function () {
    return view('Product/viewproduct');
});

//Manufacturing
Route::get('/Manufacturing1', function () {
    
    return view('Manufacturing/addRecipe');
});


Route:: get('/Manufacturing',function(){
    //We only return Recipe1 when saveing data but this view should appear other times aswell
    $data=App\Models\Recipe::all();
    return view('Manufacturing/Recipe')->with('Recipe1',$data); 
});
//this calls the store function in REcipeController 
Route:: post('/saveRecipe','RecipeController@store');

Auth::routes();


<<<<<<< HEAD
 //Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route:: get('/Sales',function(){
    //We only return Recipe1 when saveing data but this view should appear other times aswell
    $data=App\Models\addsales::all();
    return view('Sales/viewsales')->with('viewsales1',$data); 
});


 Route:: post('/savesales','AddsalesController@store');
 Route:: post('/savesales','AddsalespaymentsController@store');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> eb9400e22570fc942b94d11d7c890c260ec5683f






