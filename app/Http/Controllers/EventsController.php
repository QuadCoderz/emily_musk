<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class EventsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }


    public function EventsPage(){
		return view('Events');

	}  

	public function EventsBook(){
		return "You Sucessfully Booked!"; // make it show user name

	}  
}
