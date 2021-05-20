<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{

public function store(Request $request){


    $Contact=new Contact;

    $Contact->Business_id=$request->Business_id;
    $Contact->Business_name=$request->Business_name;
    $Contact->Type=$request->Type;
    $Contact->First_name=$request->First_name;
    $Contact->Last_name=$request->Last_name;
    $Contact->Email=$request->Email;
    $Contact->Mobile=$request->Mobile;
    $Contact->Address=$request->Address;
    $Contact->Save();

     return redirect()->back();
  //  dd($request->all());

}
public function deletecontact($id){
    $contact=new Contact;
    $contact=Contact::find($id);


    $contact->delete();

     return redirect()->back()->with('success','Account deleted successfully!');


}
public function updatecontactview($id){

    $contact=Contact::find($id);

        return view('Contacts\updatecontact')->with('contactdata',$contact);

}
public function contactUpdate2(Request $request){
    $this->validate($request,[

        'businessName'=>'required|min:3|max:50',
        'type'=>'required',
        'firstName'=>'required|min:3|max:50',
        'lastName'=>'required|min:3|max:50',
        'email'=>'required|min:8|max:10',
        'mobile'=>'required|min:8|max:10',
        'address'=>'required|min:3|max:'
    ]);

    $id=$request->id;
    $Contact= Contact::find($id);

    $Contact->Business_id=$request->Business_id;
    $Contact->Business_name=$request->Business_name;
    $Contact->Type=$request->Type;
    $Contact->First_name=$request->First_name;
    $Contact->Last_name=$request->Last_name;
    $Contact->Email=$request->Email;
    $Contact->Mobile=$request->Mobile;
    $Contact->Address=$request->Address;
    $Contact->save();

    $data3 = Contact::all();
    return redirect('Contacts')->with('Contact1',$contactUpdate2);


}



}
