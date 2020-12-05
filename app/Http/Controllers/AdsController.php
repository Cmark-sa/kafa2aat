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
        $request_array = $request->all();
         if($request_array['image'] != null){

             $returned_image = $this->ImageUploader($request_array['image'] , 'uploads/ads/images');
             $request_array['image'] = $returned_image;
         }

         Ads::create($request_array);
         return redirect()->back()->with('success' , 'created successfully');
    }

    public function edit($id){
        dd('Hello From AdsController :)');
        $ads = Ads::find($id);
        // return view ('admin.ads.edit' , ['ads' => $ads]);
    }

    public function update(Request $request , $id){
        $request_array = $request->all();
         $ads = Ads::find($id);
         if($request_array['image'] != null){
             unlink(public_path('uploads/ads/images/'. substr($ads->image, strpos($ads->image, "images/") + 7)));
             $returned_image = $this->ImageUploader($request_array['image'] , 'uploads/ads/images');
             $request_array['image'] = $returned_image;
         }
         $ads->update($request_array);
         return redirect()->back()->with('success' , 'updated successfully');
    }

    public function destroy($id){
         $ads = Ads::find($id);
         unlink(public_path('uploads/ads/images/'. substr($ads->image, strpos($ads->image, "images/") + 7)));
         $ads->delete();
         return redirect()->back()->with('success' , 'success deletion');
    }
}
