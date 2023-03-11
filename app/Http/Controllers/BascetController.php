<?php

namespace App\Http\Controllers;

use App\Models\Bascet;
use App\Models\Product as pr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BascetController;


class BascetController extends Controller
{
    public function bascets(){
        $id_user=Auth::user()->id;
        $p=Bascet::where("user_id",$id_user)->get();
        Auth::user()->id;
        return view("bascet",compact('p'));
    }

    public function products($id){
        $test=Bascet::create([
            'user_id'=> Auth::user()->id,
            'product_id'=>$id,
            'quantity'=>1,
        ]);
        return redirect('/catalog');
    }
    public function deletebascet($id){
        Bascet::find($id)->delete();
        return redirect()->route('bascet');
    }
    public function store(Request $req){
        $k=$req->file('img');

        $filename=$k->move(public_path('img'), $k->getClientOriginalName());
        pr::create([
            'name'=>$req->input('name'),
            'img'=>'/public/img/'.$k->getClientOriginalName(),
            'price'=>$req->input('price'),
            'country'=>$req->input('country'),
            'year'=>$req->input('year'),
            'model'=>$req->input('model'),
            'category'=>$req->input('category'),
        ]);
        return view('admin');
    }
    public function addstore(){
        if( Auth::user()->name == "admin"){
            return view('admin');
        } else{
            return redirect()->route('aboutus');
        }
    }
}
