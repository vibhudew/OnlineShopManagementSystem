<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\FullCalenderController;

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

<<<<<<< HEAD
Route::get('/updateProduct/{Productid}','AddProductController@updateProduct');
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
Route::get('/updateProduct/{Productid}','AddProductController@updateProductView');

Route::post('/updateItems','AddProductController@updateProduct');

Route::get('/search', 'AddProductController@search');

Route::get('/stock', function(){
    return view('Product_Stock/viewstock');
});



//kaveen product part end


<<<<<<< HEAD
//manufacturing part starts
=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1


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

Route::get('/search','RecipeController@search');
Route::get('/search2','RecipeController@search2');

Route::get('/insertManufacts', function (){
    $data=App\Models\Recipe::all();
    return view('Manufacturing/insertManufact')->with('manuData',$data);
  });
Route::post('/saveManufact','RecipeController@manufacturing'); 

Route::get('/displayManufact', function (){
    $data2=App\Models\Manufact::all();
    return view('Manufacturing/displayManufact')->with('displayManufact',$data2);
});
Route::get('/deleteManufact/{id}','RecipeController@DeleteManufact');

Route::get('/updateManufact/{id}','RecipeController@updateManufact');
Route::post('/updateManufact2','RecipeController@updateManufact2');

Route::get('/updateRecipe/{id}','RecipeController@updateRecipe');
Route::post('/updateRecipe2','RecipeController@updateRecipe2');
//manufacturing part end


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



//HRM Routes
    Route::resource('/HRM', '\App\Http\Controllers\EmployeeController');
    Route::resource('/Payroll', '\App\Http\Controllers\PayrollController');
    Route::resource('/Attendance', '\App\Http\Controllers\AttendanceController');

//HRM Search Routes
 Route::get('/searchEmployee','\App\Http\Controllers\EmployeeController@searchEmployee');
 Route::get('/searchAttend','\App\Http\Controllers\AttendanceController@searchAttend');
 Route::get('/searchPayroll','\App\Http\Controllers\PayrollController@searchPayroll');

 //HRM Reports
 

<<<<<<< HEAD

//HRM Routes
    Route::resource('/HRM', '\App\Http\Controllers\EmployeeController');
    Route::resource('/Payroll', '\App\Http\Controllers\PayrollController');
    Route::resource('/Attendance', '\App\Http\Controllers\AttendanceController');

//HRM Search Routes
 Route::get('/searchEmployee','\App\Http\Controllers\EmployeeController@searchEmployee');
 Route::get('/searchAttend','\App\Http\Controllers\AttendanceController@searchAttend');
 Route::get('/searchPayroll','\App\Http\Controllers\PayrollController@searchPayroll');

 //HRM Reports
 

=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
Route::get('/Accounts1', function () {
    
    return view('Accounts/addAccount');
});


Route::post('/saveAccount','AccountController@store');

Route ::get ('/deleteAccount/{id}','AccountController@deleteAccount');

