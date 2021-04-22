<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;

class AccountController extends Controller
{
    public function store(Request $request){

        $accounts = new Accounts;

        $accounts->Name=$request->name;
        $accounts->AccountNumber=$request->accountNumber;
        $accounts->AccountType=$request->accountType;
        $accounts->Balance=$request->balance;
        $accounts->Note=$request->note;
       
        $accounts->save();

    }
}
