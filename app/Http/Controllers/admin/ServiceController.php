<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $services = Service::all();
        return view('admin.services.index' , ['services' => $services]);
    }

    public function create(){
        return view('admin.create.create');
    }

    public function store(Request $request){
        $services = new Service();
        $services->title = $request->input('title');
        $services->describtion = $request->input('describtion');
        $services->logo = $request->input('logo');
        $services->image = $request->input('image');
        
        $services->save();
        
        return redirect()->route('services.index');
    }

    public function edit(Request $request , $id){
        $services = Service::find($id);
        return view('admin.services.edit' , ['services' => $services]);
    }

    public function update(Request $request , $id){
        $services = Service::find($id);
        $services->title = $request->input('title');
        $services->describtion = $request->input('describtion');
        $services->logo = $request->input('logo');
        $services->image = $request->input('image');
        
        $services->save();
        
        return redirect()->route('services.index');
    }

    public function destroy($id){
        $services = Service::find($id)->delete();
        return redirect()->route('services.index');
    }
}
