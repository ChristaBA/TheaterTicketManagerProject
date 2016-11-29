<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
include "connection.php";

$companyName = $_SESSION['varname'];
if(isset($_SESSION['Showid']))
{
    $show_id = $_SESSION['Showid'];   
    $script_str = "document.getElementById(\"opts\").value = \"".$show_id."\";"
            . "document.getElementById(\"schart\").style.display = \"block\";"
            . "updateSeats(sc);";
}

date_default_timezone_set("America/Chicago");
$today = date("Y/m/d");

if(isset($_SESSION['showname']))
{
    $show_name = $_SESSION['showname'];
    
    $getShows = mysqli_query($link,"Select * FROM showname WHERE Company = '$companyName' AND showname = '$show_name' AND date >= '$today'");

}
$optOut = "";
$showing = 0;
$seatsJS = "";

while ($row = $getShows->fetch_assoc())
    {
        $tempSeats = array();
        $id = $row['showId'];
        $optOut .= "<option value=\"".$row['showId']."\">";
        $splitDate = array_reverse(explode("/", $row['date']));
        $dateOut = implode("/",$splitDate);
        $optOut .= $dateOut." ".$row['time']."</option>";
    
        $ticketQuery = "SELECT seatNumber FROM tickets WHERE ShowId = '$id'";
        $ticketResult = mysqli_query($link, $ticketQuery);
        $showingQuery = "SELECT showing FROM showname WHERE showId = '$id' LIMIT 1";
        $showingresult = mysqli_query($link, $showingQuery);
        if($row1 = $showingresult->fetch_assoc())
        {
            $showing = $row1['showing'];
        }
        $seasonQuery = "SELECT seat FROM seasonticket WHERE company = '$companyName' AND day = '$showing'";
        $seasonResult = mysqli_query($link, $seasonQuery);

        while($row2 = $ticketResult->fetch_assoc())
        {
            array_push($tempSeats, $row2['seatNumber']);
        }
        while($row3 = $seasonResult->fetch_assoc())
        {
            array_push($tempSeats, $row3['seat']);
        }
        
        $seatsJS .= "if (selopt == \"".$id."\" )"
                . "{"
                . "     takenseats = ".json_encode($tempSeats).";"
                . "}";
    }
?>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Theater Manager Ticket Selector</title>
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="jquery.seat-charts.css">
<style>
body {
	font-family: 'Roboto', sans-serif;
  background-color:#fafafa;
}
a {
	color: #b71a4c;
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
     
.stage-indicator {
	width: 475px;
	margin: 5px 32px 15px 32px;
	background-color: #00f6f6;	
	color: #000000;
	text-align: center;
	padding: 3px;
	border-radius: 20px;
	margin-left: 288px;
}

.container {
	width: 1400px;
	text-align: left;
}
.booking-details {
	float: left;
	text-align: left;
	margin-left: 10px;
	font-size: 12px;
	position: relative; 
	height: 460px;
}
.booking-details h2 {
	margin: 25px 0 20px 0;
	font-size: 17px;
}
.booking-details h3 {
	margin: 5px 5px 0 0;
	font-size: 14px;
}
div.seatCharts-cell {
	color: #182C4E;
	height: 14px;
	width: 14px;
	line-height: 15px;
	margin: 1px;
	float: left;
	text-align: center;
	outline: none;
	font-size: 8px;
	
}
div.seatCharts-seat {
	color: #FFFFFF;
	cursor: pointer;	
}
div.seatCharts-row {
	height: 20px;
}
div.seatCharts-seat.available {
	background-color: #B9DEA0;
}
div.seatCharts-seat.available.premium-orchestra {
	background-color: #3a78c3;
}
div.seatCharts-seat.available.balcony {
	background-color: #993ac3;
}
div.seatCharts-seat.focused {
	background-color: #76B474;
}
div.seatCharts-seat.selected {
	background-color: #ffc53f;
}
div.seatCharts-seat.unavailable {
	background-color: #472B34;
}
div.seatCharts-container {
	border-right: 1px dotted #adadad;
	width: 1040px;
	padding: 20px;
	float: left;
}
div.seatCharts-legend {
	padding-left: 0px;
	position: relative; 
	top: 1px;
	bottom: 16px;
}
ul.seatCharts-legendList {
	padding-left: 0px;
}
span.seatCharts-legendDescription {
	margin-left: 5px;
	line-height: 30px;
}
.checkout-button {
	display: block;
	margin: 10px 0;
	font-size: 14px;
}
#selected-seats {
	max-height: 120px;
	overflow-y: scroll;
	overflow-x: none;
	width: 170px;
}
</style>
</head>

