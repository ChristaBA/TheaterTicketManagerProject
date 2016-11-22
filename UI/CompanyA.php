<html>
	<head>
		 
                 <meta charset="utf-8">
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
                <title> Huntsville Civic Center</title>
              <?php
 session_start();
    $var_value = $_SESSION['varname'];
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
 $enddate =date("Y/m/d");

 
 
//$query = "SELECT  Poster From showname";
$showquery = "SELECT DISTINCT showname FROM showname"
        . " WHERE Company = '$var_value'";
$picquery = "SELECT DISTINCT image, MAX(date) FROM showname WHERE Company = '$var_value'AND date>= '$todaysdate' GROUP BY image ORDER BY MAX(date) ASC, image";
//$Sdatequery ="SELECT startdate FROM showname WHERE Company = '$var_value' GROUP BY image ORDER BY MAX(date) DESC, image;
$Edatequery ="SElECT DISTINCT endate FROM showname WHERE Company = '$var_value'"; 
$Lquery ="SElECT location FROM showname WHERE Company = '$var_value'";
$dateq  = "SELECT date FROM showname WHERE Company = '$var_value'";
 
$result1 = mysqli_query($link, $showquery);
$result2 = mysqli_query($link, $picquery);
//$result3 = mysqli_query($link, $Sdatequery);
$result4 = mysqli_query($link, $Edatequery);
$result5 = mysqli_query($link, $Lquery);
$result6 = mysqli_query($link, $dateq);
?>
               
                <?php            
              //while($row =  mysqli_fetch_array($result1))
       $showarray = array();
       $picturearray =array();
       $locationarray =array();
        $enddatearray = array();
        $Sdatearray = array();
        $Edatearray = array();
     $index = 0;
      while($row = $result6->fetch_assoc())    
 {
     

  $showdate =$row["date"];

  

  
 }  
 while($row = $result1->fetch_assoc())    
 {
     

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
    $showarray[$index]= $row;
$index++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0, $showarray))
 {
      $showname1 =  implode(" ",$showarray[0]);
     
 }
     else 
     {
     
     $showname1 = "NO SHOW";
     }
 if(array_key_exists(1, $showarray))
 {
    
    $showname2 = implode(" ",$showarray[1]);
 }
     else 
     {
     $showname2 = "NO SHOW";
     }
  if(array_key_exists(2, $showarray))
 {
     $showname3 =  implode(" ",$showarray[2]);
     
 }
     else 
     {
     
    $showname3 = "NO SHOW";
     }
 if(array_key_exists(3, $showarray))
 {
    
    $showname4 = implode(" ",$showarray[3]);
 }
     else 
     {
    $showname4 = "NO SHOW";
     }
    if(array_key_exists(4, $showarray))
 {
  $showname5 =  implode(" ",$showarray[4]);
     
 }
     else 
     {
     
  $showname5 = "NO SHOW";
     }
 if(array_key_exists(5, $showarray))
 {
    
    $showname6 = implode(" ",$showarray[5]);
 }
     else 
     {
  $showname6 = "NO SHOW";
     }
  if(array_key_exists(6, $showarray))
 {
     $showname7 =  implode(" ",$showarray[6]);
     
 }
     else 
     {
     
     $showname7 = "NO SHOW";
     }
 if(array_key_exists(7, $showarray))
 {
    
     $showname8 = implode(" ",$showarray[7]);
 }
     else 
     {
   $showname8 = "NO SHOW";
     }
 
      if(array_key_exists(8, $showarray))
 {
     $showname9=  implode(" ",$showarray[8]);
     
 }
     else 
     {
     
    $showname9 = "NO SHOW";
     }
 if(array_key_exists(9, $showarray))
 {
    
     $showname10 = implode(" ",$showarray[9]);
 }
     else 
     {
    $showname10 = "NO SHOW";
     }
  if(array_key_exists(10, $showarray))
 {
     $showname11 =  implode(" ",$showarray[10]);
     
 }
     else 
     {
     
     $showname11 = "NO SHOW";
     }
 if(array_key_exists(11, $showarray))
 {
    
     $showname12 = implode(" ",$showarray[11]);
 }
     else 
     {
   $showname12 = "NO SHOW";
     }
     
     
     
     
   $index2 =0;  
    while($row = $result2->fetch_assoc())    
 {   
 
 //$img =$row['image'];
  //
      $picturearray[$index2]=$row;

$index2++;
  
 }     
   //echo "id: " . $row["showname"]. " - Name: " . $row["startdate"]. " " . $row["enddate"]. "<br>";
   //$companyname =$row["Company"];
    //echo'<img  src=' . $row["$Poster"] . ' width="60" height="60" alt="word" />';
  ///echo "img src='",$row['Poster'],"' width='175' height='200' />";
 
   //$_SESSION['date'] = $companyb;
    //$_SESSION['location'] = $companyb;
     //$_SESSION['startdate'] = $companyb;
      //$_SESSION['varname'] = $companyb;
 $index4 =0;
 if(array_key_exists(0, $picturearray))
 {
      $img=  implode(" ",$picturearray[0]);
     
 }
     else 
     {
     
     $img = "NO SHOW";
     }
 if(array_key_exists(1, $picturearray))
 {
    
      $img2 = implode(" ",$picturearray[1]);
 }
     else 
     {
     $img2 = "NO SHOW";
     }
  if(array_key_exists(2, $picturearray))
 {
      $img3=  implode(" ",$picturearray[2]);
     
 }
     else 
     {
     
     $img3 = "NO SHOW";
     }
 if(array_key_exists(3, $picturearray))
 {
    
      $img4 = implode(" ",$picturearray[3]);
 }
     else 
     {
     $img4 = "NO SHOW";
     }
    if(array_key_exists(4, $picturearray))
 {
      $img5=  implode(" ",$picturearray[4]);
     
 }
     else 
     {
     
     $img5 = "NO SHOW";
     }
 if(array_key_exists(5, $picturearray))
 {
    
      $img6 = implode(" ",$picturearray[5]);
 }
     else 
     {
     $img6 = "NO SHOW";
     }
     
   if(array_key_exists(6, $picturearray))
 {
      $img7 =  implode(" ",$picturearray[6]);
     
 }
     else 
     {
     
     $img7 = "NO SHOW";
     }
 if(array_key_exists(7, $picturearray))
 {
    
      $img8 = implode(" ",$picturearray[7]);
 }
     else 
     {
     $img8 = "NO SHOW";
     }  
     
     $index3 = 0;
     
     
  while($row = $result6->fetch_assoc())    
 {   
 
 
      $Sdatearray[$index3]=$row;

$index3++;
  
 }         
   if(array_key_exists(0, $Sdatearray))
 {
      $sdate1=  implode(" ",$Sdatearray[0]);
     
 }
     else 
     {
     
     $sdate1= "NO SHOW";
     }
 if(array_key_exists(1, $Sdatearray))
 {
    
    $sdate2 = implode(" ",$Sdatearray[1]);
 }
     else 
     {
    $sdate2 = "NO SHOW";
     }
  if(array_key_exists(2, $Sdatearray))
 {
      $sdate3 =  implode(" ",$Sdatearray[2]);
     
 }
     else 
     {
     
     $sdate3 = "NO SHOW";
     }
 if(array_key_exists(3, $Sdatearray))
 {
    
      $sdate4 = implode(" ",$Sdatearray[3]);
 }
     else 
     {
    $sdate4 = "NO SHOW";
     }
    if(array_key_exists(4, $Sdatearray))
 {
      $sdate5 =  implode(" ",$Sdatearray[4]);
     
 }
     else 
     {
     
     $sdate5 = "NO SHOW";
     }
 if(array_key_exists(5, $Sdatearray))
 {
    
    $sdate6= implode(" ",$Sdatearray[5]);
 }
     else 
     {
    $sdate6 = "NO SHOW";
     }
     
   if(array_key_exists(6, $Sdatearray))
 {
     $sdate7 =  implode(" ",$Sdatearray[6]);
     
 }
     else 
     {
     
   $sdate7 = "NO SHOW";
     }
 if(array_key_exists(7, $Sdatearray))
 {
    
   $sdate8 = implode(" ",$Sdatearray[7]);
 }
     else 
     {
 $sdate8 = "NO SHOW";
         
     }

