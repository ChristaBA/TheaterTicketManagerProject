<?php
          
        /*  $servername = "localhost:3306";
            $username = "root";
            $password = "";
            $dbname = "testdatabase";

$link =  mysqli_connect($servername, $username, $password, $dbname);
if ($link->connect_error) {
    die("Connection failed: " . $link->connect_error);
} 

$query = "SELECT * FROM showname";
$result1 = mysqli_query($link, $query);*/

?>

<!DOCTYPE.html>
<html>
    <head>
        <meta http-equiv="Content-Type"
              content="text/html;
              charset=UTF-8">
        <title>Test Project</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
    </head>
     <body>
         <div id="main">
       <body style="background:#E66C6C">
           
            <input type="button" value="Home Page" onclick="location='HomePage.php'" />
                
         <input type="button" value="Create Database" onclick="location='myDB.php'" />
                

         <br>
         <input type="button" value="Import File" onclick="location='import.php'" />
         <br>
         
          <br>
         <input type="button" value="Export File" onclick="location='export.php'" />
         <br>
          <input type="button" value="Show Image" onclick="location='display_Images.php'" />
         <br>
          <form action="ShowInsert.php" method="post"  enctype="multipart/form-data">
    <p>
        <label for="showName">Show Name:</label>
        <input type="text" name="showname" id="showName">
    </p> 
    <p>
       <label for="statDate">Start Date:</label>
       <input type="date" name="startDate" id="startDate">
    </p>
    <p>
        <label for="endDate">End Date:</label>
       <input type="date" name="endDate" id="endDate">
    </p>
    <p>
        <label for="location">Location:</label>
        <input type="text" name="location" id="location">
    </p>
     Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Submit">
</form>
           <br>
         <br>
           <br>
         <br>  <br>
         <br>
         <p>Show Names</p>
         <select>
             <?php while($row1 = mysqli_fetch_array($result1)):;?>
             <option><?php echo $row1[0];?></option>
             <?php endwhile;?>
         </select>

         <form action="AccountInsert.php" method="post">
    <p>
        <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastName">
    </p>
    <p>
        <label for="password">Password:</label>
         <input type="password" name="pass" id="password">
    </p>
    <p>
        <label for="login">Login:</label>
        <input type="text" name="log" id="login">
    </p>
     <p>
        <label for="accountType">Account Type:</label>
        <input type="number" name="acc" id="accountType">
    </p>
      <p>
        <label for="companyName">Company Name:</label>
        <input type="text" name="companyName" id="companyName">
    </p>
    <input type="submit" value="Submit">
</form>
         <h2>Alice In Wonderland</h2>
          <img src="AliceInWonderland-Behance-M1.jpg" alt="AliceInWonderland" style="width:600px;height:800px;">
     
          
          <form action="SeasonTicketInsert.php" method="post">
    <p>
       <label for="firstName">First Name:</label>
        <input type="text" name="firstname" id="firstName">
    </p>
    <p>
        <label for="lastName">Last Name:</label>
        <input type="text" name="lastname" id="lastName">
    </p>
    <p>
        <label for="ticketnumbe">Ticket Number:</label>
       <input type="text" name="ticketNumber" id="ticketNumber">
    </p>
    <p>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
    </p>
     <p>
        <label for="phonenumber">Phone Number:</label>
        <input type="number" name="phoneNumber" id="phoneNumber">
    </p>
     <p>
        <label for="seat">Seat:</label>
        <input type="text" name="seat" id="seat">
    </p>
    <p>
        <label for="day">Day:</label>
        <input type="text" name="day" id="day">
    </p>
    <p>
        <label for="time">Time:</label>
        <input type="text" name="time" id="time">
    </p>
    <p>
        <label for="address">Address:</label>
        <input type="text" name="address" id="address">
    </p>
    <input type="submit" value="Submit">
</form>   
    </body>
</html>