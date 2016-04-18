<?php

namespace App\Http\Controllers;

use App\roomReservation;
use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class RoomReservationController extends Controller
{
	public function RoomReservationPage(){
		return View::make('RoomReservation');
	}    //


	public function add(Request $request){


		$starting_date=$request->stdate;
		$ending_date=$request->enddate;
		$from=$request->Ftime;
		$to=$request->Ttime;
		$people_No=$request->peopleNo;
		$projector=$request->proj;

		if(!(($starting_date>$ending_date)||($from>$to) )){


			$new_res=new roomReservation();
			$new_res->starting_date=$starting_date;
			$new_res->ending_date=$ending_date;
			$new_res->starting_time=$from;
			$new_res->ending_time=$to;
			$new_res->people_num=$people_No;
			$new_res->proj=$projector;

			$new_res->save();

		}
		else
			echo'error';

	}

}
