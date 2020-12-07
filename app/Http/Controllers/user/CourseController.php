<?php

namespace App\Http\Controllers\user;

use App\Course;
use App\Http\Controllers\Controller;
use App\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseController extends Controller
{
    public function courses(){

         return view ('user.courses.index')->with(['courses' =>   Course::simplePaginate(4) ,
             'specialists' =>Specialist::titlesOnLY()]);
    }

    public function courseDetails($course_id)
    {
        $course = Course::findOrFail($course_id);

        return view('user.courses.course-details')->with('course', Course::find($course_id));
    }

    public function getDataOfCourse(Request $request)
    {
        $name = $request->input('search');
        $type = $request->input('type');
        if ($name != '') {
            $query = Course::where('title', 'like', '%' . $name . '%')
                ->orWhere('type', '=', $type)
                ->simplePaginate(15);
            return response()->json($query);
        } else {
            return response()->json(['message' => 'failed']);
        }
    }

    public function specialistCourses($specialist_id, $req_type)
    {


        if ($req_type == 1) {

            Session::push('specialist_ids', $specialist_id);
        } else {
            $specialist_ids = Session::pull('specialist_ids', []); // Second argument is a default value
            if (($key = array_search($specialist_id, $specialist_ids)) !== false) {
                unset($specialist_ids[$key]);
            }
            session()->put('specialist_ids', $specialist_ids);
        }

        $courses = Course::whereIn('specialist_id', Session::get('specialist_ids'))->get();
        if ($courses->count() > 0) {
            return $courses;
        } else
            return 0;


    }

    function getAllCoursesAjax()
    {
        $coursesAjax = Course::simplePaginate(15);
        return response()->json($coursesAjax);
    }
}


