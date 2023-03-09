<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\sorting;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\BaseController;

class BaseController extends Controller
{
    public function products($id = "id", $sort = "desc") {
       $a = Product::orderby($id, $sort) ->get(); $a =="0";
       $s=sorting::all();

       return view('catalog',['a' => $a, 's'=>$s]);
        }

    public function slider($id = "id", $sort = "desc") {
        $a = Product::orderby($id,$sort) -> limit(5) ->get();
        return view('aboutus',['a' => $a]);
        }
    public function singlproduct($id) {
        $a = Product::find($id);
        return view('catalogdetailed',['a' => $a]);
    }
    public function sortItem($tip,$sort){
        $a = product::orderBy($tip,$sort)-> get();
        return view('catalog',['a' => $a]);
    }


}
