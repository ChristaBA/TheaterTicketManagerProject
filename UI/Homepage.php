<DOCTYPE html>
<html>
	<head>
          
		     
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                
              <script>
    
//All Jquery is supposed to go inside this function
	/*$(document).ready(function() {
                        console.log("ready() called");
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
                        $.post("CreateAdmin.php", function(response){
                            console.log("Foo");
                           console.log(response);            
                        });
                     });*/
                        </script>
                <title> Huntsville Civic Center</title>
              <?php
              include 'CreateAdmin.php';
           session_start();
          $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "testdatabase";
            
$link =  mysqli_connect($servername, $username, $password, $dbname);



if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

//$query = "SELECT  Poster From showname";
$query = "SELECT DISTINCT Company FROM showname";
$result1 = mysqli_query($link, $query);
//echo $result1;          
      $companyarray = array();        
      
     $index =0;  
if (!$result1) {
    echo "Database Error Please add shows for this error to disappear";
}
else{
 while($row = $result1->fetch_assoc())    
 {
 
$companyarray[$index]=$row;

$index++;
  
   //echo "id: " . $row["showname"]. " - Name: " . $row["startdate"]. " " . $row["enddate"]. "<br>";

   
    
    
 }   
 }
 
 //echo implode("",$companyarray[0]);
 //$companya =  $companyarray[0];
   // $companyname = $companyarray[1];
if (!$result1) {
    echo "Database Error";
}
                               
 if(array_key_exists(0, $companyarray))
 {
  $companya=  implode(" ",$companyarray[0]);
 }
     else 
     {
         $companya = "NO SHOW";
      
     }
 if(array_key_exists(1, $companyarray))
 {
    
      $companyb=  implode(" ",$companyarray[1]);
 }
     else 
     {
      $companyb = "NO SHOW";
     }
 
     if(array_key_exists(2, $companyarray))
 {
     $companyc=  implode(" ",$companyarray[2]);
 }
     else 
     {
          $companyc = "NO SHOW";
     
     }
      
     if(array_key_exists(3, $companyarray))
 {
      $companyd=  implode(" ",$companyarray[3]);
 }
     else 
     {
          $companyd = "NO SHOW";
    
     }
      
     if(array_key_exists(4, $companyarray))
 {
           $companye=  implode(" ",$companyarray[4]);
    
 }
     else 
     {
        
      $companye = " NO SHOW";
     }
     
      if(array_key_exists(5, $companyarray))
    {  
              $companyf=  implode(" ",$companyarray[5]);
    }
     else 
     {
          $companyf = "NO SHOW";
   

     }
        if(array_key_exists(6, $companyarray))
    {  
              $companyf=  implode(" ",$companyarray[6]);
    }
     else 
     {
          $companyf = "NO SHOW ";
   

     }
         if(array_key_exists(6, $companyarray))
    {  
              $companyg=  implode(" ",$companyarray[6]);
    }
     else 
     {
          $companyg = "NO SHOW";
   

     }
         if(array_key_exists(6, $companyarray))
    {  
              $companyh=  implode(" ",$companyarray[6]);
    }
     else 
     {
          $companyh = "NO SHOW";
   

     }
   //$companyb=  implode(" ",$companyarray[1]);
   //$companyc=  implode(" ",$companyarray[2]);
   //$companyd=   implode(" ",$companyarray[3]);
   //$companye=   implode(" ",$companyarray[4]);g
  //$companyf=   implode(" ",$companyarray[5]);
 //session_unset();
   
  // $_SESSION['varname'] = $companyd;
    // $_SESSION['varname'] = $companyd;
    //$_SESSION['varname'] = $companyd;
     ?>          
              
  



        <STYLE>
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
    h1.one{
        
             width:80%;
      
    margin-left:10%;
    background:white;
    
    border-radius: 5px;
    text-align: center;
    font-size:20px;
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
     width:20%;
   
      }
