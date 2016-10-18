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
         <input type="button" value="Create Database" onclick="location='myDB.php'" />
         <form action="DataInsert.php" method="post">
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
    <input type="submit" value="Submit">
</form>
         <h2>Alice In Wonderland</h2>
          <img src="AliceInWonderland-Behance-M1.jpg" alt="AliceInWonderland" style="width:600px;height:800px;">
    
    </body>
</html>