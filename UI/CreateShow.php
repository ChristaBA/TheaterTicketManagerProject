<?php
          
include "connection.php";
session_start();
    $var_value =  $_SESSION['varname']; 
$query = "SELECT * FROM showname";
$result1 = mysqli_query($link, $query);
?>






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
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
		var data = $("#createshow").serializeArray();
	     $("#btnCreateShow").click(function() {
         $("#createshow").submit();
      
      
      
      
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
                
                <h1>Create Show</h1>  
                
                
                <div class ="Login" >
                    <form action="Showinsert.php" method="post" id="createshow" enctype="multipart/form-data" >
			<label class ="label">Show Name:</label><input type="text" name="showname"><br>
			<!--<label class ="label">Start Date:</label><input type="text" name="startDate"><br>-->
                       
                        <label class ="label">Location:</label><select name="location">
                                    <option value="">location</option>
                                    <option value="">-----</option>
                                    <option value ="Civic Playhouse">Civic Center Playhouse</option>
                                    <option value ="Civic Center">Civic Center Concert Hall</option>       
                        </select>
   


<label class ="label ">Select Month: </label><select name='month' id='monthid'>
    <option value="">Month</option>
      <option value="">-----</option>
      <option value="01">January</option>
      <option value="02">February</option>
      <option value="03">March</option>
      <option value="04">April</option>
      <option value="05">May</option>
      <option value="06">June</option>
      <option value="07">July</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select>
<label class ="label ">Select Day: </label><select name='day' id='dayid'>

      <option value="">Day</option>
      <option value="">---</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select>
<label class ="label ">Select Year: </label><select name='year' id='yearid'>
        <option value="">Year</option>
      <option value="">----</option>
    <option value='2016'>2016</option>
<option value='2017'>2017</option>
<option value='2018'>2018</option>
<option value='2019'>2019</option>
<option value='2020'>2020</option>
<option value='2021'>2021</option>
        
<option value='2022'>2022</option>
<option value='2023'>2023</option>
<option value='2024'>2024</option>
<option value='2025'>2025</option>


</select>

<label class ="label ">Select Showing: </label>
<select id="showingid" name="showing">
    <option value="0">Select a Showing</option>
    <option value="1">First Showing</option>
    <option value="2">Second Showing</option>
    <option value="3">Third Showing</option>
    <option value="4">Fourth Showing</option>
    <option value="5">Fifth Showing</option>
    <option value="6">Sixth Showing</option>
</select>
                        <!--<label class ="label">Poster Img:</label><input type="text" name="PosterUrl"><br>--
                         <label class ="label">Company Name:</label><input type="text" name="Company"><br>-->
                     <label class ="fileContainer">Upload Poster: </label><input type="file" name="fileToUpload"><br>
                        
                    
                    </form>
                        
                    <button  class = "button button1" type ="submit" value ="Submit"  id="btnCreateShow">Create Show</button>
                          <button  class = "button button2" onclick="location='Super.php'">Cancel</button>
                        
                    
                  
		
        </div>
                <br>
                <br>
                <div class ="Footer">
                    
                </div>
	</body>
</html>

