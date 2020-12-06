<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function subscriptions(Request $request){

        return view('admin.subscriptions.index')>with('subscriptions' , Subscription::all());
    }


}
