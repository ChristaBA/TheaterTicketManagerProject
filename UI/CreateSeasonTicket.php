<html>
    
    <head>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<title>Create Season Ticket</title>
    
    
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
  .label{
 
 margin-left:10%
 
 
 }
 .fileContainer {
    overflow: hidden;
   margin-left:10%;
}

.fileContainer [type=file] {
    cursor: inherit;
    display: block;
    font-size: 999px;
    filter: alpha(opacity=0);
    min-height: 100%;
    min-width: 100%;
    opacity: 0;
    position: absolute;
    right: 0;
    text-align: right;
    top: 0;
}
  .Footer{
  height:10%;
  width:100%;
  background-color:white;
    
    
    
    
    
}                   
input[type=text], select {
    width: 70%;
    margin-left:0%;
    margin-right:0%;
    padding: 12px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 70%;
    margin-left:0%;
    margin-right:0%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=number], select {
    width: 70%;
    margin-left:0%;
    margin-right:0%;
    padding: 12px 20px;
    margin: 0px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.Login {
    
    width:50%;
    height:100%;
    margin-right:25%;
    margin-left:25%;
    border-radius: 5px;
    background-color:white;
    padding: 10px;
}                   
                </style>   
                </head>
    <body>
                    <script>
	$(document).ready(function() {
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
		
	     $("#btnCreateSeasonTicket").click(function() {
         $("#CreateSeasonTicket").submit();
              
    });
    });
		</script>
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
        <div class ="login">
        <form action="SeasonTicketInsert.php" id="CreateSeasonTicket" method="post">
    <p>
       <label class ="label">First Name:</label>
        <input type="text" name="firstname" id="firstName">
    </p>
    <p>
        <label class="label">Last Name:</label>
        <input type="text" name="lastname" id="lastName">
    </p>
    <p>
        <label class="label">Ticket Number:</label>
       <input type="text" name="ticketNumber" id="ticketNumber">
    </p>
    <p>
        <label class="label">Email:</label>
        <input type="text" name="email" id="email">
    </p>
     <p>
        <label class="label">Phone Number:</label>
        <input type="number" name="phoneNumber" id="phoneNumber">
    </p>
     <p>
        <label class="label">Seat:</label>
        <input type="text" name="seat" id="seat">
    </p>
    <p>
        <label class="label">Day:</label>
        <input type="text" name="day" id="day">
    </p>
    <p>
        <label class="label">Time:</label>
        <input type="text" name="time" id="time">
    </p>
    <p>
        <label class="label">Address:</label>
        <input type="text" name="address" id="address">
    </p>
    
</form>   
        <button  class = "button button1" type ="submit" value ="Submit"  id="btnCreateSeasonTicket">Create Season Ticket</button>
</div>