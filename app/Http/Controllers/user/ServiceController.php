<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function getServiceById($id){
        $service = Service::find($id);
        return view('user.services.service-details')->with(['service' => $service]);
    }
}
