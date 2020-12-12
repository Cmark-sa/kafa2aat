<?php

namespace App\Http\Controllers\user;

use App\Course;
use App\Traits\ImageUploaderTrait;
use App\User;
use App\StudentCourse;
use App\Student;
use App\Http\Controllers\Controller;
use App\Specialist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use DB;
use Auth;

class CourseController extends Controller
{
    use ImageUploaderTrait;
    public function courses(){

         return view ('user.courses.index')->with(['courses' =>   Course::simplePaginate(4) ,
             'specialists' =>Specialist::join('courses' , 'specialists.id' , 'courses.specialist_id')->distinct()->titlesOnLY()]);
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


    function showPageEnrollCourse($id){
        $course = Course::find($id);
        return view('user.courses.enroll' , ['course' => $course]);
    }

    function storeStudentCourse(Request $request){



        DB::transaction(function () use ($request) {

        //     $this->validate($request, [
        //        'username' => 'required',
        //        'email' => 'required',
        //        'phone' => 'required',
        //        'national_id' => 'required',
        //        'nationality' => 'required',
        //        'address' => 'required',
        //        'city' => 'required'
        //    ]);


            if(Auth::check()){
                $student_course = new StudentCourse();
                $student_course->user_id = Auth::user()->id;
                $student_course->course_id = $request->input('course_id');
                $student_course->save();

            }else{

            $user = new User();
            $user->username = $request->input('username');
            $user->email = $request->input('email');
            $user->phone = $request->input('phone');

            if($user->photo != null){
                $user->photo  = $this->ImageUploader($request->photo , 'uploads/user/images');
            }
            $user->type = 0;
            $user->save();

            $student = new Student();
            $student->address = $request->input('address');
            $student->city = $request->input('city');
            $student->national_id = $request->input('national_id');
            $student->nationality = $request->input('nationality');
            $student->interests = $request->input('interests');

            $student->user_id = $user->id;
            $student->save();

            $student_course = new StudentCourse();
            $student_course->user_id = $user->id;
            $student_course->course_id = $request->input('course_id');

            $student_course->save();
        }

        });
        return back();
    }

    public function myCourses(){

        return view('user.profile.mycourses')->with([StudentCourse::where('user_id' , Auth::user()->id)->get()]);

    }
}


