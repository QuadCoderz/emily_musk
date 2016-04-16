<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class RoomReservationController extends Controller
{
	public function RoomReservationPage(){
		return View::make('RoomReservation');

	}    //
}
