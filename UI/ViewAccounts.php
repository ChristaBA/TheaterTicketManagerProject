<?php 
 include "connection.php";
session_start();
    $var_value =  $_SESSION['varname'];



?>

<html>
    
    <head>
 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    
    </head>
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
     width:40%;
    
      }
.button1 {
     margin-left:10%;
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
    border: 2px solid #008CBA;
}
.button2:hover {
    background-color: #008CBA;
    color: white;
}
.button3 {
    margin-left:10%;
    background-color: white;
    color: black;
    border: 2px solid yellow;
}
.button3:hover {
    background-color: yellow;
    color: black;
}
.button4 {
    background-color: white;
    color: black;
    border: 2px solid orange;
    margin-left:30%;
}
.button4:hover {
    background-color:orange;
}
.button5 {
    margin-left:30%;
    background-color: white;
    color: black;
    border: 2px solid orange;
}
.button5:hover {
    background-color: orange;
    color: white;
}              
 .button6 {
     margin-left:30%;
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button6:hover {
    background-color: red;
    color: white;
}                    
 .Login {
    
    width:90%;
    height:100%;
    
    margin-left:5%;
    border-radius: 5px;
    background-color:white;
    padding: 10px;
}                                  
                    
                </style>   
                
    <body>
         <script>
            $(document).ready(function() {
                $.post("getAccounts.php", function(response){
                   $("#AccountDisplay").html(response);
                   //console.log(response);
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
        
            
            
            <h1>Account Manager</h1> 
       
           
        <div class="Login" id ="AccountDisplay">
    
    </div>
        
        
       </body>
</html>
    



