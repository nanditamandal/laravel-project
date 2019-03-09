<html>
<head>
	<title>Show|Page</title>
</head>
<body>
	<h1>Show Details</h1>
	<h3><a href="{{route('customer.homepage')}}"> back</a>
		
	</h3>
	<table style="width:100%" border="1">
	<tr>
		<th>picture</th>
		<th>product id</th>
		<th>product Name</th>
		<th>price</th>
		<th>quantity</th>
		<th>details</th>
		<th>Action</th>
		
		
	</tr>
	
	@foreach($product as $p)

		
		
		<tr>
			<td><img src="{{asset($p->picture)}}" width="150px"></td>
			<td>{{$p->pro_det_id}}</td>
			<td>{{$p->product_name}}</td>
			<td>{{$p->price}}</td>
			<td>{{$p->quantity}}</td>
			<td>{{$p->writing}}</td>
			
			
			<td><a href="{{route('cart.show',[$p->pro_det_id])}}">add to cart</a>|
				
			</td>
			
		</tr>

		
		
		
		
		
	
	@endforeach
	</table>
</body>
</html>