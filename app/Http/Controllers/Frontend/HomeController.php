<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * ? return home
     */
    public function index(){
        return view('frontend.index');
    }

    public function get_message(Request $req){

        print_r($req->all());
    }
}
