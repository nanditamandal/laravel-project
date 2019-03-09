<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ChartController extends Controller
{
    function index()
    {
     $data = DB::table('order')
       ->select(
        DB::raw('productname as productname'),
        DB::raw('count(*) as number'))
       ->groupBy('productname')
       ->get();
     $array[] = ['productname', 'Number'];
     foreach($data as $key => $value)
     {
      $array[++$key] = [$value->productname, $value->number];
     }
     return view('chart')->with('productname', json_encode($array));
    }
}
