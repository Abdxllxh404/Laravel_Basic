<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index(){

        $address = "145/1 กรุงเทพ,ประเทศไทย 90110";
        $tel = "0826523066";
        $email = "0826523066";


        return view('about.index'
        ,['address'=>$address,'tel'=>$tel,'email'=>$email]);

        // return view('about.index',compact('address','tel','email'));

        return view('about.index')
        ->with('address',$address)
        ->with('tel',$tel)
        ->with('email',$email)
        ->with('error','404 Not Found')
        ->with('status','Information has save already');


    }
}
