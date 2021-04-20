<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function store(Request $request){

         $recipe = new Recipe;

         $recipe->manufacturingProductName=$request->mProduct;
         $recipe->recipe=$request->mRecipe;
         $recipe->save();
        
    }
}
