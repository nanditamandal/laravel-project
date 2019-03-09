<html>
<head>
    <title>Edit | Page</title>
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
                
                if( checkfname==true && checkmail==true && checkuname==true && checkpass==true ){
                    alert("update sucessful.");
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
    <h1>Edit User</h1>
    <form method="post" onsubmit='return checkall()'style='text-align:center'>
        {{@csrf_field()}}
        <table style="width:100%">
            <tr>
                <td>User id</td>
                <td>
                    <input name="userid"  onkeyup='valiation(this)' id='usname' value="{{$employe->userid}}"/><level id='check' style='color:red'>*</level>
                </td>
            </tr>
            <tr>
                <td>First name</td>
                <td><input name="firstname"onkeyup='valiationfn(this)'id='fn'value="{{$employe->firstname}}"/ ><level id='checkfn' style='color:red'>*</level> 
            </td>
            </tr>
            <tr>
                <td>Last name</td>
                <td><input name="lastname" onkeyup='valiationln(this)'  value="{{$employe->lastname}}"/></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input name="email" onkeyup='valiationemail(this)' id='mail' value="{{$employe->email}}"/><level id='checkmail' style='color:red'>*</level>
            </td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password"onkeyup='validatepass(this)'id='pass' name="password" value="{{$employe->password}}"/><level id='checkpass' style='color:red'>*</level>
            </td>
            </tr>
            
            <tr>
                <td></td>
                <td><input type="submit" value="Update"/></td>
            </tr>
        </table>

    </form>


</body>
</html>