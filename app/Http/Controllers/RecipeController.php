<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function store(Request $request){

         $recipe = new Recipe;
         
         $this->validate($request,[
             'mProduct'=>'required|max:500|min:5',
             'mRecipe'=>'required|max:500|min:5',
             ]);

         $recipe->manufacturingProductName=$request->mProduct;
         $recipe->recipe=$request->mRecipe;
         $recipe->save();

         return view('Manufacturing/Recipe');
        
    }
}
