<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        dd('Hello From ContactController :)');
        $contacts = Contact::all();
        // return view ('admin.contacts.index');
    }

    public function create(){
        dd('Hello From ContactController :)');
        // return view ('admin.contacts.create');
    }

    public function store(Request $request){
        $contacts = new Contact();
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->message = $request->input('message');
        $contacts->phone = $request->input('phone');

        $contacts->save();

        return redirect()->route('contacts.index');
    }

    public function edit($id){
        dd('Hello From ContactController :)');
        $contacts = Contact::find($id);
        // return view ('admin.contacts.edit' , ['contacts' => $contacts]);
    }

    public function update(Request $request , $id){
        $contacts = Contact::find($id);
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->message = $request->input('message');
        $contacts->phone = $request->input('phone');

        $contacts->save();

        return redirect()->route('contacts.index');
    }

    public function destroy($id){
        $contacts = Contact::find($id)->delete();
        return redirect()->route('contacts.index');
    }
}
