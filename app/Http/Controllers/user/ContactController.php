<?php

namespace App\Http\Controllers\user;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('user.contact');
    }
    public function storeContact(Request $request){
        $contacts = new Contact();
        $contacts->name = $request->input('name');
        $contacts->email = $request->input('email');
        $contacts->phone = $request->input('phone');
        $contacts->message = $request->input('message');

        $contacts->save();

        // $basic  = new \Nexmo\Client\Credentials\Basic('1e7ea284', 'TgsQ2jQEbd8XKrvA');
        // $client = new \Nexmo\Client($basic);

        // $message = $client->message()->send([
        //     'to' => '966504688057',
        //     'from' => 'Vonage APIs',
        //     'text' => 'saba7 elfol'
        // ]);

        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', 'http://www.sms4ksa.com/api/sendsms.php?username=yahy&password=102030&message=fromApi&numbers=+966504688057&sender=fahmy');
        // dd($res->getStatusCode());
        // echo $res->getStatusCode(); // 200
        // echo $res->getBody();

        return back()->with('message' , 'thanks . Your inquiry will be sent to the institute');
    }
}
