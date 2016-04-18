<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Http\Requests;
use App\membership;

class addMembershipController extends Controller
{
    //

    public function premium(){

        $mem=new membership();
        $mem->user_id='nnnn';
        $mem->basic_membership=false;
        $mem->permium_membership=true;
        $mem->pro_membership=false;
        $mem->platinum_membership=false;
        $mem->custom_membership=false;
        $mem->save();
        return redirect('home');


    }
    public function pro(){

        $mem=new membership();
        $mem->user_id='nnnn';
        $mem->basic_membership=false;
        $mem->permium_membership=false;
        $mem->pro_membership=true;
        $mem->platinum_membership=false;
        $mem->custom_membership=false;
        $mem->save();
        return redirect('home');

}
    public function basic(){

        $mem=new membership();
        $mem->user_id='nnnn';
        $mem->basic_membership=true;
        $mem->permium_membership=false;
        $mem->pro_membership=false;
        $mem->platinum_membership=false;
        $mem->custom_membership=false;
        $mem->save();
        return redirect('home');

}
    public function platinum(){

        $mem=new membership();
        $mem->user_id='nnnn';
        $mem->basic_membership=false;
        $mem->permium_membership=false;
        $mem->pro_membership=false;
        $mem->platinum_membership=true;
        $mem->custom_membership=false;
        $mem->save();
        return redirect('home');
}
    public function custom(){
        $mem=new membership();
        $mem->user_id='nnnn';
        $mem->basic_membership=false;
        $mem->permium_membership=false;
        $mem->pro_membership=false;
        $mem->platinum_membership=false;
        $mem->custom_membership=true;
        $mem->save();
        return redirect('home');
}

}
