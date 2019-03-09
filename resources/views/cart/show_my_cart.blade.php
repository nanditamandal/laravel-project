<html>
<head>
	<title>Show|Page</title>
</head>
<body>
	<h1>my cart</h1>
	<h2><a href="{{route('cart.totalbill')}}"> total bill</a></h2>
	<h3><a href="{{route('cart.confirm')}}">confirm</a></h3>
	<h4><a href="{{route('customer.homepage')}}"> back</a>
		
	</h4>
	<table style="width:100%" border="1">
		<tr>
		<th>id</th>
		<th>Product Name</th>
		<th>product id</th>
		<th>Price</th>
		<th>quantity</th> 
		<th>total price</th> 
		<th>Action</th>
	</tr>
	
	
	@foreach($cart as $c)

		
		
		<tr>

			<td>{{$c->cart_id}}</td>
			<td>{{$c->productname}}</td>
			<td>{{$c->productid}}</td>
			<td>{{$c->price}}</td>

			<td>{{$c->quantity}}</td>
			<td>{{$c->total_price}}</td>
			
			<td><a href="{{route('cart.edit',[$c->cart_id])}}"> Edit</a>|<a href="{{route('cart.destroy',[$c->cart_id])}}"> delete</a></td>
			
		</tr>
	
				
			

		
		
		
		
		
	
	@endforeach
	</table>

	
	

</body>
</html>