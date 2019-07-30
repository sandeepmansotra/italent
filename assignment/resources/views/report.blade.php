@extends('layouts.app')

@section('content')
<body>
	<div class="container">
	<div class="table-responsive text-nowrap">
		<table class="table table-striped">
			<thead >
				<tr>
					<th>Employee Name</th>
					<th>Item</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Amount</th>
				</tr>
			</thead>
			<tbody>
				@foreach($orders as $order)
				<tr >
					<td>{{$order->user}}</td>
					<td>{{$order->item}}</td>
					<td>{{$order->price}}</td>
					<td>{{$order->quantity}}</td>
					<td>{{$order->total}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>

		<div class="row">
	  <div class="col-sm-4">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Pie Graph</h5>
	        <p class="card-text">Details of products sold by quantity.</p>
	        <a href="chart" class="btn-lg btn-danger">Pie Graph</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Bar Graph</h5>
	        <p class="card-text">Products Wise Total Sale</p>
	        <a href="bar" class="btn-lg btn-danger">Bar Graph</a>
	      </div>
	    </div>
	  </div>
	  <div class="col-sm-4">
	    <div class="card">
	      <div class="card-body">
	        <h5 class="card-title">Line Graph</h5>
	        <p class="card-text">Day Wise Total Sale.</p>
	        <a href="/line" class="btn-lg btn-danger">Line Graph</a>
	      </div>
	    </div>
	  </div>
	</div>

	</div>

</body>

@endsection
