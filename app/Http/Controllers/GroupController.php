<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function GroupUs($add=0){
         $a=DB::table('product')->get();
         return view('catalog',["a"=>$a, "add"=>$add]);
    }
}