Route::get('/accountUpdate/{id}','AccountController@accountUpdate');


    //Expense Categories...
    Route::resource('expense-categories', 'ExpenseCategoryController');
    Route::post('/addcategory','ExpenseCategoryController@store');
    Route::get('/editcategoryview/{id}','ExpenseCategoryController@edit');
    Route::post('/editexcategory','ExpenseCategoryController@update');
    Route::get('/deletecategory/{id}','ExpenseCategoryController@destroy');
    Route::post('/expense-categories','ExpenseCategoryController@index');
    //Expenses...
    Route::get('/expense', [ExpenseController::class ,'index']);
    Route::post('/addexpense','ExpenseController@store');
    Route::get('/editexpenseview/{id}','ExpenseController@edit');
    Route::post('/editexpense','ExpenseController@update');
    Route::get('/deleteexpense/{id}','ExpenseController@destroy');
    Route::get('/createexpense','ExpenseController@create');
    //Calender...
    Route::get('fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
     //miyelandi 
     Route::get('/Purchase1', function () {
        return view('Purchase/viewpurchase');
     });
    Route::get('/Purchase1', function () {
         return view('Purchase/addpurchase');
      });

      Route:: get('/Purchase',function(){
        //We only return viewsales1 when saving data but this view should appear other times aswell
        $data=App\Models\addpurchase::all();
        return view('Purchase/viewpurchase')->with('viewpurchase1',$data); 
    });
    
    //this calls the store function in AddsalesController 
     Route:: post('/savepurchase','AddPurchaseController@store');
     Route::get('/deletepurchase/{id}','AddPurchaseController@deleteviewpurchase');
     Route::get('/updatepurchase/{id}','AddPurchaseController@updateviewpurchase');
     Route::post('/editpurchase','AddPurchaseController@editviewpurchase'); Route:: get('/Purchase',function(){
    //We only return viewsales1 when saving data but this view should appear other times aswell
    $data=App\Models\addpurchase::all();
    return view('Purchase/viewpurchase')->with('viewpurchase1',$data); 
});

<<<<<<< HEAD
    Route::get('/editexpense', function () {
        return view('expense/edit');
    });
Route::post('/saveAccount','AccountController@store');

Route ::get ('/deleteAccount/{id}','AccountController@deleteAccount');

Route::get('/accountUpdate/{id}','AccountController@accountUpdate');


    //Expense Categories...
    Route::resource('expense-categories', 'ExpenseCategoryController');
    Route::post('/addcategory','ExpenseCategoryController@store');
    Route::get('/editcategoryview/{id}','ExpenseCategoryController@edit');
    Route::post('/editexcategory','ExpenseCategoryController@update');
    Route::get('/deletecategory/{id}','ExpenseCategoryController@destroy');
    Route::post('/expense-categories','ExpenseCategoryController@index');
    //Expenses...
    Route::get('/expense', [ExpenseController::class ,'index']);
    Route::post('/addexpense','ExpenseController@store');
    Route::get('/editexpenseview/{id}','ExpenseController@edit');
    Route::post('/editexpense','ExpenseController@update');
    Route::get('/deleteexpense/{id}','ExpenseController@destroy');
    Route::get('/createexpense','ExpenseController@create');
    //Calender...
    Route::get('fullcalender', [FullCalenderController::class, 'index']);
    Route::post('fullcalenderAjax', [FullCalenderController::class, 'ajax']);
     //miyelandi 
     Route::get('/Purchase1', function () {
        return view('Purchase/viewpurchase');
     });
    Route::get('/Purchase1', function () {
         return view('Purchase/addpurchase');
      });

      Route:: get('/Purchase',function(){
        //We only return viewsales1 when saving data but this view should appear other times aswell
        $data=App\Models\addpurchase::all();
        return view('Purchase/viewpurchase')->with('viewpurchase1',$data); 
    });
    
    //this calls the store function in AddsalesController 
     Route:: post('/savepurchase','AddPurchaseController@store');
     Route::get('/deletepurchase/{id}','AddPurchaseController@deleteviewpurchase');
     Route::get('/updatepurchase/{id}','AddPurchaseController@updateviewpurchase');
     Route::post('/editpurchase','AddPurchaseController@editviewpurchase'); Route:: get('/Purchase',function(){
    //We only return viewsales1 when saving data but this view should appear other times aswell
    $data=App\Models\addpurchase::all();
    return view('Purchase/viewpurchase')->with('viewpurchase1',$data); 
});

=======
>>>>>>> 2064e6ee1c0bce3e7a69234813ff91137aac8ca1
//this calls the store function in AddsalesController 
 Route:: post('/savepurchase','AddPurchaseController@store');
 Route::get('/deletepurchase/{id}','AddsalesController@deleteviewpurchase');
 Route::get('/updatepurchase/{id}','AddsalesController@updateviewpurchase');
 Route::post('/editpurchase','AddPurchaseController@editviewpurchase');
