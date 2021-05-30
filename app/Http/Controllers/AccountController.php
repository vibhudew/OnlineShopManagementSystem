<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Accounts;
use PDF;

class AccountController extends Controller
{
    public function store(Request $request){

        $this->validate($request,[
            'name'=>'required|min:3|max:50',
            'accountNumber' => 'required|min:8|max:10',
            'accountType' => 'required',
            'balance'=> 'required | max:50|min:3',
            'note'=> 'required | max:50|min:3',
        ]);

       // dd($request->all());
         $accounts = new Accounts;

         $accounts->Name=$request->name;
         $accounts->AccountNumber=$request->accountNumber;
         $accounts->AccountType=$request->accountType;
         $accounts->Balance=$request->balance;
         $accounts->Note=$request->note;
       
         $accounts->save();

        $data1=Accounts::all();
        return redirect('/Accounts')->with('Account1',$data1)->with('success', 'Account details added successfully!');

    }

//search

    public function searchAccount()
    {
        $search_text = $_GET['query'];
        $accounts = Accounts::where('name', 'LIKE', '%' .$search_text. '%')->get();

        return view('Accounts/searchAccount' , compact('accounts'));
    }


    
//update
    public function accountUpdate($id){
        $accounts=Accounts::find($id); //contain all data of accounts
        return view('Accounts/accountUpdate')->with('accounts',$accounts);

    }
    public function accountUpdate2(Request $request){

        

        //dd($request);
      $id = $request->id;
       
       $accounts=Accounts::find($id);
       
        $accounts->Name=$request->name;
        $accounts->AccountNumber=$request->accountNumber;
        $accounts->AccountType=$request->accountType;
        $accounts->Balance=$request->balance;
        $accounts->Note=$request->note;
        $accounts->save();
       
        $accounts=Accounts::all();
       
        
        return redirect('/Accounts')->with('Account1',$accounts)->with('success', 'Account details updated successfully!');
       
       
    }
    public function deleteAccount($id){
        $accounts  =Accounts::find($id);

        $accounts -> delete();

        return redirect() -> back()->with('success', ' Account deleted successfully!');

        

    }

    public function ReportAccount(){

        $accounts = Accounts::all();
        $pdf = PDF::loadView('Accounts/reportAccount',compact('accounts'));
        return $pdf-> download('accountsDetails.pdf');
    }
}

