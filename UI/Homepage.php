<DOCTYPE html>
<html>
	<head>
          
		     
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                
              <script>

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

date_default_timezone_set("America/Chicago");
$todaysdate = date("Y/m/d");
 
//$date = implode(' /',$year);
//$month = explode('/',$todaysdate);
///$date1 = implode(' /',$month);
//$date1 =date("Y/m/d ",strtotime($todaysdate)); 

 $civiclocation = "Civic Center";
 $civicplayhouse ="Civic Playhouse";
 
 
  //$endate = strtotime("+1 week", $todaysdate);

$query = "SELECT DISTINCT Company FROM showname";
$civicbydate ="SELECT Company FROM showname Where date = '$todaysdate ' AND location = '$civiclocation'LIMIT 1";
$civicpicbydate ="SELECT image FROM showname Where date ='$todaysdate ' AND location = '$civiclocation'LIMIT 1";
$civicshowid= "SELECT showId FROM showname Where date = '$todaysdate ' AND location = '$civiclocation'LIMIT 1";

$playhousebydate ="SELECT Company FROM showname Where date = '$todaysdate ' AND location = '$civicplayhouse'LIMIT 1";
$playhousepicbydate= "SELECT image FROM showname Where date = '$todaysdate ' AND location = '$civicplayhouse'LIMIT 1";
$playhouseshowid= "SELECT showId FROM showname Where date = '$todaysdate ' AND location = '$civicplayhouse'LIMIT 1";



$civicshowresult = mysqli_query($link, $civicshowid);
$playhouseshowresult = mysqli_query($link, $playhouseshowid);

$civicresult =   mysqli_query($link, $civicbydate);
$playhouseresult =mysqli_query($link, $playhousebydate);
$playhousepicresult =mysqli_query($link, $playhousepicbydate);
$civicpicresult   =  mysqli_query($link, $civicpicbydate);
$result1 = mysqli_query($link, $query);
 
//echo $result1;          
      $companyarray = array();        
      $civicarray =array();
      $playhousearray =array();
      $playhousepics =array();
      $civicpic = array();
      $playhouseids =array();
      $civicids =array();
      
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
         $companya = "NO COMPANY";
      
     }
 if(array_key_exists(1, $companyarray))
 {
    
      $companyb=  implode(" ",$companyarray[1]);
 }
     else 
     {
      $companyb = "NO COMPANY";
     }
 
     if(array_key_exists(2, $companyarray))
 {
     $companyc=  implode(" ",$companyarray[2]);
 }
     else 
     {
          $companyc = "NO COMPANY";
     
     }
      
     if(array_key_exists(3, $companyarray))
 {
      $companyd=  implode(" ",$companyarray[3]);
 }
     else 
     {
          $companyd = "NO COMPANY";
    
     }
      
     if(array_key_exists(4, $companyarray))
 {
           $companye=  implode(" ",$companyarray[4]);
    
 }
     else 
     {
        
      $companye = "NO COMPANY";
     }
     
      if(array_key_exists(5, $companyarray))
    {  
              $companyf=  implode(" ",$companyarray[5]);
    }
     else 
     {
          $companyf = "NO COMPANY";
   

     }
        if(array_key_exists(6, $companyarray))
    {  
              $companyf=  implode(" ",$companyarray[6]);
    }
     else 
     {
          $companyf = "NO COMPANY";
   

     }
         if(array_key_exists(6, $companyarray))
    {  
              $companyg=  implode(" ",$companyarray[6]);
    }
     else 
     {
          $companyg = "NO COMPANY";
   

     }
         if(array_key_exists(6, $companyarray))
    {  
              $companyh=  implode(" ",$companyarray[6]);
    }
     else 
     {
          $companyh = "NO COMPANY";
   

     }
