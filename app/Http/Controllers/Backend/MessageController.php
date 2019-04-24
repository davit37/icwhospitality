<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Message as M_message;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class MessageController extends Controller
{
    public function index(){

        $messages = M_message::get();

        $messages = $messages->map(function($item){
            
            $item['view']=
                '<tr>
                    <td>'.$item->name.'</td>
                    <td>'.Str::limit($item->inquiry,100,'....').'</td>
                </tr>
                ';

            return $item;
        });
        return view('admin.message.index',['messages'=>$messages]);
    }
    

    public function ajax_datatable_(){

        $messages = M_message::get();

        $messages = $messages->map(function($item){
            $item['view']=
                '<tr>
                    <td>'.$item->name.'</td>
                    <td>'.Str::limit($item->inquiry,100,'....').'</td>
                </tr>
                ';

            return $item;
        });
        return Datatables::of($messages)->make(true);
    }
}
