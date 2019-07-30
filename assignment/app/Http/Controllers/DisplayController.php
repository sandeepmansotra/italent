<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayController extends Controller
{
	public function index()
	{
		$order=new \App\Order;
		$orders=$order::all();
		return view('report',compact('orders'));
	}
}
