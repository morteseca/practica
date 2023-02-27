<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function aboutUs( Request $r) {

        $table = product::orderBy('created_at','desc')->limit(5)->get();

      return view('aboutus',["products"=>$table]);
  }
}