.button1 {
     margin-left:4%;
  background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button1:hover {
    background-color: #555555;
    color: white;
}
.button2 {
   background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button2:hover {
  background-color: #555555;
    color: white;
    }
.button3 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button3:hover {
  background-color: #555555;
    color: white;
}
.button4 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button4:hover {
   background-color: #555555;
    color: white;
}
.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button5:hover {
    background-color: #555555;
    color: white;
}              
 .button6 {
   background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button6:hover {
   background-color: #555555;
    color: white;
}                    
.TicketButton1{
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    
    width:100%;
    /*margin-left:25%;
    margin-right:25%;
    */
     background-color:white;
     border: 2px solid #555555;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
     font-family:'Arial',serif;   
      font-size: 16px;
    
      cursor: pointer;
}
.TicketButton1:hover {
      background-color: #555555;
    color: white;
}
.Shows{
   width:40%;
   background-color:#cccccc;
    height:85%;
    display:inline-block;
     margin-left:5%; 
    opacity:0.2%;
    
    
} 
.Shows1{
    float:right;
    margin-right:5%;
    width:40%;
    background-color:#cccccc;
    height:85%;
    opacity: 0.2%;
    
    
}

.Footer{
  height:20%;
  width:100%;
  background-color:white;
    
    
    
    
    
}
        
        
        
        </style>
           </head> 
        <body>
<script>
    
//All Jquery is supposed to go inside this function
	$(document).ready(function() {
                        /*console.log("ready() called");
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
                        $.post("CreateAdmin.php", function(response){
                            //console.log("Foo");
                           console.log(response); 
                        });*/
                
			$("#companya").click(function() {
			console.log("Log in button clicked");
                           var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
			
				
			});
                        $("#companyb").click(function() {
			console.log("Log in button clicked");
                        
                      var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                    });
                         $("#companyc").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
			
				
			});
                         $("#companyd").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
			
				
			});
                        $("#companye").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                 var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
			
				
			});
                        $("#companyf").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
                             var data = {companyName: $(this).attr("value")};
                              
                              
                             
                                  
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
                              
				
			});
                        $("#companyg").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                  var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
			
				
			});
                        $("#companyh").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
					
				
                                //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
			
				
			});
    
                         
    
    });
		</script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </script>

           <ul class ="nav">
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                 </div>  
                  <li><a href ="Aboutus.php">About US</a></li>
                  <li><a href ="Contact.php">Contact</a></li>
                  <li><a href ="Helppage.php">Help<a/></li>
                  <li><a href ="Employeelogin.php">Login</a></li> 
                 </ul>  
               
        
              <div class ="Banner">
              <img class ="Banner-img" src="hunstville banner.jpg">
              
               </div>     
                   
             
                
               
           
            
            <h1>Showing this week</h1>   
          
            
            <div class ="Shows">
                  <h1>CompanyA</h1>
                <h1 class="one">Civic Playhouse</h1> 
              
                <img src ="Hamlet (Small).jpg"  style ="float:left; width:60%; height:70%;margin-right:2%;margin-left:20%;border:3px solid black;"/>
             
            </div>
            <div class ="Shows1">
                <h1>CompanyB</H1>
                <h1 class ="one">Civic Concert Hall</h1>
                
                <img src ="macbeth.jpg" style ="float:left; width:60%; height:70%;margin-right:2%;margin-left:20%;border:3px solid black;"/>
         
            </div>
            
            
          
             
   
                  <p style="clear: both;">
                     
       
         
            
            <br> 
                  <h1>Current Companys In Production</h1>
                  <div class =" footer">
<button class="button button1"  id="companya"value = "<?php echo $companya?>"><?php echo $companya ?></button>
<button class="button button1"  id="companyb"value = "<?php echo $companyb?>"><?php echo $companyb ?></button>
<button class="button button1"  id="companyc"value = "<?php echo $companyc?>"><?php echo $companyc ?></button>
<button class="button button1"  id="companyd"value = "<?php echo $companyd?>"><?php echo $companyd ?></button>
<button class="button button1"  id="companye"value = "<?php echo $companye?>"><?php echo $companye ?></button>
<button class="button button1"  id="companyf"value = "<?php echo $companyf?>"><?php echo $companyf ?></button>
<button class="button button1"  id="companyg"value = "<?php echo $companyg?>"><?php echo $companyg ?></button>
<button class="button button1"  id="companyh"value = "<?php echo $companyh?>"><?php echo $companyh ?></button>


               
                  </div>
                 
        
            </body>
       
            
            
            
            
        
        

            
         
                     
              
              
                


</html>

<!-- just saving this to test out github changes -->