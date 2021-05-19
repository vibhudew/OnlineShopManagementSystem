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
//update
    public function accountUpdate($id){
        $accounts=Accounts::find($id); //contain all data of manufact in manufactRecipe object
        return view('Accounts/accountUpdate')->with('updateAcc',$accounts);

    }
    public function accountUpdate2(Request $request){
        $this->validate($request,[
            'name'=>'required|min:3|max:50',
            'accountNumber' => 'required|min:8|max:10',
            'accountType' => 'required',
            'balance'=> 'required | max:50|min:3',
            'note'=> 'required | max:50|min:3',
        ]);
        
        $id=$request->id;
        $account=$request->name;
        $number=$request->accountNumber; 
        $type=$request->accountType;
        $balance=$request->balance;
        $note=$request->note;
        $accountUpdate2= Accounts::find($id);

        $accountUpdate2->name=$account;
        $accountUpdate2->account_number=$number;
        $accountUpdate2->account_type=$type;
        $accountUpdate2->balance=$balance;
        $accountUpdate2->note=$note;
        $accountUpdate2->save();

        $data3 = Accounts::all();
        return redirect('Accounts')->with('Account1',$accountUpdate2);

    }
    public function deleteAccount($id){
        $accounts  =Accounts::find($id);

        $accounts -> delete();

        return redirect() -> back()->with('success', ' Account deleted successfully!');

        

    }
}

