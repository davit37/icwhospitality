<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\SettingsModel as M_settings;

class SettingsController extends Controller
{

    /**
     * ? Return Form Setting
     */
    public function index(){
        $settings =M_settings::where('id','1')->first();
       
        return view('admin.setting.index',['settings'=>$settings]);
    }


    public function store(Request $req){

        $req->validate([
            'email'             => 'required',
            'phone_number'      => 'required',
            'whatsapp_number'   => 'required'
        ]);

        $setting = M_settings::findOrFail(1);

        $setting->email             = $req->email;
        $setting->phone_number      = $req->phone_number;
        $setting->whatsapp_number   = $req->whatsapp_number;

        if($setting->save()){
           return back()->with('status','Settings Was Successfully Saved');
        }
    }

    
}
