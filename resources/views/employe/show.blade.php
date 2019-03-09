<html>
<head>
	<title>Show|Page</title>
</head>
<body>
	<h1>Show Details</h1>
	<h3><a href="{{route('home.index')}}"> back</a>
		
	</h3>
	<table style="width:100%" border="1">
	<tr>
		<th>User id</th>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>password</th> 
		<th>Action</th>
	</tr>
	
	@foreach($employe as $emp)

		
		
		<tr>

			<td>{{$emp->userid}}</td>
			<td>{{$emp->firstname}}</td>
			<td>{{$emp->lastname}}</td>
			<td>{{$emp->email}}</td>
			<td>{{$emp->password}}</td>
			
			
			<td><a href="{{route('employe.edit',[$emp->id])}}"> Edit</a>|
				<a href="{{route('employe.delete',[$emp->id])}}"> delete</a>
			</td>
			
		</tr>

		
		
		
		
		
	
	@endforeach
	</table>
</body>
</html>