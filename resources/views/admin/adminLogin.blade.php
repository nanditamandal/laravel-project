<html>
    <head>
        <title>
            Sign up page
        </title>
        
    </head>
    <body>
        
            
            <form method='post'  style='text-align:center'>
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                 
                    <h1 style='text-align:cenetr'>Free sign in here</h1>
                    <b>User Name    : </b> <input type='text' name='username' id='usname' placeholder='At lest 3 character'>
                    <br/>
                     <br/>
                    <b>Password      : </b>  <input type='password'  name='password' id='pass' placeholder='at lest 3 character'>
                   
                     <br/>
                    
                    
                    
                    <input type='submit' value='submit'   >
                    <br/><br/>
                     <b>new user</b><a href="{{route('customer.create')}}"> create new account</a>
                    
                
             
        </form>

       
       
        
        
        
        
    </body>
</html>
