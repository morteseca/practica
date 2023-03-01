<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
class BaseController extends Controller
{
    public function products() {
    $a =DB::table('products')
    ->select('id','name','img','price','country','year','model','category')
    ->orderby('name','desc')
    ->get('id','name');
    $a =="0";
    return view('catalog',['a' => $a]);
    }
    public function slider() {
        $a =DB::table('products')
        ->select('id','img')
        ->orderby('name','desc')
        ->limit(10)
        ->get('id','name');
        $a =="0";
        return view('aboutus',['a' => $a]);
        }
}
