<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achievement;

class AchievementController extends Controller
{
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
        $achievements = new Achievement();
        $achievements->media = $request->input('media');// we 'll talk about how media and image moves and put in the site
        $achievements->name = $request->input('name');
        $achievements->address = $request->input('address');
        $achievements->description = $request->input('description');

        $achievements->save();

        return redirect()->route('achievements.index');
    }

    public function edit($id){
        dd('welcome from AchievementController Agai :)');
        $achievements = Achievement::find($id);
        // return view ('admin.achievements.edit' , ['achievements' , $achievements]);
    }

    public function update(Request $request , $id){
        $achievements = Achievement::find($id);

        $achievements->media = $request->input('media');// we 'll talk about how media and image moves and put in the site
        $achievements->name = $request->input('name');
        $achievements->address = $request->input('address');
        $achievements->description = $request->input('description');

        $achievements->save();

        return redirect()->route('achievements.index');
    }

    public function destroy($id){
        $achievements = Achievement::find($id)->delete();
        return redirect()->route('achievements.index');
    }
}
