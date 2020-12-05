<?php

namespace App\Http\Controllers\admin;

use App\BusinessArea;
use App\Http\Controllers\Controller;
use App\Traits\ImageUploaderTrait;
use Illuminate\Http\Request;

class BusinessAreaController extends Controller
{
    use ImageUploaderTrait;

    public function index(){
        dd('Hello From BusinessAreaController :)');
        $business_area = BusinessArea::all();
        // return view ('admin.business_area.index');
    }

    public function create(){
        dd('Hello From BusinessAreaController :)');
        // return view ('admin.business_area.create');
    }

    public function store(Request $request){
        $request_array = $request->all();
         if($request_array['image'] != null){

             $returned_image = $this->ImageUploader($request_array['image'] , 'uploads/business_area/images');
             $request_array['image'] = $returned_image;
         }

         BusinessArea::create($request_array);
         return redirect()->back()->with('success' , 'created successfully');
    }

    public function edit($id){
        dd('Hello From BusinessAreaController :)');
        $business_area = BusinessArea::find($id);
        // return view ('admin.business_area.edit' , ['business_area' => $business_area]);
    }

    public function update(Request $request , $id){
        $request_array = $request->all();
         $business_area = BusinessArea::find($id);
         if($request_array['image'] != null){
             unlink(public_path('uploads/business_area/images/'. substr($business_area->image, strpos($business_area->image, "images/") + 7)));
             $returned_image = $this->ImageUploader($request_array['image'] , 'uploads/business_area/images');
             $request_array['image'] = $returned_image;
         }
         $business_area->update($request_array);
         return redirect()->back()->with('success' , 'updated successfully');
    }

    public function destroy($id){
        $business_area = BusinessArea::find($id);
         unlink(public_path('uploads/business_area/images/'. substr($business_area->image, strpos($business_area->image, "images/") + 7)));
         $business_area->delete();
         return redirect()->back()->with('success' , 'success deletion');
    }
}
