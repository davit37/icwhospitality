<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Message as M_message;

class HomeController extends Controller
{
    /**
     * ? return home
     */
    public function index(){
        return view('frontend.index');
    }

    public function get_message(Request $req){

        $v = \Validator::make($req->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'inquiry'=>'required',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        if($v->fails()) {
            return response()->json([
                $v->errors()
            ],400);
        }

        $message = New  M_message;
        $message->name = $req->name;
        $message->email = $req->email;
        $message->inquiry = $req->inquiry;

        if($message->save()){
            $req->session()->flash('status', 'Task was successful!');

            return response()->json([
                'success'
            ],200);
        }

        
    }
}
