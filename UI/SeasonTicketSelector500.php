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
    //echo "Session is set to" . $_SESSION['Showid'];
}
if(isset($_SESSION['showname']))
{
    $show_name = $_SESSION['showname'];
    
    $getShows = mysqli_query($link,"Select * FROM seasonticket WHERE Company = '$companyName'");
    $array1 = array();
    $array2 = array();
    $array3 = array();
    $array4 = array();
    $array5 = array();
    $array6 = array();
    
    while($row = $getShows->fetch_assoc())
    {
        if($row['day'] == 1)
        {
            array_push($array1, $row['seat']);
        }
        if($row['day'] == 2)
        {
            array_push($array2, $row['seat']);
        }
        if($row['day'] == 3)
        {
            array_push($array3, $row['seat']);
        }
        if($row['day'] == 4)
        {
            array_push($array4, $row['seat']);
        }
        if($row['day'] == 5)
        {
            array_push($array5, $row['seat']);
        }
        if($row['day'] == 6)
        {
            array_push($array6, $row['seat']);
        }
    }
    
    //echo "Session is set to" . $_SESSION['showname'];
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
	width: 440px;
	margin: 5px 32px 15px 32px;
	background-color: #00f6f6;	
	color: #000000;
	text-align: center;
	padding: 3px;
	border-radius: 20px;
	margin-left: 274px;
}
/*.wrapper {
	width: 100%;
	text-align: center;
  margin-top:150px;
}*/
.container {
	width: 1300px;
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
	height: 20px;
	width: 20px;
	line-height: 20px;
	
}
div.seatCharts-seat {
	color: #FFFFFF;
	cursor: pointer;	
}
div.seatCharts-row {
	height: 35px;
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
	width: 970px;
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
               <div class="logo">
                    <a href ="HomePage.php">Civic Center Entertainment</a>
                   
                   
                   
               </div>
        
                   
                   
             
                <li><a href ="Aboutus.php">About US</a></li>
              <li><a href ="Contact.php">Contact</a></li>
               <li><a href ="helppage.php">Help<a/></li>
               <li><a href ="Employeelogin.php">Login</a></li>
               
           </ul>
         

<!--
<div id="jquery-script-menu">
<div class="jquery-script-center">
-->
<!--<ul>
</ul> -->
<div class="jquery-script-clear"></div>
</div>
</div>


<select id="opts" onchange="showForm()">
    <option value="0">Select Date/Time</option>
    <option value="1">Week 1, Friday Evening</option>
    <option value="2">Week 1, Saturday Evening</option>
    <option value="3">Week 1, Sunday Matinee</option>
    <option value="4">Week 2, Thursday Evening</option>
    <option value="5">Week 2, Friday Evening</option>
    <option value="6">Week 2, Saturday Evening</option>
</select>

<div id="schart" style="display:none">

<div class="wrapper">
  <div class="container">
  <!--<h2>Theater Manager Ticket Selecter</h2> -->
    <div id="seat-map">
      <div class="stage-indicator">Stage</div>
    </div>
	
	

	<div class="booking-details"> 
	
	  <h2>Season Ticket</h2>
      <h2>Booking Details</h2>
      <h3> Selected Seats (<span id="counter">0</span>):</h3>
      <ul id="selected-seats">
      </ul>
      Total: <b>$<span id="total">0</span></b>
	<form id="dataPass" action="SeasonPurchase.php" method="post">
          <input type="hidden" name="showing" id="showing"/>
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
		//takenseats = [];
		sc.get(takenseats).status('available');
			var selopt = document.getElementById("opts").value;
		//console.log("Value of selopt: ");
		//console.log(selopt);
		//var takenseats = [];
		if (selopt == 1) {
			takenseats = <?php echo json_encode($array1)?>;
			//document.getElementById("schart").style.display = "block";
        };
		if (selopt == 2) {
			takenseats = <?php echo json_encode($array2)?>;
            //document.getElementById("schart").style.display = "block";
        };
		if (selopt == 3) {
			takenseats = <?php echo json_encode($array3)?>;
            //document.getElementById("schart").style.display = "block";
        };
		if (selopt == 4) {
			takenseats = <?php echo json_encode($array4)?>;
            //document.getElementById("schart").style.display = "block";
        };
		if (selopt == 5) {
			takenseats = <?php echo json_encode($array5)?>;
            //document.getElementById("schart").style.display = "block";
        };
		if (selopt == 6) {
			takenseats = <?php echo json_encode($array6)?>;
            //document.getElementById("schart").style.display = "block";
        };
		sc.get(takenseats).status('unavailable');
		}


			var firstSeatLabel = 1;
			
		
			
		//var takenseats = ['1_16','1_17','1_18','1_19','1_20','1_22','1_23','3_16','4_17','5_18','6_19','7_20','8_22','9_23','11_23',];
		var selectedSeats = [];	
			
		//var takenseats = ['1_14','1_15',];
			$(document).ready(function() {
			
			
				
				
		//		var $cart = $('#selected-seats'),
		//			$counter = $('#counter'),
		//			$total = $('#total');
				var	sc = $('#seat-map').seatCharts({
					map: [
					/*
						'_____ff_fffffffffffffff_ff_____',
						'___ffff_fffffffffffffff_ffff___',
						'___ffff_fffffffffffffff_ffff___',
						'__fffff_fffffffffffffff_fffff__',
						'_ffffff_fffffffffffffff_ffffff_',
						'_ffffff_fffffffffffffff_ffffff_',
						'fffffff_fffffffffffffff_fffffff',
						'eeeeeee_eeeeeeeeeeeeeee_eeeeeee',
						'eeeeeee_eeeeeeeeeeeeeee_eeeeeee',
						'eeeeeee_eeeeeeeeeeeeeee_eeeeeee',
						'_eeeeee_eeeeeeeeeeeeeee_eeeeee_',
						'_eeeeee_eeeeeeeeeeeeeee_eeeeee_',
						'',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						'_bbbbbb_bbbbbbbbbbbbbbb_bbbbbb_',
						*/
						
						'eeeffffff__________________ffffffeee',
						'eeeffffff__________________ffffffeee',
						'eeeffff______________________ffffeee',
						'eeeff__________________________ffeee',
						'eee_____fff______________fff_____eee',
						'e______fffff____________fffff______e',
						'_____fffffffff________fffffffff_____',
						'___eeefffffffffff__fffffffffffeee___',
						'_eeeeeeffffffffff__ffffffffffeeeeee_',
						'_eeeeeeeeffffffff__ffffffffeeeeeeee_',
						'_eeeeeeeeeeffffff__ffffffeeeeeeeeee_',
						'_eeeeeeeeeeefffff__fffffeeeeeeeeeee_',
						'__eeeeeeeeeeeeeee__eeeeeeeeeeeeeee__',
						'____eeeeeeeeeeeee__eeeeeeeeeeeee____',
						'b______eeeeeeeeee__eeeeeeeeee______b',
						'bb__________eeeee__eeeee__________bb',
						'bbbbbb________________________bbbbbb',
						'bbbbbb__bbb______________bbb__bbbbbb',
						'_bbbbb__bbbbbbbbb__bbbbbbbbb__bbbbb_',
						'__bbbb__bbbbbbbbb__bbbbbbbbb__bbbb__',
						'________bbbbbbbbb__bbbbbbbbb________',
						'___________bbbbbb__bbbbbb___________',
						
						
						
					],
					seats: {
						f: {
							price   : 280,
							classes : 'premium-orchestra', //your custom CSS class
							category: 'Premium Orchestra'
						},
						e: {
							price   : 220,
							classes : 'orchestra', //your custom CSS class
							category: 'Orchestra'
						},	
						b:  {
							price	: 140,
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
								
								// 'this.settings.id' is the reference to the seat location, in the '10_22' format 
								//necessary to modify the taken seat list
								 //  takenseats.push(this.settings.id);
								//   sc.get(takenseats).status('unavailable');
							
							/*
							 * Lets update the counter and total
							 *
							 * .find function will not find the current seat, because it will change its stauts only after return
							 * 'selected'. This is why we have to add 1 to the length and the current seat price to the total.
							 */
							$counter.text(sc.find('selected').length+1);
							$total.text(recalculateTotal(sc)+this.data().price);
							//$window.alert(Testing);
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
				//this will handle "[cancel]" link clicks
				/*
				$('checkout-button').on('click', function () {
					window.alert("Testing");
					takenseats.push(this.settings.id);
					sc.get(takenseats).status('unavailable');
				
				});
				*/
				$('#selected-seats').on('click', '.cancel-cart-item', function () {
					//let's just trigger Click event on the appropriate seat, so we don't have to repeat the logic here
					sc.get($(this).parents('li:first').data('seatId')).click();
				});
				//let's pretend some seats have already been booked
				
				//Setting up procedure for passing-in taken seats, creating an array, and then using sc.get on that array,
				//with an unavailable status marker 
			//	var takenseats = ['1_16','1_17','1_18','1_19','1_20','1_22','1_23','3_16','4_17','5_18','6_19','7_20','8_22','9_23'];
				//sc.get(takenseats).status('unavailable');
				/*
				sc.get(['1_2','1_3','1_12','1_13','2_15','2_16','2_17','2_18','3_14','4_1', '7_1', '7_2',
				'11_12','11_12','10_7','10_8','10_9','8_20','12_22','12_23','10_3']).status('unavailable');
				*/
			$('#dataPass').submit(function () {
				checkOut(sc);
			});
			$('#opts').change(function () {
				updateSeats(sc);
				//console.log(takenseats);
			});
		
		function checkOut(sc) {
		
			jsonObj = [];
			
			sc.find('selected').each(function () {
			
				var seatnum = this.settings.id;
				var price1 = this.data().price;
			
				item = {}
				item ["seat"] = seatnum;
				item ["price"] = price1;

				jsonObj.push(item);
			});
		var json_text = JSON.stringify(jsonObj);
                var showing = $(opts).val();
                $("#showing").attr('value', showing);
                $("#strJSON").attr('value', json_text);
		//console.log(json_text);
                //
		//console.log(jsonObj);
		}
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
