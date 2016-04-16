<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class SignUpController extends Controller
{
    public function SignUpPage(){
		return View::make('SignUp');

	}  }
