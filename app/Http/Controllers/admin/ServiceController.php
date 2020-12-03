<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Service;
use App\Traits\ImageUploaderTrait;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Description;

class ServiceController extends Controller
{
    use ImageUploaderTrait;

     public function create(){
        return view('admin.services.create');
     }

     public function store(Request  $request)
     {

         $request_array = $request->all();
         if($request_array['image'] != null){

             $returned_image = $this->ImageUploader($request_array['image'] , 'uploads/services/images');
             $request_array['image'] = $returned_image;
         }

         Service::create($request_array);
         return redirect()->back()->with('success' , 'created successfully');
     }
}
