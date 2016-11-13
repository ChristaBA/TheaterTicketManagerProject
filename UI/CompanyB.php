<html>
	<head>
		 
                 <meta charset="utf-8">
		
                <title> Huntsville Civic Center</title>
              <?php

          $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "testdatabase";
$link =  mysqli_connect($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 
  session_start();
    $var_value = $_SESSION['varname'];
//$query = "SELECT  Poster From showname";
$query = "SELECT  showname,startdate,enddate,location,Poster,Company FROM showname WHERE Company = '$var_value'";





 
$result1 = mysqli_query($link, $query);
?>
               
                <?php            
              //while($row =  mysqli_fetch_array($result1))
 while($row = $result1->fetch_assoc())    
 {
     
  $showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];

  
   //echo "id: " . $row["showname"]. " - Name: " . $row["startdate"]. " " . $row["enddate"]. "<br>";
   //$companyname =$row["Company"];
    //echo'<img  src=' . $row["$Poster"] . ' width="60" height="60" alt="word" />';
  ///echo "img src='",$row['Poster'],"' width='175' height='200' />";
 }
  
 
  

          
      


    
    
     
 
?>
              
        

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
    h1.one{
        
                width:100%;
      
    
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
     width:80%;
   
      }
.button1 {
     margin-left:10%;
  background-color: white;
    color: black;
    border: 2px solid #555555;
}
.button1:hover {
    background-color: #555555;
    color: white;
}
.button2 {
    width:50%;
    margin-left:25%;
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
   width:20%;
   background-color:#cccccc;
    height:60%;
    display:inline-block;
     margin-left:10%; 
    opacity:0.2%;
    
    
} 
.Shows1{
    float:right;
    margin-right:10%;
    width:35%;
    background-color:#cccccc;
    height:75%;
    opacity: 0.2%;
    
    
}

.Footer{
  height:10%;
  width:100%;
  background-color:white;
    
    
    
    
    
}
        </style>
         </head>

        <body>
       
           <ul class ="nav">
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                 </div>  
                  <li><a href ="Aboutus.php">About US</a></li>
                  <li><a href ="Contact.php">Contact</a></li>
                  <li><a href ="helppage.php">Help</a></li>
                  <li><a href ="Employeelogin.php">Login</a></li> 
                 </ul>  
               
        
              <div class ="Banner">
              <img class ="Banner-img" src="hunstville banner.jpg">
              
              </div>
            <h1><?php echo  $var_value?></h1><br>
            <h1>Showing this Season</h1>
            <div class ="Shows">
                <h1 class = one><?php echo  $StartDate?></h1>
           <img src ="Hamlet (Small).jpg" style ="float:left; width:80%; height:80%;margin-right:0%;margin-left:10%;border:3px solid black;">
           <button class="button button1" onclick="location='SeatSelector.html'">Show Times</button>
            
            </div>
  
                <p style="clear: both;">
             
             <br>
             
                <div class ="Footer">
                    
                   <button class ="button button2" onclick="location='CreateSeasonTicket.hrml'">Get Season Tickets</button>
                    
                    
                </div>
              
               
        </body>
</html>
         