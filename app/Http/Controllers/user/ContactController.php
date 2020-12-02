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


}