<body>
         
           <ul class ="nav">
               <li class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                   
                   
                   
               </li>
        
                   
                   
             
                <li><a href ="Aboutus.php">About US</a></li>
              <li><a href ="Contact.php">Contact</a></li>
               <li><a href ="helppage.php">Help</a></li>
               <li><a href ="Employeelogin.php">Login</a></li>
               
           </ul>
         
<div class="jquery-script-clear"></div>

<select id="opts" onchange="showForm()">
    <option value="0">Select a Show Time</option>
    <?php 
        echo $optOut;
    ?>
</select>

<div id="schart" style="display:none">


<div class="wrapper">
  <div class="container">
    <div id="seat-map">
      <div class="stage-indicator">Stage</div>
    </div>
	
	

	<div class="booking-details"> 
	
	
      <h2>Booking Details</h2>
      <h3> Selected Seats (<span id="counter">0</span>):</h3>
      <ul id="selected-seats">
      </ul>
      Total: <b>$<span id="total">0</span></b>
	  <form id="dataPass" action="Purchase.php" method="post">
          <input type="hidden" name="showID" id="showID"/>
          <input type="hidden" name="strJSON" id="strJSON"/>
          <button id="checkout">Checkout &raquo;</button>
      </form>
	  
      <div id="legend"></div>
	  </div>

  </div>
