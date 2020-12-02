<?php

namespace App\Http\Controllers\admin;

use App\BusinessArea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusinessAreaController extends Controller
{
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
        $business_area = new BusinessArea();
        $business_area->title = $request->input('title');
        $business_area->description = $request->input('description');
        $business_area->image = $request->input('image');// we 'll talk about how media and image moves and put in the site

        $business_area->save();

        return redirect()->route('business_area.index');
    }

    public function edit($id){
        dd('Hello From BusinessAreaController :)');
        $business_area = BusinessArea::find($id);
        // return view ('admin.business_area.edit' , ['business_area' => $business_area]);
    }

    public function update(Request $request , $id){
        $business_area = BusinessArea::find($id);
        $business_area->title = $request->input('title');
        $business_area->description = $request->input('description');
        $business_area->image = $request->input('image');// we 'll talk about how media and image moves and put in the site

        $business_area->save();

        return redirect()->route('business_area.index');
    }

    public function destroy($id){
        $business_area = BusinessArea::find($id)->delete();
        return redirect()->route('business_area.index');
    }
}
