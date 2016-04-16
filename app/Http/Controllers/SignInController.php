<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;

class SignInController extends Controller
{
    public function SignInPage(){
		return View::make('SignIn');

	}  }
