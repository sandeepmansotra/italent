@extends('layouts.app')
	<body>
			@section('content')
			<br><br>
		<div>
			<h1 style="font-size:50px;text-align:center;color:danger;">Welcome To Crazy Resturant</h1>
			<h2 style="text-align:center">{{Auth::user()->name}}!</h2>
		</div>
	<br><br><br><br><br>
		<div class="row">
			<div class="col-md-2"></div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">Create New Orders</h3>
        <p class="card-text">Serve the Customer with a nice Smile :)</p>
        <a href="/create" class="btn btn-danger">Create Orders</a>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="card">
      <div class="card-body">
        <h3 class="card-title">View Your Reports</h3>
        <p class="card-text">Know Your Reports through graphs</p>
        <a href="/report" class="btn btn-danger">View Reports</a>
      </div>
    </div>
  </div>
  <div class="col-md-2"></div>
</div>
		@endsection
	</body>
</html>
