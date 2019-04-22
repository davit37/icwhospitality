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

    
}
