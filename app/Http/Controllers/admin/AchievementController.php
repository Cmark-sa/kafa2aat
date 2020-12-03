<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\ImageUploaderTrait;
use App\Achievement;

class AchievementController extends Controller
{
    use ImageUploaderTrait;
    
    public function index(){
        dd('Hello From AchievementController :)');
        $achievements = Achievement::all();
        // return view ('admin.achievements.index');
    }

    public function create(){
        dd('hello from AchievementController');
        // return view ('admin.achievements.create');
    }

    public function store(Request $request){
        $request_array = $request->all();
         if($request_array['media'] != null){

             $returned_image = $this->ImageUploader($request_array['media'] , 'uploads/achievements/images');
             $request_array['media'] = $returned_image;
         }

         Achievement::create($request_array);
         return redirect()->back()->with('success' , 'created successfully');
    }

    public function edit($id){
        dd('welcome from AchievementController Agai :)');
        $achievements = Achievement::find($id);
        // return view ('admin.achievements.edit' , ['achievements' , $achievements]);
    }

    public function update(Request $request , $id){
        $request_array = $request->all();
         $achievements = Achievement::find($id);
         if($request_array['media'] != null){
             unlink(public_path('uploads/achievements/images/'. substr($achievements->media, strpos($achievements->media, "images/") + 7)));
             $returned_image = $this->ImageUploader($request_array['media'] , 'uploads/achievements/images');
             $request_array['media'] = $returned_image;
         }
         $achievements->update($request_array);
         return redirect()->back()->with('success' , 'updated successfully');
    }

    public function destroy($id){
        $achievements = Achievement::find($id)->delete();
        return redirect()->route('achievements.index');

        $achievements = Achievement::find($id);
         unlink(public_path('uploads/achievements/images/'. substr($achievements->media, strpos($achievements->media, "images/") + 7)));
         $achievements->delete();
         return redirect()->back()->with('success' , 'success deletion');
    }
}
