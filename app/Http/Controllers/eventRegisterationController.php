<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\eventRegisteration;
use App\Http\Requests;

class eventRegisterationController extends Controller
{
    //
    public function add($id){

        $reg=new eventRegisteration();
        $reg->event_id=$id;
        $reg->user_id='elemail';
        $reg->save();
        return redirect('home');

    }
}
