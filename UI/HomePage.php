<DOCTYPE html>
<html>
	<head>
		
                 <meta charset="utf-8">
		
                <title> Huntsville Theaters</title>
              
        </head>

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
        padding:20px 0px 0px 20px;
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
    border-style: solid;
    border-color: red;
    border-radius: 5px;
    text-align: center;
    font-size:50px;
    color:white;
     font-family:'Arial',serif;   
        
        
        
    }
     .Venue-img1{
       float:left;
        width:30%;
     display:inline-block;
        
    }
   .Venue-img2{
        float:right;
         width:30%;
     display:inline-block;
        
        
    }
    .Button{
    
     position:absolute;
     bottom:5%;
     left:45%;
     background-color:#66ff66;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
}

.TicketButton1{
    
    position:absolute;
     bottom:0%;
     left:20%;
     background-color:white;
      border: none;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    
    
    
}
.TicketButton2{
    position:absolute;
     bottom:0%;
     left:60%;
     background-color:white;
      border: none;
      color: black;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
    
    
    
    
}
.TickButton1:hover{
    color:#0066ff;
    
    
}

 .left {
  border:dotted 10px red;
  float: left;
}

.right {
  border: dotted 10px red;
  float: right;
}
    
        </style>
        
        <body>
          
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
            <h1>Our Venues</h1>   
           
          
            <img class ="left" src ="civic hall.jpg">
                
                <img class ="right" src ="civic hall.jpg">
        
           
       
            
        
            </body>
       
            
            
            
            
         <input type="button" class="TicketButton1" value="Civic Center Play House" onclick="location='CivicHall.php'" />
       
        <input type="button" class="TicketButton2" value="Civic Center Hall" onclick="location='CivicPlayHouse.php'" />
        

            
         
                     
              
              
                


</html>