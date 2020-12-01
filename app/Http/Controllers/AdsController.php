<?php

namespace App\Http\Controllers;

use App\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function index(){
        dd('Hello From AdsController :)');
        $ads = Ads::all();
        // return view ('admin.ads.index');
    }

    public function create(){
        dd('Hello From AdsController :)');
        // return view ('admin.ads.create');
    }

    public function store(Request $request){
        $ads = new Ads();
        $ads->title = $request->input('title');
        $ads->description = $request->input('description');
        $ads->image = $request->input('image');// we 'll talk about how media and image moves and put in the site

        $ads->save();

        return redirect()->route('ads.index');
    }

    public function edit($id){
        dd('Hello From AdsController :)');
        $ads = Ads::find($id);
        // return view ('admin.ads.edit' , ['ads' => $ads]);
    }

    public function update(Request $request , $id){
        $ads = Ads::find($id);
        $ads->title = $request->input('title');
        $ads->description = $request->input('description');
        $ads->image = $request->input('image');// we 'll talk about how media and image moves and put in the site

        $ads->save();

        return redirect()->route('ads.index');
    }

    public function destroy($id){
        $ads = Ads::find($id)->delete();
        return redirect()->route('ads.index');
    }
}
