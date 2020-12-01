<?php

namespace App\Http\Controllers\user;

use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function create(){
        dd('Hello From CourseController :)');
        // return view ('admin.courses.create');
    }

    public function store(Request $request){
        $courses = new Course();
        $courses->title = $request->input('title');
        $courses->description = $request->input('description');
        $courses->code = $request->input('code');
        $courses->type = $request->input('type');
        $courses->category = $request->input('category');
        $courses->duration = $request->input('duration');
        $courses->price = $request->input('price');
        $courses->date = $request->input('date');

        $courses->save();

        return redirect()->route('courses.index');
    }

    public function edit($id){
        dd('Hello From CourseController :)');
        $courses = Course::find($id);
        // return view ('admin.courses.edit' , ['courses' => $courses]);
    }

    public function update(Request $request , $id){
        $courses = Course::find($id);
        $courses->title = $request->input('title');
        $courses->description = $request->input('description');
        $courses->code = $request->input('code');
        $courses->type = $request->input('type');
        $courses->category = $request->input('category');
        $courses->duration = $request->input('duration');
        $courses->price = $request->input('price');
        $courses->date = $request->input('date');

        $courses->save();

        return redirect()->route('courses.index');
    }

    public function destroy($id){
        $courses = Course::find($id)->delete();
        return redirect()->route('courses.index');
    }
}
