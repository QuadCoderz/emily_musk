<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class EventsController extends Controller
{
    public function EventsPage($eventId){

		$arr=['id'=>$eventId];
		return View::make('Events',$arr);

	}
}
