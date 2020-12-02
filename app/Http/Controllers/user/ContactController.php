<?php

namespace App\Http\Controllers\user;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('user.contact');
    }
    public function storeContact(Request $request){
        $contacts = new Contact();
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->message = $request->input('message');

        $contacts->save();

        return back()->with('message' , 'thanks . Your inquiry will be sent to the institute');
    }
}
