<html>
    <head>
        <title>
            Sign up page
        </title>
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
            ///pass valid 
            function validateCompass(e){
                var x= e.value;
                var msg=document.getElementById("checkcompass");
                if(x==pass){
                    msg.innerHTML="match";
                    msg.style.color="green";
                    checkcpass= true;
                }
                else{
                    msg.innerHTML="not match";
                    msg.style.color="red";
                    
                }
            }
           
            
            function checkall(){
                
                if( checkfname==true && checkmail==true && checkuname==true && checkpass==true && checkcpass==true){
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
        
        <form method='post'onsubmit='return checkall()'   style='text-align:center'>
                  {{@csrf_field()}}
                    <h1 style='text-align:cenetr'>Free sign up here</h1>
                    <b>User Id     : </b> <input type='text' onkeyup='valiation(this)' name='userid' id='usname' placeholder='At lest 5 digit'><level id='check' style='color:red'>*</level><br></br>
                    <div>
                         @if ($errors->has('userid'))
                            <div class="error">{{ $errors->first('userid') }}</div>
                        @endif
                    </div>
        
                    
                    
										
                    
                    <b>First Name    : </b> <input type='text' onkeyup='valiationfn(this)' name='firstname' id='fn' placeholder='At lest 5 digit'><level id='checkfn' style='color:red'>*</level><br></br>
                    <div>
                         @if ($errors->has('firstname'))
                            <div class="error">{{ $errors->first('firstname') }}</div>
                        @endif
                    </div>
                
                    <b>Last Name     : <input type='text' name='lastname' id='ln'onkeyup='valiationln(this)' placeholder='optional'><br></br>
                        @if ($errors->has('lastname'))
                            <div class="error">{{ $errors->first('lastname') }}</div>
                        @endif
                
                    <b>Email         : </b>  <input type='email' onkeyup='valiationemail(this)' name='email' id='mail' placeholder='input valid email'><level id='checkmail' style='color:red'>*</level><br></br>
                   
                   @if ($errors->has('email'))
                            <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                    
                   
                    
                    <b>Password      : </b>  <input type='password' onkeyup='validatepass(this)' name='password' id='pass' placeholder='at lest 6 character'><level id='checkpass' style='color:red'>*</level><br></br>
                    @if ($errors->has('password'))
                            <div class="error">{{ $errors->first('password') }}</div>
                        @endif
                    
                    <b>Confirm       : </b> <input type='password' onkeyup='validateCompass(this)' name='cpass' id='ass' placeholder='rewrite the pass'> <level id='checkcompass' style='color:red'>*</level><br></br>
                    
                    
                    
                    
                                       <input type='submit' value='Sign up' name='submit'  style='color:green'><input type='reset' value='Reset' style='color:green'>
                
             
        </form>
        <!-- @if ($errors->any())
             <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                         <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif -->
        
        
        
        
        
    </body>
</html>
