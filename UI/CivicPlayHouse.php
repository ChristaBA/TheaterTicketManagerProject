<html>
    
    <head>
 <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
 <link rel="stylesheet" type="text/css" href="Ajaxcss.css">
    
  <style>
                    body{
                        
                        
                        background-color:black;
                    }
                    
                    
                    
                    
                    
                </style>   
                
 
    </head>
    <body>
<script>
	//All Jquery is supposed to go inside this function
	$(document).ready(function() {
			//Adds an event listener to the Ticket Submit button that waits until it's clicked
			$("#btnTicketSubmit").click(function() {
				//Changes the HTML in the message box to a confirmation message.
				$("#message").html("<h2>Congratulations! Your Ticket has been Order!</h2>");
			});
		
	});
		</script>
         
                
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


    

	<article id="MainBody" class="mainWindow">
		<article id="message" class="messageBox">
			<h2>Please Select a Ticket</h2>
		</article>
		<article id="ticketBox" class="ticketBox">
			<form id="ticketForm" class="ticketForm">
				<label>Ticket Type</label><select name="ticketType">
					<option>Regular Ticket</option>
					<option>Season Ticket</option>
				</select><br>
				<label>Show</label><select name="showName">
					<option>A Mid Summer Night's Dream</option>
					<option>Othello</option>
					<option>Macbeth</option>
					<option>Romeo and Juliet</option>
				</select><br>
				<label>Show Time</label><select name="showTime">
					<option>6 PM</option>
					<option>8 PM</option>
					<option>10 PM</option>
				</select><br>
				<button type="button" id="btnTicketSubmit">Order Ticket</button>
			</form>
		</article>
	</article>
	</body>
</html>