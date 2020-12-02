<?php

namespace App\Http\Controllers\user;

use App\BusinessArea;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Achievement;

class AchievementController extends Controller
{
    public function index(){
        return view('user.achievements')->with(['achievements' => Achievement::all()]);
    }


}
