<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function settingsCreate(Request $request){
        if (Setting::create($request->all())){
            return redirect()->with('success' ,'created successfully');
        }else{
            return redirect()->with('error' ,'error occured');
        }
    }

    public function settings(){
        return view('admin.settings.index')->with(Setting::first());
    }
}
