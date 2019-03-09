<html>
<head>
	<title>Home | Page</title>
	<meta name="_token" content="{{ csrf_token() }}">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<h1>Home View</h1>
	<a href="{{route('logout.index')}}">Logout</a>|
	<a href="{{route('employe.create')}}">create employee</a>|
	<a  href="{{'/bar-chart'}}">chart</a>
	
	<a href="{{route('employe.show')}}">show all</a>
</body>
	<br/><br/>
	<div>

		<input type='text' name='search' id='search' placeholder='search' />

	</div>
	<br/>
	<table>
		<thead>
			<tr>
				<th>first name</th>
				<th>last name</th>
				<th>email</th>
				<th>password</th>
				<th>action</th>
				
			</tr>
		</thead>
		<tbody id='ser'>

		</tbody>
	</table>
	
	

	
 	<script type="text/javascript">
 
		$('#search').on('keyup',function(){
		 
		$value=$(this).val();
		 
		$.ajax({
		 
		type : 'get',
		 
		url : "{{route('home.search')}}",
		
		dataType: 'JSON',
		
		 
		data:{'search':$value},
		 
		success:function(data){
			
			console.log(data);
		 
		  $.each(data , function(i, subObj) {

		  	$('#ser').html('<tr><td>' + subObj.firstname + '' + '</td><td>' + subObj.lastname + '' + '</td><td>' + subObj.email + '' + '</td><td>' + subObj.password + '' + '</td><td><a href="/employe/'+subObj.id+'/edit"  >' + 'Edit' + '<a/>|<a href="/employe/'+subObj.id+'/delete" >'+ 'delete'+ ' </a></td></tr>');
                                 
                                 	
                                   });	
                                 
                                        
                                               
                                                
                            
                            
                },
        error:function(error){
        	console.log(error.msg);
        	$('#ser').html(error.msg);

        }
               
                

		
		 
		}); 
			  // $('#ser').html(eachrow);
		 
		 
		 
		})
 
</script>
<script type="text/javascript">
	
	 
	$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
 
</script>

	
</body>
</html>