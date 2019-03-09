<html>
<head>
	<title>Login | Page</title>
	<script>
            
          
                
            
            var pass="";
            var cpass="";
            checkfname=false;
            checkuname=false;
            checkmail=false;
            checkpass=false;
            checkcpass=false;
            //checkph=false;
			
			///user id
            function valiation(e){
                var uname=e.value;
                var msg=document.getElementById("check");
                
                if(uname.length>=3){
                    msg.innerHTML="";
                    checkuname=true;
                    
                }
				else if(isNaN(uname)){
				 msg.innerHTML =" ** only digit 0-9 are allowed";
				 msg.style.color="red";
				
				}
				else if(uname.length<=0){
                    msg.innerHTML="pls input";
                    msg.style.color="red";
                }
                else if(uname.length<3){
                    msg.innerHTML="character kom";
                    msg.style.color="red";
                }
				
            }
			
            ///password
            function validatepass(e){
                var x= e.value;
                var msg=document.getElementById("checkpass");
                if(x.length<3 || x.length>=20){
                    msg.innerHTML="length between 3 to 20";
                    msg.style.color="red";
                   
                }
                else{
                    msg.innerHTML="";
                   
                    checkpass= true;
                }
            }
			
            
            function checkall(){
                
                //var type=document.getElementById("Type");
                
               // var posttype=type.options[type.selectedIndex].value;
                
                if(  checkuname==true && checkpass==true ){
                    alert("Signin sucessful.");
                    return true;
                }
                else{
                    alert("Please input all * information");
                    return false;
                }
            }
            
            
        </script>
</head>
<body>
	<div align="center">
	<form method="post" onsubmit='return checkall()'>
		{{@csrf_field()}}
		<h1>Welcome to Ecommerce Site</h1>
		<h3>
		
	</h3>

		<table >
			<tr>
				<td>Email</td>
				<td><input type="text" name="email"onkeyup="valiation(this)" value="{{$name}}" /><level id='check' style='color:red'>*</level></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" placeholder='at lest 3 character'onkeyup='validatepass(this)'/><level id='checkpass' style='color:red'>*</level></td>
			</tr>
		</br>
			<tr>
				<td></td>
				<td><input type="submit" value="Login" name="Login" style='color:green'><input type='reset' value='Reset' style='color:green'>
					</td>
			</tr>
		</table>
		<b>new user</b><a href="{{route('customer.create')}}"> create new account</a>

	</form>
		<p>{{session('message')}}</p>
	</div>

</body>
</html>