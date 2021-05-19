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

     return redirect()->back();


}
public function updatecontactview($id){
    $contact=new Contact;
    $contact=Contact::find($id);

        return view('Contacts\updatecontact')->with('contactdata',$contact);

}



}



