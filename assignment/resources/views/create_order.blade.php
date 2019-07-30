@extends('layouts.app')
@section('content')
		<script type="text/javascript">
		function priceItem(){
			var box=document.getElementById('box').value;
			var input1 = document.getElementById('input1');
			var myResult;
			if(box==='Coffee')
			{
			  myResult=10;
			  document.getElementById('input1').value = myResult;
			}
			else if(box==="Tea")
			{
			  myResult=10;
			  document.getElementById('input1').value = myResult;
			}
			else if(box==="Cake")
			{
			  myResult=15;
			  document.getElementById('input1').value = myResult;
			}
			else if(box==="Samosa")
			{
			  myResult=15;
			  document.getElementById('input1').value = myResult;
			}
			else{
				myResult=0
				document.getElementById('input1').value = myResult;
			}
		}
			function calculate() {
				 var input1 = document.getElementById('input1').value;
				 var input2 = document.getElementById('input2').value;
				 var result = document.getElementById('result');
				 var myResult = input1 * input2;
				 document.getElementById('result').value = myResult;
			 }

		</script>
	</head>
	<body>
		<form method="post" action="/" >
			@csrf
			<!-- <input type="text" name="user" value="{{ Auth::user()->name }}">
			<select name="item" id="box" oninput="priceItem()">
				<option value="">Select Item</option>
				<option value="Coffee">Coffee</option>
				<option value="Tea">Tea</option>
				<option value="Cake">Cake</option>
				<option value="Samosa">Samosa</option>
			</select>
			<input type="text" name="price" id="input1"   placeholder="Enter The price" />
			<input type="text" name="quantity" id="input2" oninput="calculate()" placeholder="Enter quantity"/>
			<input type="text" name="total"  id="result" />
			<button>Add Order</button> -->
<div class="row">
	<div class="col-md-3">

	</div>
	<div class="col-md-6">
		<div class="form-group">
			<input name="user" type="hidden" value="{{ Auth::user()->name }}" class="form-control"  >
		 </div>
		 <div class="form-group">
			<label for="box">Items</label>
			<select class="form-control" name="item" id="box" oninput="priceItem()">
				<option value="">--Select Item--</option>
				<option value="Coffee">Coffee</option>
				<option value="Tea">Tea</option>
				<option value="Cake">Cake</option>
				<option value="Samosa">Samosa</option>
			</select>
		 </div>
		 <div class="form-group">
			<input  type="hidden" name="price" id="input1"  class="form-control"  >
		 </div>
		 <div class="form-group">
			<label>Quantity</label>
			<input  type="text" name="quantity" id="input2" oninput="calculate()" class="form-control" placeholder="Enter Quantity" >
		 </div>
		 <div class="form-group">
			<label>Total Amount</label>
			<input  type="text" name="total"  id="result" class="form-control"  >
		 </div>
		 <input  type="submit" class="btn-lg btn-danger" value="Add Order"/>
	</div>
</div>


		</form>
	</body>

@endsection
