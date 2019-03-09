<!DOCTYPE html>
<html lang="en">
<head>
  <title>customer create</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
            
          
                
            
            var pass="";
            var cpass="";
            checkfname=false;
            checkuname=false;
            checkmail=false;
            checkpass=false;
            checkaddress=false;
           // checkcpass=false;
            checkmobile=false;
            //checkph=false;
            
            ///user id
            function valiation(e){
                var uname=e.value;
                var msg=document.getElementById("check");
                
                if(uname.length>=5){
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
                else if(uname.length<5){
                    msg.innerHTML="character kom";
                    msg.style.color="red";
                }
                
            }
            ///firstname
            function valiationfn(e){
                var uname=e.value;
                var msg=document.getElementById("checkfn");
                
                if(uname.length>4){
                    msg.innerHTML="";
                    checkfname=true;
                }
                else if(!isNaN(uname)){
                 msg.innerHTML =" ** only character a-z are allowed";
                 msg.style.color="red";
                
                }
                else if(uname.length<=0){
                    msg.innerHTML="*pls input ";
                    msg.style.color="red";
                }
                else if(uname.length<=5){
                    msg.innerHTML="*minimum 5 character ";
                    msg.style.color="red";
                }
            }
            //email
            function valiationemail(e) {
                var emails = e.value;
                
                var msg=document.getElementById("checkmail");
                if(emails.length <= 0){
                msg.innerHTML =" ** Please fill the email idx` field";
                 msg.style.color="red";
                
                }
                else if(emails.indexOf('@') <= 0 ){
                msg.innerHTML =" ** @ Invalid Position";
                 msg.style.color="red";
                
                }
                else if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
                msg.innerHTML =" ** . Invalid Position";
                 msg.style.color="red";
                
                }
                else{
                    msg.innerHTML="";
                    checkmail= true;
                }
                
                    
            };
            ///password
            function validatepass(e){
                var x= e.value;
                var msg=document.getElementById("checkpass");
                if(x.length<6 || x.length>=20){
                    msg.innerHTML="length between 6 to 20";
                    msg.style.color="red";
                   
                }
                else{
                    msg.innerHTML="";
                    pass=x;
                    checkpass= true;
                }
            }
            //mobile
            function valiationmobile(e){
                var x= e.value;
                var msg=document.getElementById("checkmobile");
                if(x.length>11){
                    msg.innerHTML="length 11";
                     msg.style.color="red";
                    
                }
                else{
                    msg.innerHTML="";
                    checkmobile= true;
                }
                
            }
            ///address
            function validateaddress(e){
                var x= e.value;
                var msg=document.getElementById("checkaddress");
                 if(!isNaN(x)){
                 msg.innerHTML =" ** only character a-z are allowed";
                 msg.style.color="red";
                
                }
                else if(x.length<=0){
                    msg.innerHTML="*pls input ";
                    msg.style.color="red";
                }
                else{
                    msg.innerHTML="";
                    checkaddress= true;
                }

            }
           
            
            function checkall(){
                
                if( checkfname==true && checkmail==true && checkpass==true && checkmobile==true && checkaddress==true){
                    alert("Signup sucessful.");
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

<div class="container">
  <h2>Create new Account</h2>

  <form action="" method="post" >
     {{@csrf_field()}}
    <div class="form-group">
      <label for="firstname">First name:</label>
      <input type="text" class="form-control" id="firstname"onkeyup='valiationfn(this)' placeholder="Enter firstname" name="firstname"><level id='checkfn' style='color:red'>*</level>
         <div>
                         @if ($errors->has('firstname'))
                            <div class="error">{{ $errors->first('firstname') }}</div>
                        @endif
                    </div>
    </div>

    <div class="form-group">
      <label for="lastname">Last Name:</label>
      <input type="text" class="form-control" id="lastname" onkeyup='valiationln(this)' placeholder="Enter lastname" name="lastname"><level id='checkln' style='color:red'>*</level>
      <div>
                         @if ($errors->has('lastname'))
                            <div class="error">{{ $errors->first('lastname') }}</div>
                        @endif
                    </div>
    </div>

    <div class="form-group">
      <label for="mobile">Mobile:</label>
      <input type="text" class="form-control" id="mobile"onkeyup='valiationmobile(this)' placeholder="Enter mobile number" name="mobile"><level id='checkmobile' style='color:red'>*</level><br></br>
      <div>
                         @if ($errors->has('mobile'))
                            <div class="error">{{ $errors->first('mobile') }}</div>
                        @endif
                    </div>
    </div>



    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" onkeyup='valiationemail(this)' placeholder="Enter email" name="email"><level id='checkmail' style='color:red'>*</level>
      <div>
                         @if ($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
    </div>

    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"onkeyup='validatepass(this)' id="password" placeholder="Enter password" name="password"><level id='checkpass' style='color:red'>*</level>
      <div>
                         @if ($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                    </div>
    </div>

    <div class="form-group">
      <label for="address">Address:</label>
      <input type="text" class="form-control" id="address "onkeyup='validateaddress(this)' placeholder="Enter address" name="address">
      <level id='checkaddress' style='color:red'>*</level>
      <div>
                         @if ($errors->has('address'))
                            <div class="error">{{ $errors->first('address') }}</div>
                        @endif
                    </div>
    </div>

    
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>