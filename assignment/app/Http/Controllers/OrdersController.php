<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
	public function index(){
		$order= new \App\Order;
		$orders=$order::all();
		return view('orders',compact('orders'));
	}
	public function create(){
		return view('create_order');
	}
   public function store(){
      $order=new \App\Order;
      $order->user=request('user');
      $order->item=request('item');
      $order->price=request('price');
      $order->quantity=request('quantity');
      $order->total=request('total');
      $order->save();
      return redirect("/");
   }
}
