<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('welcome')->with(['settings' => Setting::first()]);
    }
}