while($row = $result5->fetch_assoc())    
 {
     

  /*$showname =$row["showname"];
  $StartDate =$row["startdate"];
  $enddate =$row["enddate"];
  $location =$row["location"];
  //$img =$row['image'];
  */
    $locationarray[$index4]= $row;
$index4++;
  
 }    
     
 
 
 
 
 if(array_key_exists(0,  $locationarray))
 {
      $location1 =  implode(" ", $locationarray[0]);
     
 }
     else 
     {
     
      $location1  = "NO SHOW";
     }
 if(array_key_exists(1,  $locationarray))
 {
    
     $location2 = implode(" ", $locationarray[1]);
 }
     else 
     {
      $location2  = "NO SHOW";
     }
  if(array_key_exists(2,  $locationarray))
 {
     $location3  =  implode(" ", $locationarray[2]);
     
 }
     else 
     {
     
     $location3 = "NO SHOW";
     }
 if(array_key_exists(3,  $locationarray))
 {
    
     $location4  = implode(" ", $locationarray[3]);
 }
     else 
     {
     $location4  = "NO SHOW";
     }
    if(array_key_exists(4,  $locationarray))
 {
   $location5  =  implode(" ", $locationarray[4]);
     
 }
     else 
     {
     
   $location5  = "NO SHOW";
     }
 if(array_key_exists(5,  $locationarray))
 {
    
     $location6  = implode(" ", $locationarray[5]);
 }
     else 
     {
   $location6  = "NO SHOW";
     }
  if(array_key_exists(6,  $locationarray))
 {
  $location7  =  implode(" ", $locationarray[6]);
     
 }
     else 
     {
     
     $location7  = "NO SHOW";
     }
 if(array_key_exists(7,  $locationarray))
 {
    
     $location8  = implode(" ", $locationarray[7]);
 }
     else 
     {
   $location8  = "NO SHOW";
     }
 
      if(array_key_exists(8,  $locationarray))
 {
      $location9 =  implode(" ", $locationarray[8]);
     
 }
     else 
     {
     
     $location9  = "NO SHOW";
     }
 if(array_key_exists(9,  $locationarray))
 {
    
      $location10  = implode(" ", $locationarray[9]);
 }
     else 
     {
     $location10  = "NO SHOW";
     }
  if(array_key_exists(10,  $locationarray))
 {
      $location11  =  implode(" ", $locationarray[10]);
     
 }
     else 
     {
     
      $location11  = "NO SHOW";
     }
 if(array_key_exists(11,  $locationarray))
 {
    
      $location12  = implode(" ", $locationarray[11]);
 }
     else 
     {
    $location12  = "NO SHOW";
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
   width:30%;
   background-color:#cccccc;
    height:85%;
    display:inline-block;
     margin-left:2%; 
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
<script>
//All Jquery is supposed to go inside this function
	$(document).ready(function() {
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
		
                
			$("#showbtn1").click(function() {
			//console.log("Log in button clicked");
                           var data = {showName: $(this).attr("value")};
                       //console.log(data);
                       //
                       //
//window.location = "http://stackoverflow.com";
                   
                       $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
                         
                     
				
			});
                        $("#showbtn2").click(function() {
			console.log("Log in button clicked");
                        
                      var data = {showName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                    $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
                    });
                         $("#showbtn3").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {showName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                             $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
                         
			
				
			});
                         $("#showbtn4").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {showName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                             $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
                         
			
				
			});
                        $("#showbtn5").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                 var data = {showName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                             $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
                         
			
				
			});
                        $("#showbtn6").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
                             var data = {showName: $(this).attr("value")};
                              
                              
                             
                                  
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                             $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
                              
				
			});
                        $("#showbtn7").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                  var data = {showName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                             $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
			
				
			});
                        $("#showbtn8").click(function() {
			console.log("Log in button clicked");
			//window.location = "http://stackoverflow.com";
                                
        
                                   var data = {showName: $(this).attr("value")};
                       //console.log(data);
			//window.location = "http://stackoverflow.com";
                       $.post("sessionset.php", data, function(response) {
			//console.log("Response: "+response);		
			if(response === "Civic Center")
                        {
                              //console.log(response);
                              window.location ="Seatselector2000.php";	
			}
                        else if(response === "Civic Playhouse")
                        {
                            window.location ="Seatselector500.php";
                        }
                    });
			
				
			});
    
                         
    
    });
		</script>
      
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
                
                <h1 class = one><?php echo  $showname1?></h1>
                <h1 class = one><?php echo  $location1?></h1>
                  <h1 class = one><?php echo  $sdate1?></h1>
                0
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
          <button class="button button1"  id="showbtn1"value = "<?php echo $showname1?>">Click For Show Times</button>
            
            </div>
            
            
            <div class ="Shows">
                
                <h1 class = one><?php echo  $showname2?></h1>
                <h1 class = one><?php echo  $location2?></h1>
                
                
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img2 ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
           <button class="button button1"  id="showbtn2"value = "<?php echo $showname2?>">Click For Show Times</button>
            
            </div>
            <div class ="Shows">
                
                <h1 class = one><?php echo  $showname3?></h1>
                <h1 class = one><?php echo  $location3?></h1>
              
                
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img3 ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
           <button class="button button1"  id="showbtn3"value = "<?php echo $showname3?>">Click For Show Times</button>
            
            </div>
            <div class ="Shows">
                
                <h1 class = one><?php echo  $showname4?></h1>
                 <h1 class = one><?php echo  $location4?></h1>
            
                
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img4 ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
           <button class="button button1"  id="showbtn4"value = "<?php echo $showname4?>">Click For Show Times</button>            
            </div>
            <div class ="Shows">
                
                <h1 class = one><?php echo  $showname5?></h1>
                 <h1 class = one><?php echo  $location5?></h1>
              
                
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img5 ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
          <button class="button button1"  id="showbtn5"value = "<?php echo $showname5?>">Click For Show Times</button>
            
            </div>
            <div class ="Shows">
                
                <h1 class = one><?php echo  $showname6?></h1>
                 <h1 class = one><?php echo  $location6?></h1>
              
                
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img6 ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
           <button class="button button1"  id="showbtn6"value = "<?php echo $showname6?>">Click For Show Times</button>
            
            </div>
            <div class ="Shows">
                
                <h1 class = one><?php echo  $showname7?></h1>
                 <h1 class = one><?php echo  $location7?></h1>
              
                
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img7 ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
         <button class="button button1"  id="showbtn7"value = "<?php echo $showname7?>">Click For Show Times</button>
            
            </div>
            <div class ="Shows">
                
                <h1 class = one><?php echo  $showname8?></h1>
                 <h1 class = one><?php echo  $location8?></h1>
            
                
                
                 
            <?php echo '<img src="data:image/jpeg;base64,' . base64_encode( $img8 ) . '"style ="float:left; width:70%; height:65%;margin-right:0%;margin-left:15%;border:3px solid black;" />';?>
<button class="button button1"  id="showbtn8"value = "<?php echo $showname9?>">Click For Show Times</button>
            
            </div>
            
          
           
  
                <p style="clear: both;">
             
             <br>
             
                <div class ="Footer">
                    
                   <button class ="button button2" onclick="location='CreateSeasonTicket.hrml'">Get Season Tickets</button>
                    
                    
                </div>
              
               
        </body>
</html>
         

