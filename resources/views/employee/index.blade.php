@extends('employee.layout')


@section('content')

	

	<!-- <div>
		<a href="/employee/addCatagory">Add Catagory</a><br>
		<a href="/employee/addSubCatagory">Add Sub Catagory</a><br>
		<a href="/employee/addManufacturer">Add Manufacturer</a><br>
		<a href="/employee/addSupplier">Add Supplier</a><br>
		<a href="/employee/addProduct">Add Product</a><br>
		<a href="/employee/addProductDetails">Add Product Detils</a><br>
		<a href="/employee/showCatagory">Show Catagory List</a><br>
		<a href="/employee/showSubCatagory">Show Sub Catagory</a><br>
		<a href="/employee/showManufacturer">Show Manufucturer</a><br>
		<a href="/employee/showSupplier">Show Supplier</a><br>
		<a href="/employee/showProduct">Show Product</a><br>
		<a href="/employee/showProductDetails">Show Product details</a><br>

	</div> -->


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.vertical-menu {
  width: 200px;
}

.vertical-menu a {
  background-color: #eee;
  color: black;
  display: block;
  padding: 12px;
  text-decoration: none;
}

.vertical-menu a:hover {
  background-color: #ccc;
}

.vertical-menu a.active {
  background-color: #4CAF50;
  color: white;
}


.foo {
  float: left;
  width: 350px;
  height: 200px;
  margin: 10px;
  border: 1px solid rgba(0, 0, 0, .2);
  text-align: center;
  float: right;
   clear: right;
}

.too {
  float: left;
  width: 350px;
  height: 200px;
  margin: 10px;
  border: 1px solid rgba(0, 0, 0, .2);
  text-align: center;
  float: right;
   clear: left;
}

.blue {
  background: #13b4ff;
}

.purple {
  background: #ab3fdd;
}

.wine {
  background: #ae163e;
}
</style>
</head>
<body>
	<h1 align="center">Employee Panel </h1>
	<div class="foo blue"> <h2>Number of Catagories</h2><br><h1>{{$cat}}</h1></div>
	<div class="too purple"><h2>Number of Sub Catagories</h2><br><h1>{{$scat}}</h1></div>
	<div class="too wine"><h2>Number of Manufacturers</h2><br><h1>{{$man}}</h1></div>
	
	<div class="foo blue"> <h2>Number of Suppliers</h2><br><h1>{{$supp}}</h1></div>
	<div class="too purple"><h2>Number of Products</h2><br><h1>{{$pro}}</h1></div>
	<div class="too wine"><h2>Number of Ready Products</h2><br><h1>{{$pd}}</h1></div>
	

<h1>Options</h1>

<div class="vertical-menu">
  		<a href="/employee/addCatagory">Add Catagory</a><br>
		<a href="/employee/addSubCatagory">Add Sub Catagory</a><br>
		<a href="/employee/addManufacturer">Add Manufacturer</a><br>
		<a href="/employee/addSupplier">Add Supplier</a><br>
		<a href="/employee/addProduct">Add Product</a><br>
		<a href="/employee/addProductDetails">Add Product Detils</a><br>
		<a href="/employee/showCatagory">Show Catagory List</a><br>
		<a href="/employee/showSubCatagory">Show Sub Catagory</a><br>
		<a href="/employee/showManufacturer">Show Manufucturer</a><br>
		<a href="/employee/showSupplier">Show Supplier</a><br>
		<a href="/employee/showProduct">Show Product</a><br>
		<a href="/employee/showProductDetails">Show Product details</a><br>


		<a href="{{route('employeeSearch1.show')}}">Search Products</a><br>
</div>



</body>
</html>

@endsection
