<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class IndexController extends Controller
{
    public function index()
	{
		$products = DB::select('select * from product');
		return view('index',['products'=>$products]);
	}
}
