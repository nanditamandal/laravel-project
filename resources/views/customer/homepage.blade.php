<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style >
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
#display{
  text-align: center;
}
.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 80%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
</head>
<body>
 <h2>welcome</h2>
<div class="topnav">

  <a class="active" href="{{route('logout.index')}}">log out</a>
  <a class="active" href="{{route('cart.showcart')}}">cart</a>
  <a class="active" href="{{route('cart.showallproduct')}}">all product</a>
  
  <div class="search-container">

    <form action="/action_page.php">
      <input type="text" placeholder="Search product.." name="search" id="search">
      
    </form>

  </div>

</div>

<div  class="col-sm-4"id="display">
  
  
</div>

<script type="text/javascript">
 
    $('#search').on('keyup',function(){
     
    $value=$(this).val();
     
    $.ajax({
     
    type : 'get',
     
    url : "{{route('customer.search')}}",
    
    dataType: 'json',
    
     
    data:{'search':$value},
     
    success:function(data){
      
      console.log(data);
     
      $.each(data , function(i, subObj) {

        $('#display').html('<div style="border:1"><p><img src="/'+subObj.picture+'" width="150px"></p><p>name:'+subObj.product_name+'</p><p>price:'+subObj.price+'</p><p>quantity:'+subObj.quantity+'</p><p>discription:'+subObj.writing+'</p><p><a href="/add_to_cart/'+subObj.pro_det_id+'">' + 'add to cart' + '<a/> </p></div>'
                             
         
                                                       
                                  
               );  
                                 
                                        
                 });                              
                                                
                            
                            
                },
        error:function(error){
          console.log(error.msg);
          $('#display').html(error.msg);

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
