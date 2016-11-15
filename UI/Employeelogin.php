<html>
	<head>
            

		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                

                <style>
                   body{
    background-color:black;
    margin:0;
    padding:0;
    font-family:'Arial',serif;
    
    
    
    
    
}
.nav {
	width:100%;
    background-color:white;
    text-align:center;
        list-style:none;
        padding:20px 0px 0px 0px;
	color:#ffffff;
	
}
.nav > li{
    display:inline-block;
    padding:0px 50px 10px 15px;
   font-size: 25px;
    
    
}
.nav > li>a:hover{
    
    
    color:#0066ff;
    
}
.nav > li > a{
    text-decoration:none;
    color:black;
    
}  
.Banner{
        
      width:100%;
     
      display:block;
        
        
    }       
    .Banner > .Banner-img{
        
        
         width:100%;
      display:block;
        height:20%
        
        
    }   
    .logo{
        color:black;
        float:left;
        padding-left: 25px;
        font-size:20px;
        font-weight:bold;
        
        
        
    }   
    .logo >a{
        
        
        text-decoration:none;
        color:black;
    }   
     
    h1{
        width:100%;
      
    
    background:white;
    
    border-radius: 5px;
    text-align: center;
    font-size:40px;
    color:Black;
     font-family:'Arial',serif;   
        
        
        
    }
input[type=text], select {
    width: 70%;
    margin-left:25%;
    margin-right:25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 70%;
    margin-left:25%;
    margin-right:25%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
.Login {
    
    width:50%;
    height:50%;
    margin-right:25%;
    margin-left:25%;
    border-radius: 5px;
    background-color:white;
    padding: 10px;
}
  .button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
    width:20%;

      }
.button1 {
    margin-left:25%;
    background-color: white;
    color: black;
    border: 2px solid #4CAF50;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
}                  
     
.button2 {
    background-color: white;
    color: black;
    border: 2px solid #f44336;
}
.button2:hover {
    background-color: #f44336;
    color: white; 


.label{
 
 margin-left:15%
 
 
 }
 display{
     
     width:40%;
     background-color: white;
     height:20%;
     
     
 } 
  .Footer{
  height:10%;
  width:100%;
  background-color:white;
    
    
  }
    
    
}
                </style>   
                
              
                
                
	</head>
	<body>
	<script>
//All Jquery is supposed to go inside this function
	$(document).ready(function() {
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
		
			$("#btnLogIn").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
			
				//"serializes" the data from each field in the form into an array of Name/Value pairs and assigns that to the data variable
				//Here is the documentation on this function if you wanna look at it
				//http://api.jquery.com/serializeArray/
				var data = $("#loginForm").serializeArray();
				//++++++++++++++++++
				//You'll want to copy the following lines and change the URLs as needed
                              
			
                                
                                $.post("LoginCheck.php", data, function(response) {
                                        $("#display").html("<h3>"+response+"<\h3>");
                                        console.log(response);
                                        
    });
                               // $.post("LoginCheck.php", data, function(response) {
                                       // $("#loginDisplay").html("<h1>"+response+"<\h1"); 
                                
                                
                                
				//var data = $("#loginForm").serializeArray();
				
				/*if(data[1].value == "super")
				{
					window.location = "Super.html";
				}
				else if(data[1].value == "admin")
				{
					window.location = "Administrator.html";
				}
				//++++++++++++++++++
				*/
				//var OutputString = ""+data[0].name+": "+data[0].value+"<br>"+data[1].name+": "+data[1].value;
				//console.log(OutputString);
				//$("#loginDisplay").html(OutputString);
				//sends the ajax request to the server
				//The arguments used in the function are, in order: 
				//1) the URL of the PHP file that will handle the request (in this case "your_PHP_file_here.php"),
				//2) the data you are sending with the request (in this case "data"),
				//3) the function to handle the response if the request is successful
				//
				//I can explain this a bit more in detail when we start working on the back end stuff. Or whenever you guys wanna know exactly how it works.
				//$.post("your_PHP_file_here.php", data, function(response) {
					//Your code to handle the response from the PHP file will go here
				//});
				
			});
	});
		</script>
                
           <ul class ="nav">
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                   
                   
                   
               </div>
        
                   
                   
             
                <li><a href ="Aboutus.php">About US</a></li>
              <li><a href ="Contact.php">Contact</a></li>
               <li><a href ="helppage.php">Help<a/></li>
               <li><a href ="Employeelogin.php">Login</a></li>
               
           </ul>
          <div class ="Banner">
              <img class ="Banner-img" src="hunstville banner.jpg">
              
          </div>
                
                <h1>Employee Login</h1>  
                
                
                <div class ="Login" >
                    <form id="loginForm">
			<label class ="label">Username:</label><input type="text" name="userName"><br>
			<label class ="label">Password:</label><input type="text" name="password"><br>
			
                        
                    
                    </form>
                    <div class ="display" id="display">
                 
                    </div>
                    <br>
		<button  class = "button button1" type="button" id="btnLogIn">Log In</button>
                       <button class="button button2" onclick="location='HomePage.php'">Cancel</button>
        </div>
                <br>
                <br>
                <div class ="Footer">
                    <p></p>
                    
                </div>
	</body>
</html>