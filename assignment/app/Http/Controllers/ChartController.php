<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ChartController extends Controller
{

	public function index()
	{
	 $data = DB::table('orders')
		->select(
		 DB::raw('item as item'),
		 DB::raw('SUM(quantity) as number'))
		->groupBy('item')
		->get();
	 $array[] = ['Item','Number'];
	 foreach($data as $key => $value)
	 {
	  $array[++$key] = [$value->item, $value->number];
	 }
	 return view('chart')->with('item', json_encode($array));
	}
	public function barChart()
	{
	 $data = DB::table('orders')
		->select(
		 DB::raw('item as sale'),
		 DB::raw('SUM(total) as number'))
		->groupBy('item')
		->get();
	 $array[] = ['Sale','Sale'];
	 foreach($data as $key => $value)
	 {
	  $array[++$key] = [$value->sale, $value->number];
	 }
	 return view('barchart')->with('sale', json_encode($array));
	}

	public function lineChart()
	{
	 $data = DB::table('orders')
		->select(
			DB::raw('day(created_at) as day'),
		 DB::raw('SUM(total) as number'))
		 ->orderBy('created_at')
		->groupBy(DB::raw('day(created_at)'))
		->get();
	 $array[] = ['Day','Sale'];
	 foreach($data as $key => $value)
	 {
	  $array[++$key] = [$value->day, (int)$value->number];
	 }
	 return view('linechart')->with('day', json_encode($array));
	}
}
