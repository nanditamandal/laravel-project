<html>
<head>
	<title>Delete|Page</title>
</head>
<body>
	<h1>Delete Employe</h1>
	<h3>
		
		<a href="{{route('employe.show')}}">Back</a> 
	</h3>

	<table>

		<tr>
			<td>First name:</td>
			<td>{{$employe->firstname}}</td>
			
		</tr>

		
		<tr>
			<td>Password:</td>
			<td>{{$employe->password}}</td>
		</tr>
		
	</table>
	<form method="post">
		{{@csrf_field()}}
		<input type="hidden" value="{{$employe->id}}" name="uid">
		<h2>Are You Sure ??</h2>
		<input type="submit" value="Confirm"/>
	</form>

	
</body>
</html>