</div>
</div>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script> 
<script src="jquery.seat-charts.js"></script> 
<script>
		var takenseats = [];
		var $cart = $('#selected-seats'),
			$counter = $('#counter'),
			$total = $('#total');
		function updateSeats(sc) {

		sc.get(takenseats).status('available');
			var selopt = document.getElementById("opts").value;

                 <?php 
                    echo $seatsJS;
                ?>
                        
		sc.get(takenseats).status('unavailable');
		}


			var firstSeatLabel = 1;
			
		var selectedSeats = [];	
			
			$(document).ready(function() {
			
				var	sc = $('#seat-map').seatCharts({
					map: [
						
						'_____________ffffffffffffffffff__ffffffffffffffffff_____________',
						'____________fffffffffffffffffff__fffffffffffffffffff____________',
						'__________fffffffffffffffffffff__fffffffffffffffffffff__________',
						'__________fffffffffffffffffffff__fffffffffffffffffffff__________',
						'_________ffffffffffffffffffffff__ffffffffffffffffffffff_________',
						'____________fffffffffffffffffff__fffffffffffffffffff____________',
						'_________________ffffffffffffff__ffffffffffffff_________________',
						'_________________ffffffffffffff__ffffffffffffff_________________',
						'_______ffffffffffffffffffffffff__ffffffffffffffffffffffff_______',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'_____eeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeee_____',
						'_____eeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeee_____',
						'____eeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeee____',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'____eeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeee____',
						'___eeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeee___',
						'___eeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeee___',
						'___eeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeee___',
						'___eeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeee___',
						'_eeeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeeee_',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeeeee',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__eeeeeeeeeeeeeeeeeeeeeeeeeeeee__',
						'',
						'bbbbbbbb__bbbbbbbbbbbbb__bbbbbbbbbbbbbb__bbbbbbbbbbbbb__bbbbbbbb',
						'bbbbbbbb__bbbbbbbbbbbbb__bbbbbbbbbbbbbb__bbbbbbbbbbbbb__bbbbbbbb',
						'bbbbbbbb__bbbbbbbbbbbbb__bbbbbbbbbbbbbb__bbbbbbbbbbbbb__bbbbbbbb',
						'bbbbbbbb__bbbbbbbbbbbbb__bbbbbbbbbbbbbb__bbbbbbbbbbbbb__bbbbbbbb',
						'bbbbbbbb__bbbbbbbbbbbbb__bbbbbbbbbbbbbb__bbbbbbbbbbbbb__bbbbbbbb',
						'__________bbbbbbbbbbbb____________________bbbbbbbbbbbb__________',
						'__________bbbbbbbbbbbb____________________bbbbbbbbbbbb__________',
						'',
						'bbbbbbbb__bbbbbbbbbbbb__bbbbbbbbbbbbbb_______bbbbbbbbb__bbbbbbbb',
						'bbbbbbbb__bbbbbbbbbbbb__bbbbbbbbbbbbbb_______bbbbbbbbb__bbbbbbbb',
						'bbbbbbbb__bbbbbbbbbbbb__bbbbbbbbbbbbbb_______bbbbbbbbb__bbbbbbbb',
						'_bbbbbbb__bbbbbbbbbbbb__bbbbbbbbbbbbbb_______bbbbbbbbb__bbbbbbb_',
						'_bbbbbbb__bbbbbbbbbbbb__bbbbbbbbbbbbbb_______bbbbbbbbb__bbbbbbb_',
						'_bbbbbbb__bbbbbbbbbbbb__bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb__bbbbbbb_',
						
						
					],
					seats: {
						f: {
							price   : 70, //put a variable here for modification
							classes : 'premium-orchestra', //your custom CSS class
							category: 'Premium Orchestra'
						},
						e: {
							price   : 55, //put a variable here for modification
							classes : 'orchestra', //your custom CSS class
							category: 'Orchestra'
						},	
						b:  {
							price	: 35, //put a variable here for modification
							classes	: 'balcony',
							category: 'Balcony'
						}
					
					},
					naming : {
						top : false,
						getLabel : function (character, row, column) {
							return firstSeatLabel++;
						},
					},
					legend : {
						node : $('#legend'),
					    items : [
							[ 'f', 'available',   'Premium Orchestra' ],
							[ 'e', 'available',   'Orchestra'],
							[ 'b', 'available',   'Balcony'],
							[ 'f', 'unavailable', 'Already Booked']
					    ]					
					},


					click: function () {
						if (this.status() == 'available') {
							//let's create a new <li> which we'll add to the cart items
							$('<li>'+this.data().category+' Seat # '+this.settings.label+': <b>$'+this.data().price+'</b> <a href="#" class="cancel-cart-item">[cancel]</a></li>')
								.attr('id', 'cart-item-'+this.settings.id)
								.data('seatId', this.settings.id)
								.appendTo($cart);
								
							
							/*
							 * Lets update the counter and total
							 *
							 * .find function will not find the current seat, because it will change its stauts only after return
							 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
							 */
							$counter.text(sc.find('selected').length+1);
							$total.text(recalculateTotal(sc)+this.data().price);
							
							return 'selected';
						} else if (this.status() == 'selected') {
							//update the counter
							$counter.text(sc.find('selected').length-1);
							//and total
							$total.text(recalculateTotal(sc)-this.data().price);
						
							//remove the item from our cart
							$('#cart-item-'+this.settings.id).remove();
						
							//seat has been vacated
							return 'available';
						} else if (this.status() == 'unavailable') {
							//seat has been already booked
							return 'unavailable';
						} else {
							return this.style();
						}
					}
				});

				$('#selected-seats').on('click', '.cancel-cart-item', function () {
					//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
					sc.get($(this).parents('li:first').data('seatId')).click();
				});

			$("#dataPass").submit(function (){
                            checkOut(sc);
                        });
			$('#opts').change(function () {
				updateSeats(sc);
			});
		
		function checkOut(sc) {
		
			jsonObj = [];
			
			sc.find('selected').each(function () {
			
				var seatnum = this.settings.id;
				var price1 = this.data().price;
			
				item = {};
				item ["seat"] = seatnum;
				item ["price"] = price1;

				jsonObj.push(item);
			});
		var json_text = JSON.stringify(jsonObj);
                
		var show_ID = $(opts).val();
                $("#showID").attr('value', show_ID);
                $("#strJSON").attr('value', json_text);
		}
                
                <?php 
                            if(isset($show_id))
                            {
                                echo $script_str;
                            }
                ?>
                                
            });
		function recalculateTotal(sc) {
			var total = 0;
		
			//basically find every selected seat and sum its price
			sc.find('selected').each(function () {
				total += this.data().price;
			});
			
			return total;
		}
		
		</script><script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<script type="text/javascript">
    function showForm() {
        var selopt = document.getElementById("opts").value;
		if (selopt != 0) {
            document.getElementById("schart").style.display = "block";
        };
		if (selopt == 0) {
            document.getElementById("schart").style.display = "none";
        };
		// 'selopt' is a variable that is storing the value from the select with the id 'opts'
		// can be used to indicate which showing has been selected, as well as to update the
		// correct seat chart with the seats that were sold
		// console.log(selopt);
    }
</script>


</body>
</html>
