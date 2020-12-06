<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Partner;
use App\Service;
use App\Setting;
use App\Specialist;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $settings = Setting::first();
        Session::put('sitePhone' , $settings->phone);
        Session::put('siteAddress' , $settings->address);
        Session::put('siteEmail' , $settings->contact_email);
        Session::put('site_nameHeader' , $settings->site_name);
        Session::put('site_descriptionHeader' , $settings->site_description);
        Session::put('facebook_linkHeader' , $settings->facebook_link);
        Session::put('twitter_linkHeader' , $settings->twitter_link);
        Session::put('instagram_linkHeader' , $settings->instagram_link);
        return view('welcome')->with(['settings' => $settings ,
            'services' => Service::all() ,
            'partners' => Partner::all() ,

        ]);
    }
}