$index2=0;
  while( $row = $civicresult->fetch_assoc())
  {
 
  

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
    $civicarray[$index2]= $row;
$index2++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0, $civicarray))
 {
      $company =  implode(" ",$civicarray[0]);
     
 }
     else 
     {
     
     $company = "NO COMPANY";
     }

  $index3=0;
  while( $row = $civicpicresult->fetch_assoc())
  {
 
  

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
    $civicpic[$index3]= $row;
$index3++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0, $civicpic))
 {
      $civicimg =  implode(" ",$civicpic[0]);
     
 }
     else 
     {
     
     $civicimg= "NO COMPANY";
     }  
     
     
     $index4=0;
  while( $row = $playhouseresult->fetch_assoc())
  {
 
  

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
   $playhousearray [$index4]= $row;
$index4++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0, $playhousearray))
 {
      $playhousecompany =  implode(" ",$playhousearray[0]);
     
 }
     else 
     {
     
    $playhousecompany = "NO COMPANY";
     }

  $index5=0;
  while( $row = $playhousepicresult->fetch_assoc())
  {
 
  

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
$playhousepics[$index5]= $row;
$index5++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0, $playhousepics))
 {
      $playhouseimg =  implode(" ",$playhousepics[0]);
     
 }
     else 
     {
     
        $playhouseimg= "NO COMPANY";
     }  
 
     $index6 = 0;
     while( $row = $civicshowresult->fetch_assoc())
  {
 
  

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
$civicids[$index6]= $row;
$index6++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0, $civicids))
 {
      $civicid =  implode(" ",$civicids[0]);
     
 }
     else 
     {
     
        $civicid = "NO COMPANY";
     } 
     
     $index7 = 0;
     while( $row = $playhouseshowresult->fetch_assoc())
  {
 
  
$playhouseids[$index7]= $row;
$index7++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0,$playhouseids))
 {
      $playhouseshowid =  implode(" ",$playhouseids[0]);
     
 }
     else 
     {
     
      $playhouseids = "NO COMPANY";
     }  

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
    width:40%;
   background-color: white;
    color: black;
    border: 2px solid #555555;
    margin-left:30%;
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
   width:45%;
   background-color:#cccccc;
    height:105%;
    display:inline-block;
     margin-left:2.5%; 
    opacity:0.2%;
    
    
} 
.Shows1{
    float:right;
    margin-right:2%;
    width:45%;
    background-color:#cccccc;
    height:90%;
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
                       console.log(data);
			//window.location = "http://stackoverflow.com";
                    
        
        if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
				
			});
                        $("#companyb").click(function() {
			console.log("Log in button clicked");
                        
                      var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                          console.log(data);
                        
         
                        
                        
                if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
                    });
                         $("#companyc").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                    if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
				
			});
                         $("#companyd").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
              if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
                         
			
				
			});
                        $("#companye").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                 var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                 if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
				
			});
                        $("#companyf").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
                             var data = {companyName: $(this).attr("value")};
                              
                              
                             
                                  
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
           if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
                              
				
			});
                        $("#companyg").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                  var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
       if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
			
				
			});
                        $("#companyh").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {companyName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
           if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "CompanyA.php";
                       
			
				
			});
                         
        }
			
				
			});
     $("#btnCivicticket").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {Btnid: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
           if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "SeatSelector2000.php";
                       
			
				
			});
                         
        }
			
				
			});
    
                $("#btnPlayhouseticket").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {Btnid: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
           if ($(this).attr("value") != "NO COMPANY")
        {
        $.post("sessionset.php", data, function(response) {
					
				
                               //console.log(response);
                              window.location = "SeatSelector500.php";
                       
			
				
			});
                         
        }
			
				
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
                   
             
                
               
           
            
            <h1>Now Showing - - - <?php echo $todaysdate?></h1>   
          
            
            <div class ="Shows">
                  <h1><?php echo  $company?></h1>
                <h1 class="one">Civic Concerthall</h1> 
              
                <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $civicimg ) . '"style ="float:left; width:50%; height:70%;margin-right:0%;margin-left:25%;border:3px solid black;" />';?>
             <button class="button button2"  id="btnCivicticket"value = "<?php echo $civicid?>">Get Tickets</button>
            </div>
            <div class ="Shows">
                 <h1><?php echo  $playhousecompany?></h1>
                <h1 class ="one">Civic Playhouse</h1>
                
               <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $playhouseimg ) . '"style ="float:left; width:50%; height:70%;margin-right:0%;margin-left:25%;border:3px solid black;" />';?>
         <button class="button button2"  id="btnPlayhouseticket" value = "<?php echo $playhouseshowid?>">Get Tickets</button>
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