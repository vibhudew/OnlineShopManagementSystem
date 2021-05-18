<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AccountController;

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


 Route::get('/Sales1', function () {
     return view('Sales/viewsales');
  });
 Route::get('/Sales1', function () {
      return view('Sales/addsales');
   });

//kaveen work product part
Route::get('/Product', function () {
    $data=App\Models\ProductDetails::all();
    return view('Product/viewproduct')->with('Product1', $data);
});

Route::get('/Products/addproduct', function () {
    return view('Product/addproduct');
});

Route:: post('/saveProduct','AddProductController@store');

Route::get('/deleteProduct/{Productid}','AddProductController@deleteProduct');

Route::get('/updateProduct/{Productid}','AddProductController@updateProduct');

//kaveen product part end

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

Route::get('/deleteRecipe/{id}','RecipeController@deleterecipe');

Auth::routes();


 //Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route:: get('/Sales',function(){
    //We only return viewsales1 when saving data but this view should appear other times aswell
    $data=App\Models\addsales::all();
    return view('Sales/viewsales')->with('viewsales1',$data); 
});

//this calls the store function in AddsalesController 
 Route:: post('/savesales','AddsalesController@store');
 Route::get('/deletesales/{id}','AddsalesController@deleteviewsales');
 Route::get('/updatesale/{id}','AddsalesController@updateviewsales');
 Route::post('/editsales','AddsalesController@editviewsales');




Route::resource('/HRM', '\App\Http\Controllers\EmployeeController');

 Route::resource('/Payroll', '\App\Http\Controllers\PayrollController');

 Route::resource('/Attendance', '\App\Http\Controllers\AttendanceController');


 




Route::get('/Accounts1', function () {
    
    return view('Accounts/addAccount');
});

Route::post('/saveAccount','AccountController@store');

Route ::get ('/deleteAccount/{id}','AccountController@deleteAccount');


    //Expense Categories...
    Route::resource('expense-categories', 'ExpenseCategoryController');
    Route::post('/addcategory','ExpenseCategoryController@store');
    Route::get('/editcategoryview/{id}','ExpenseCategoryController@edit');
    Route::post('/editexcategory','ExpenseCategoryController@update');
    Route::get('/deletecategory/{id}','ExpenseCategoryController@destroy');
    Route::post('/expense-categories','ExpenseCategoryController@index');
    //Expenses...
  //  Route::resource('expenses', 'ExpenseController');
    Route::get('/expense', [ExpenseController::class ,'index']);
    Route::post('/addexpense','ExpenseController@store');
    Route::get('/editexpenseview/{id}','ExpenseController@edit');
    Route::post('/editexpense','ExpenseController@update');
    Route::get('/deleteexpense/{id}','ExpenseController@destroy');
    Route::get('/createexpense','ExpenseController@create');