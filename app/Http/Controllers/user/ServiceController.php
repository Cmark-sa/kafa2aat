<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{


    public function getServiceById($id){
        $servicesById = Service::find($id);
        return view('user.services.services-details' , ['servicesById' => $servicesById]);
    }
}
