<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include "connection.php";
    session_start();
    $var_value =  $_SESSION['varname']; 
    
    
    $showID = $_POST["showID"];
    $seatSTR = $_POST["strJSON"];
    $seatArray = json_decode($_POST["strJSON"]);
  
    $query = "SELECT showname FROM showname WHERE showID ='$showID'";
    
    $result1 = mysqli_query($link, $query);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
  






<html>
	<head>
            <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                
		
                <title>Create Show</title>

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
    margin-left:0%;
    margin-right:0%;
    padding: 12px 20px;
    margin: 8px 0;
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

input[type=submit]:hover {
    background-color: #45a049;
}
.Login {
    
    width:50%;
    height:90%;
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
    width:40%;

      }
.button1 {
    margin-left:15%;
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
                </style>   
                
              
                
                
	</head>
	<body>
            <script>
	$(document).ready(function() {
            
            var show_ID = "<?php echo $showID ?>";
            var seatArray = <?php echo $seatSTR?>;
            var type;
            //console.log(show_ID);
            //console.log(seatArray);
            $("#PaymentType").change(function(){
                type = $(this).val();
                //console.log(type);
                if(type == 1)
                {
                    var message = "<p>Your Ticket will be reserved. You may pay for and pick up your ticket at the door or in advance.</p>";
                    $("#CustomerInfo").html(message);
                }
                else if(type == 2)
                {
                    var message = "<p>Your Ticket will be reserved. You may pay for and pick up your ticket at the door or in advance.</p>";
                    $("#CustomerInfo").html(message);
                }
                else if(type ==3)
                {
                    var CCForm = "<label>Card Number</label><input type=\"text\" placeholder=\"XXXX XXXX XXXX XXXX\"></input><br/>"+
                    "<label>Security Code</label><input type=\"text\" placeholder=\"XXX or XXXX\"></input><br/>"+
                    "<label>Name on Card</label><input type=\"text\" placeholder=\"John J. Doe\"></input><br/>"+
                    "<label>Billing Address</label><input type=\"text\"></input><br/>";
                    
                    $("#CustomerInfo").html(CCForm);
                }
            });
            
            $("#btnPurchaseTickets").click(function (){
                var seatString = JSON.stringify(seatArray);
                var type = $("#PaymentType").val();
                var data = {showID: show_ID , strJSON: seatString, payType: type};//$("#buyTicket").serializeArray();
                
                $.post("ProcessPurchase.php", data, function(response) {
                    if(response != "ERROR")
                    {
                        var message = "<p>Your Tickets have been successfully purchased. Please keep the following ticket numbers for your records.</p><br/>";
                        message = message + response +"<br/><button  class=\"button button2\" onclick=\"location='Homepage.php'\">Home</button>";
                        $("#mainPanel").html(message);
                    }
                    else
                    {
                        var message = "<p>There was a problem processing your order.</p>";
                        //$("#errorMSG").html(message);
                    }
                });
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
                
                <h1>Purchase Season Tickets</h1>  
                
                
                <div id="mainPanel" class ="Login" >
    
                    <form id="buyTicket">
                        <?php 
                        //echo "<input type=\"hidden\" name=\"ticketArray\" id=\"TicketJSON\" value=\"".$_POST["strJSON"]."\" />";
                        //echo "<input type=\"hidden\" name=\"showID\" id=\"showID\" value=\"".$showID."\" />";
                        //Show name
                        //if($row = $query->fetch_assoc())
                        //{
                        //    $showName = $row['showname'];
                        //    echo "<h3>".$showName."</h3>";
                        //}
                        //Seat List
                        //$TicketList ="<ul>";
                       
                        //Payment info
                         ?>
                        <label class ="label">First Name:</label><input type="text" name="Firstname"><br>
                         <label class ="label">Last Name:</label><input type="text" name="Lastname"><br>
                         <label class ="label">Email:</label><input type="text" name="Email"><br>
                          <label class ="label">Phone Number:</label><input type="text" name="Phonenumber"><br>
                           <label class ="label">Adress:</label><input type="text" name="Address"><br>
                        
                        <select id="PaymentType" namne="PayType">
                            <option value="1">Cash</option>
                            <option value="2">Check</option>
                            <option value="3">Credit/Debit Card</option>
                        </select>
                        <div id="CustomerInfo"></div>
                    </form>
                    <div id="errorMSG"></div>
                    <button  class = "button button1" type ="button" id="btnPurchaseTickets">Purchase Tickets</button>
                          <button  class = "button button2" onclick="location='Homepage.php'">Cancel</button>
                        
                    
                  
		
                </div>
                <br>
                <br>
                <div class ="Footer">
                    
                </div>
    </body>
</html>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

