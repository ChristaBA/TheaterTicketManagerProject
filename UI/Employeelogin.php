<html>
	<head>
		<link rel="stylesheet" type="text/css" href="UI/AjaxTest.css">

		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>

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
			//Adds an event listener to the login button that waits until it's clicked
			$("#btnLogIn").click(function() {
				//"serializes" the data from each field in the form into an array of Name/Value pairs and assigns that to the data variable
				//Here is the documentation on this function if you wanna look at it
				//http://api.jquery.com/serializeArray/
				var data = $("#loginForm").serializeArray();
				var OutputString = ""+data[0].name+": "+data[0].value+"<br>"+data[1].name+": "+data[1].value;
				//console.log(OutputString);
				$("#loginDisplay").html(OutputString);
				//sends the ajax request to the server
				//The arguments used in the function are, in order: 
				//1) the URL of the PHP file that will handle the request (in this case "your_PHP_file_here.php"),
				//2) the data you are sending with the request (in this case "data"),
				//3) the function to handle the response if the request is successful
				//
				//I can explain this a bit more in detail when we start working on the back end stuff. Or whenever you guys wanna know exactly how it works.
				$.post("your_PHP_file_here.php", data, function(response) {
					//Your code to handle the response from the PHP file will go here
				});
			});
	});
		</script>
	<header id="TopBanner" class="nav">
		<form id="loginForm" class="login">
			<label>Username:</label><input type="text" name="userName"><br>
			<label>Password:</label><input type="password" name="password"><br>
			<button type="button" id="btnLogIn">Log In</button>
		</form>
		<article id="loginDisplay" class="loginDisplay"></article>

	</body>
</html>
