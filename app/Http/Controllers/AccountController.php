<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;

class AccountController extends Controller
{
    public function store(Request $request){

       // dd($request->all());
         $accounts = new Accounts;

         $accounts->Name=$request->name;
         $accounts->AccountNumber=$request->accountNumber;
         $accounts->AccountType=$request->accountType;
         $accounts->Balance=$request->balance;
         $accounts->Note=$request->note;
       
         $accounts->save();

        $data1=Accounts::all();
        return view('Accounts/accountView')->with('Account1',$data1);

    }

    public function deleteAccount($id){
        $accounts  =Accounts::find($id);

        $accounts -> delete();

        return redirect() -> back()->with('success', ' Account deleted successfully!');

        

    }
}

