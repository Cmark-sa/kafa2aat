<?php

namespace App\Http\Controllers\user;

use App\Course;
use App\Http\Controllers\Controller;
use App\Specialist;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses(){

<<<<<<< HEAD
         return view ('user.courses.index')->with(['courses' =>   Course::all() ,
             'specialists' =>Specialist::titlesOnLY()]);
=======
         return view ('user.courses.index')->with('courses' ,   Course::simplePaginate(4));
>>>>>>> d75a6417559452aecbcbbd227c716c6f17d027af
    }

    public function courseDetails($course_id){
          $course = Course::findOrFail($course_id);

         return view('user.courses.course-details')->with('course' ,Course::find($course_id));
    }

    public function getDataOfCourse(Request $request){
          $name = $request->input('search');
          $type = $request->input('type');
               if($name != ''){
                    $query = Course::where('title', 'like', '%'.$name.'%')
                    ->orWhere('type' , '=' , $type)
                    ->simplePaginate(15);
               return response()->json($query);
               }else{
                    return response()->json(['message' => 'failed']);
               }
    }
    public function getAllCoursesAjax(){
          $coursesAjax = Course::simplePaginate(15);
          return response()->json($coursesAjax);
    }
}
