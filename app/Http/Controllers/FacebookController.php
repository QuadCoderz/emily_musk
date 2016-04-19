<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;
use Socialite;

class FacebookController extends Controller
{
    public function FacebookLogin(){

    		return Socialite::driver('facebook')->redirect();
    }

    public function Callback(){
    	
    	$user = Socialite::driver('facebook')->user();
        
       
        $user->getName();


    	//return "hello";
    	//.$user->getName();
    }

}
