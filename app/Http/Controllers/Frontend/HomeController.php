<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Model\Message as M_message;
use App\Mail\InquiryMail;

class HomeController extends Controller
{
    /**
     * ? return home
     */
    public function index(){
        return view('frontend.index');
    }


    /**
     * 
     * 
     */

    public function send_message(Request $req){

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

        $name = $req->name;
        $email = $req->email;
        $inquiry = $req->inquiry;

       try{
       
            Mail::to('ask@icwhospitality.com')->send(new InquiryMail($name, $email, $inquiry));
      
        }catch(Exception $e){
            return response()->json([
                $e
            ],400);
       }
       

        $message = New  M_message;
        $message->name = $name;
        $message->email = $email;
        $message->inquiry = $inquiry;

        if($message->save()){
            $req->session()->flash('status', 'Task was successful!');

            return response()->json([
                'success'
            ],200);
        }

        
    }
}
