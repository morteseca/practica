<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BascetController extends Controller
{
    public function bascets(){
        $id_user=Auth::user()->id;
        $p=Bascet::where("user_id",$id_user)->get();
        // $p[0]->products->all();
        Auth::user()->id;
        return view("bascet",compact('p'));


    }
}
