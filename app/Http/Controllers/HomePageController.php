<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class HomePageController extends Controller
{
	public function showHomePage(){
		return View::make('home');

	}
}
