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

    // return redirect()->back();
    $data1=Contact::all();
     return redirect('/Contact')->with('Contact1',$data1)->with('success', 'Contact details added successfully!');
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

    $request->validate([

        'businessName'=>['required|min:3|max:50'],
        'firstName'=>['required|min:3|max:50'],
        'lastName'=>['required|min:3|max:50'],
        'email'=>['required|min:8|max:10'],
        'mobile'=>['required|min:8|max:10'],
        'address'=>['required|min:3|max:50'],
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


    //return redirect('/Contact');
    $contact=Contact::all();

    //$contact->update();

    //return redirect()->back()->with('success','Account update successfully!');


        return redirect('/Contact')->with('Contact1',$contact)->with('success', 'Contact details updated successfully!');


}
public function reportContact(){

    $contact= Contact::all();
    $pdf = PDF::loadView('Contacts/reportContact',compact('contacts'));
    return $pdf-> download('contactsDetails.pdf');
}



}
